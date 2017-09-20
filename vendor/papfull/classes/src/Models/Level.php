<?php

namespace PapFull\Models;

use PapFull\Dao\Dao;
use PapFull\Model;

class Level extends Model {

    public static function listAll() {

        $sql = new Dao();

        return $sql->select("SELECT * FROM level ORDER BY level");
    }

    public static function LevelId() {

        $sql = new Dao();

        return $sql->select("SELECT idlevel FROM level ORDER BY idlevel DESC LIMIT 1");
    }

    public static function listLevelPermission($id = int) {

        $sql = new Dao();

        return $sql->select("SELECT * FROM level INNER JOIN permission USING(idlevel) WHERE idlevel = $id");
    }

    public function insert() {

        $sql = new Dao();

        if ($this->verifyData()) {
            if ($this->verifyLevel()) {

                $_SESSION['data'] = array(
                    'level' => $this->getlevel()
                );
                $_SESSION['msg'] = "Nível de acesso já cadastrado.";
                header("location: /levels/create");

                exit;
            } else {

                $data = $sql->select("CALL sp_level_insert (:level)", array(
                    ':level' => $this->getlevel()
                ));

                if (count($data) > 0) {
                    return $data[0];
                } else {
                    throw new \Exception("Erro.");
                }
            }
        } else {
            $_SESSION['msg'] = "Nível de acesso não informado ou menor que 2 caracteres.";
            header("location: /levels/create");

            exit;
        }
    }

    private function verifyData() {
        if (empty(trim($this->getlevel())) || strlen($this->getlevel()) < 2) {
            return false;
        }

        return true;
    }

    private function verifyLevel() {

        $sql = new Dao();

        $result = $sql->select("SELECT * FROM level WHERE level = :level", array(
            ':level' => $this->getlevel()
        ));

        if (count($result) > 0) {
            return true;
        }

        return false;
    }

    public function select($idlevel) {

        $sql = new Dao();

        $result = $sql->select("SELECT * FROM level WHERE idlevel = :idlevel", array(
            ':idlevel' => $idlevel
        ));

        $this->setData($result[0]);
    }

    public function delete() {

        $sql = new Dao();

        $sql->query("CALL sp_level_delete (:idlevel)", array(
            ':idlevel' => $this->getidlevel()
        ));
    }

    public function update() {

        $sql = new Dao();

        $sql->query("CALL sp_level_update (:idlevel, :level)", array(
            ':idlevel' => $this->getidlevel(),
            ':level' => $this->getlevel()
        ));
    }

}
