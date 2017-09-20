<?php

namespace PapFull\Models;

use PapFull\Dao\Dao;
use PapFull\Model;

class Company extends Model {
    
    public static function verifyCompany() {
        $sql = new Dao();
        
        return $sql->select("SELECT * FROM company");
    }
}
