<?php

namespace pino\Library;

use pino\Library\PinoRegex;

class Pino{

    public static function is($GetTypeData,$GetRequestData) {

        return PinoRegex::GetRegex($GetTypeData,$GetRequestData);
        
    }

}
