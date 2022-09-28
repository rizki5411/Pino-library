<?php

// include autoload vendor
require_once __DIR__ . '/vendor/autoload.php';

// inclue Pino Library
use pino\Library\Pino;

// Example Data Input

$data = 'Hello --- 45425432564^%^%&^%&o Composer';

// Example With Calling Method

$pino = new Pino();

return $pino->is("string", $data); // result : Hello--45425432564o-Composer

return $pino->is("integer", $data); // result : 45425432564

// Example With Scope Resolution Operator (::)

return Pino::is("string", $data); // result : Hello--45425432564o-Composer

return Pino::is("integer", $data); // result : 45425432564
