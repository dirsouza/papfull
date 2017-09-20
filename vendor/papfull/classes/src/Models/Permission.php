<?php

namespace PapFull\Models;

use PapFull\Model;
use PapFull\Dao\Dao;
use PapFull\Models\Level;
use PapFull\Models\Module;

class Permission extends Model {

    private $permission_modules = [];

    public function operationType(string $operation, $data = array(), $idLevel = NULL) {
        switch ($operation) {
            case "insert":
                $level = new Level();
                $level->setData(array(
                    'level' => $data['level']
                ));

                if ($this->preparePermission($data)) {
                    $level->insert();
                    $idLevel = Level::LevelId();
                    $this->insert($this->permission_modules, (int) $idLevel[0]['idlevel']);
                } else {
                    header("location: /levels/create");

                    exit;
                }

                break;

            case "update":
                $level = new Level();
                $level->setData(array(
                    'idlevel' => (int) $idLevel,
                    'level' => $data['level']
                ));

                if ($this->preparePermission($data)) {
                    $level->update();
                    $this->insert($this->permission_modules, (int) $idLevel);
                } else {
                    header("location: /levels/update/" . (int) $idLevel);

                    exit;
                }

                break;
        }
    }

    private function preparePermission($data = array()) {

        foreach ($data as $index => $_data) {
            switch ($index) {
                case "idmodule":
                    foreach ($_data as $key_data => $value_data) {
                        $this->permission_modules['idmodule' . $key_data] = $value_data;
                    }
                    break;
                case "view":
                    foreach ($_data as $key_view => $value_view) {
                        foreach ($this->permission_modules as $key_permission => $value_permission) {
                            if ((int) $key_view === (int) $value_permission) {
                                $this->permission_modules['view' . $key_view] = $value_view;
                            }
                        }
                    }
                    break;
                case "register":
                    foreach ($_data as $key_register => $value_register) {
                        foreach ($this->permission_modules as $key_permission => $value_permission) {
                            if ((int) $key_register === (int) $value_permission) {
                                $this->permission_modules['register' . $key_register] = $value_register;
                            }
                        }
                    }
                    break;
                case "edit":
                    foreach ($_data as $key_edit => $value_edit) {
                        foreach ($this->permission_modules as $key_permission => $value_permission) {
                            if ((int) $key_edit === (int) $value_permission) {
                                $this->permission_modules['edit' . $key_edit] = $value_edit;
                            }
                        }
                    }
                    break;
                case "delete":
                    foreach ($_data as $key_delete => $value_delete) {
                        foreach ($this->permission_modules as $key_permission => $value_permission) {
                            if ((int) $key_delete === (int) $value_permission) {
                                $this->permission_modules['delete' . $key_delete] = $value_delete;
                            }
                        }
                    }
                    break;
            }
        }

        if (count($this->permission_modules) <= 0) {
            $_SESSION['data'] = array(
                'level' => $data['level']
            );
            $_SESSION['msg'] = "Nenhuma permissão de acesso foi marcada.";

            return false;
        } else {
            if (isset($_SESSION['data']) || isset($_SESSION['msg'])) {
                unset($_SESSION['data'], $_SESSION['msg']);
            }
        }

        return true;
    }

    private function insert($data = array(), $id = int) {
        $sql = new Dao();
        $modules = Module::listModules();

        for ($i = 0; $i <= count($modules); $i++) {
            foreach ($data as $key => $value) {
                if ($key === "idmodule" . $i) {
                    $permission['idlevel'] = $id;
                    $permission['idmodule'] = $value;
                    $permission['view'] = array_key_exists('view' . $value, $data) ? $data['view' . $value] : 0;
                    $permission['register'] = array_key_exists('register' . $value, $data) ? $data['register' . $value] : 0;
                    $permission['edit'] = array_key_exists('edit' . $value, $data) ? $data['edit' . $value] : 0;
                    $permission['delete'] = array_key_exists('delete' . $value, $data) ? $data['delete' . $value] : 0;

                    $this->setData($permission);

                    $sql->query("CALL sp_permission_insert (:idlevel, :idmodule, :view, :register, :edit, :delete)", array(
                        ':idlevel' => $this->getidlevel(),
                        ':idmodule' => $this->getidmodule(),
                        ':view' => $this->getview(),
                        ':register' => $this->getregister(),
                        ':edit' => $this->getedit(),
                        ':delete' => $this->getdelete()
                    ));
                }
            }
        }
    }

}
