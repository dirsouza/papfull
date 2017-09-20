<?php

namespace PapFull\Models;

use PapFull\Dao\Dao;
use PapFull\Model;

class User extends Model {

    const SESSION = "User";
    const OPTIONS = [
        'cost' => 12
    ];
    const STRING_SECURITY = "bG9jYWwucGFwZnVsbC5icg==";
    const METHOD_ENCRYPT = "AES-128-CBC";

    public static function login($login, $password) {

        $sql = new Dao();

        $results = $sql->select("SELECT * FROM user WHERE login = :LOGIN", array(
            ':LOGIN' => $login
        ));

        if (count($results) === 0) {

            header("location: /login/error");
            exit;
        }

        $data = $results[0];

        if (password_verify($password, $data['pass']) === true) {

            $user = new User();

            $user->setData($data);

            $_SESSION[User::SESSION] = $user->getValues();

            return $user;
        } else {

            header("location: /login/error");
            exit;
        }
    }

    public static function verifyLogin() {

        if (
                !isset($_SESSION[User::SESSION]) ||
                !$_SESSION[User::SESSION] ||
                !(int) $_SESSION[User::SESSION]['iduser'] > 0
        ) {
            if (isset($_SESSION[User::SESSION])) {
                header("location: /login/error");
            } else {
                header("location: /login");
            }
            exit;
        }
    }

    public static function verifyLevel($idmodule) {
        $sql = new Dao();

        $result = $sql->select("SELECT * FROM level a INNER JOIN user b USING(idlevel) WHERE b.iduser = :iduser", array(
            ':iduser' => $_SESSION[User::SESSION]['iduser']
        ));

        if (count($result) > 0) {
            foreach ($result[0] as $key => $value) {
                $fieldName = substr($key, 9, strlen($key));
                if ($fieldName === $idmodule || $value !== $idmodule) {
                    header("location: /");

                    exit;
                }
            }
        }
    }

    public static function logout() {

        $_SESSION[User::SESSION] = NULL;
    }

    public static function listAll() {

        $sql = new Dao();

        return $sql->select("SELECT * FROM user a INNER JOIN person b USING(idperson) INNER JOIN level c USING(idlevel) ORDER BY a.iduser");
    }

    public function insert() {

        $sql = new Dao();

        if ($this->verifyData()) {
            if ($this->verifyUser()) {
                header("location: /users/create");

                exit;
            } else {
                $sql->select("CALL sp_user_insert (:person, :login, :pass, :email, :phone, :cell, :idlevel)", array(
                    ':person' => $this->getperson(),
                    ':login' => $this->getlogin(),
                    ':pass' => password_hash($this->getpass(), PASSWORD_DEFAULT, User::OPTIONS),
                    ':email' => $this->getemail(),
                    ':phone' => $this->getphone(),
                    ':cell' => $this->getcell(),
                    ':idlevel' => $this->getidlevel()
                ));

                if (isset($_SESSION['newUser']) || isset($_SESSION['msg'])) {
                    unset($_SESSION['newUser'], $_SESSION['msg']);
                }
            }
        } else {
            $this->restoreData();

            $_SESSION['msg'] = "Existem dados obrigatórios que não foram informados.";

            header("location: /users/create");

            exit;
        }
    }

    private function verifyData() {
        if (empty(trim($this->getperson()))) {
            return false;
        }

        if (empty(trim($this->getlogin()))) {
            return false;
        }

        if (empty(trim($this->getpass()))) {
            return false;
        }

        if (empty(trim($this->getemail()))) {
            return false;
        }

        if (empty(trim($this->getidlevel()))) {
            return false;
        }

        return true;
    }

    private function verifyUser() {
        $user = User::listAll();

        foreach ($user as $item) {
            if ($item['login'] === $this->getlogin() || $item['email'] === $this->getemail()) {
                $this->restoreData();

                $_SESSION['msg'] = "Usuário já cadastrado.";

                return true;
            }
        }

        return false;
    }

    private function restoreData() {
        $_SESSION['newUser'] = array(
            'person' => $this->getperson(),
            'login' => $this->getlogin(),
            'pass' => $this->getpass(),
            'email' => $this->getemail(),
            'phone' => $this->getphone(),
            'cell' => $this->getcell(),
            'idlevel' => $this->getidlevel()
        );
    }

    public function get($iduser) {

        $sql = new Dao();

        $results = $sql->select("SELECT * FROM user a INNER JOIN person b USING(idperson) WHERE a.iduser = :iduser", array(
            ':iduser' => $iduser
        ));

        $this->setData($results[0]);
    }

    public function update() {

        $sql = new Dao();

        $sql->select("CALL sp_user_update (:iduser, :person, :email, :phone, :cell, :idlevel)", array(
            ':iduser' => $this->getiduser(),
            ':person' => $this->getperson(),
            ':email' => $this->getemail(),
            ':phone' => $this->getphone(),
            ':cell' => $this->getcell(),
            ':idlevel' => $this->getidlevel()
        ));
    }

    public function updatePass() {
        $sql = new Dao();

        $sql->query("UPDATE user SET pass = :pass WHERE iduser = :iduser", array(
            ':pass' => password_hash($this->getpass(), PASSWORD_DEFAULT, User::OPTIONS),
            ':iduser' => $this->getiduser()
        ));
    }

    public function delete() {

        $sql = new Dao();

        $sql->query("CALL sp_user_delete (:iduser)", array(
            ':iduser' => $this->getiduser()
        ));
    }

    public static function getForgot($email) {

        $sql = new Dao();

        $results = $sql->select("
            SELECT * FROM person a 
            INNER JOIN user b 
            USING (idperson) 
            WHERE a.email = :email", array(
            ':email' => $email
        ));

        if (count($results) === 0) {

            throw new \Exception("Não foi possível recuperar a senha.");
        } else {

            $dataResults = $results[0];

            $recovery = $sql->select("CALL sp_user_recovery (:iduser, :ip)", array(
                ':iduser' => $dataResults['iduser'],
                ':ip' => $_SERVER["REMOTE_ADDR"]
            ));

            if (count($recovery) === 0) {

                throw new \Exception("Não foi possível recuperar a senha.");
            } else {

                $dataRecovery = $recovery[0];

                //$code = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, User::SECRET, $dataRecovery['idrecovery'], MCRYPT_MODE_ECB));
                //$code = password_hash($dataRecovery['idrecovery'], PASSWORD_DEFAULT, User::OPTIONS);
                $code_encrypted = User::forgotEncrypt($dataRecovery['idrecovery'], User::STRING_SECURITY);

                $link = "http://www.hcodecommerce.com.br/admin/forgot/reset?code=$code_encrypted";

                $mailer = new Mailer($dataResults['desemail'], $dataResults['desperson'], "Redefinir Senha da Hcode Store", "forgot", array(
                    'name' => $dataResults['desperson'],
                    'link' => $link
                ));

                $mailer->send();

                return $dataResults;
            }
        }
    }

    private function forgotEncrypt($data, $key) {
        $encryption_key = base64_decode($key);
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(User::METHOD_ENCRYPT));
        $encrypted = openssl_encrypt($data, User::METHOD_ENCRYPT, $encryption_key, 0, $iv);

        return base64_encode($encrypted . "::" . $iv);
    }

    public static function validForgotDecrypt($code) {

        $sql = new Dao();

        $results = $sql->select("SELECT idrecovery FROM user_recovery");

        $code_decrypted = User::forgotDecrypt($code, User::STRING_SECURITY);

        if (count($results) > 0) {

            foreach ($results as $_data) {

                foreach ($_data as $key => $value) {

                    if ($value === $code_decrypted) {

                        $user = $sql->select("
                        SELECT * FROM user_recovery a 
                        INNER JOIN user b USING(iduser) 
                        INNER JOIN person c USING(idperson) 
                        WHERE 
                            a.idrecovery = :idrecovery 
                            AND 
                            a.dtrecovery IS NULL 
                            AND 
                            DATE_ADD(a.dtregister, INTERVAL 1 HOUR) >= NOW()", array(
                            ':idrecovery' => $value
                        ));

                        if (count($user) === 0) {

                            throw new \Exception("Não foi possível recuperar a senha.");
                        } else {

                            return $user[0];
                        }
                    }
                }
            }
        }
    }

    private function forgotDecrypt($data, $key) {
        $encryption_key = base64_decode($key);
        list($encrypted_data, $iv) = explode("::", base64_decode($data), 2);

        return openssl_decrypt($encrypted_data, User::METHOD_ENCRYPT, $encryption_key, 0, $iv);
    }

    public static function setForgotUser($idrecovery) {

        $sql = new Dao();

        $sql->query("UPDATE tb_userspasswordsrecoveries SET dtrecovery = NOW() WHERE idrecovery = :idrecovery", array(
            ':idrecovery' => $idrecovery
        ));
    }

    public function setPassword($password) {

        $sql = new Dao();

        $sql->query("UPDATE tb_users SET despassword = :password WHERE iduser = :iduser", array(
            ':password' => $password,
            ':iduser' => $this->getiduser()
        ));
    }

}
