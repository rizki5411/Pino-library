<?php

namespace pino\Library;

use pino\Library\PinoRegex;

class Pino{

    public static function is($GetRequestData,$GetTypeData) {

        return PinoRegex::GetRegex($GetRequestData,$GetTypeData);
        
    }

}
