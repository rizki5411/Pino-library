<?php

namespace pino\Library;

class PinoRegex{

    function __construct()
    {

    }

    public static function GetRegex($GetRequestData,$GetTypeData) {
        
        if($GetTypeData == string){
            return PinoRegex::String($GetRequestData);
        }

    }
    public static function space($GetRequestData){ 
        $value = str_replace(' ', '-', $GetRequestData); 
    }
    public static function String($GetRequestData){
             
            return preg_replace('/[^A-Za-z0-9]/', '', $GetRequestData);
    }
    public static function Integer($GetRequestData){
      
            return preg_replace('/[^0-9]/', '', $GetRequestData);

    }
}
