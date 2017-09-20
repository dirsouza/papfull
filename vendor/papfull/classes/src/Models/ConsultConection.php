<?php

namespace PapFull\Models;

class ConsultConection {

    public static function connInternet() {
        $ch = curl_init("www.google.com.br");

        curl_setopt($ch, CURLOPT_CONNECT_ONLY, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        
        if (curl_exec($ch)) {
            $_SESSION['only'] = true;
            return true;
        } else {
            $_SESSION['only'] = false;
            return false;
        }
    }

}
