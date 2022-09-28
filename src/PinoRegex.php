<?php

namespace pino\Library;

/* 
|-----------------------------------------------------------------------|
|   Don't change anything in the dependency, because the changes you    | 
|   saved can be deleted when you update the dependency.                | 
|   If you have any other ideas, post them on the Pino-Library github.  |
|-----------------------------------------------------------------------|
*/

class PinoRegex{

    function __construct()
    {

    }

    public static function GetRegex($GetTypeData,$GetRequestData) {
        
        if($GetTypeData == "string" || $GetTypeData == "String" || $GetTypeData == "STRING"){
            
            $GetRequestData = str_replace(' ', '-', $GetRequestData);
            return PinoRegex::String($GetRequestData);

        }else if($GetTypeData == "integer" || $GetTypeData == "Integer" || $GetTypeData == "INTEGER"){
            
            return PinoRegex::Integer($GetRequestData);
        
        }else{

            return NULL;
        }

    }

    public static function String($GetRequestData){

            return preg_replace('/[^A-Za-z0-9]/', '', $GetRequestData);

    }
    
    public static function Integer($GetRequestData){
      
            return preg_replace('/[^0-9]/', '', $GetRequestData);

    }
}
