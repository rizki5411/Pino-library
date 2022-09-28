<?php

namespace pino\Library;

use pino\Library\PinoRegex;

/* 
|-----------------------------------------------------------------------|
|   This is the Pino Library Core System                                |
|   Please don't change anything here because it's a static method      |
|-----------------------------------------------------------------------|
*/

class Pino{

    public static function is($GetTypeData,$GetRequestData) {

        return PinoRegex::GetRegex($GetTypeData,$GetRequestData);
        
    }

}
