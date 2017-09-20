<?php

namespace PapFull\Models;

use PapFull\Dao\Dao;
use PapFull\Model;

class Module extends Model {

    public static function listAll() {

        $sql = new Dao();

        return $sql->select("SELECT idmodule, project, module FROM module a INNER JOIN project b USING(idproject)");
    }
    
    public static function listModules() {
        
        $sql = new Dao();
        
        return $sql->select("SELECT idmodule FROM module");
        
    }

}
