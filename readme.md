# Pino Library 
# Under development | This version is not stable

## Installation

Ada dua cara install Pino Library, silahkan ikuti cara dibawah ini

### Manual install Via Composer

Buat file ```package.json```, isi dengan kode json di bawah ini

```json
{
    "require": {
        "gemarkode/pino-library": "dev-master"
    },
      "minimum-stability": "dev"
}
```

Jalankan perintah dibawah untuk mulai install Library

```
composer install
```

### Integrasi Langsung Via Composer 

Gunakan perintah ini untuk langsung integrasi Via Composer

```
composer require gemarkode/pino-library
```

Jika anda belum punya ```package.json```, silahkan ikuti cara pertama

### Tidak disarankan menggunakan GIT

jangan install via ```GIT CLONE```, karena Pino Library menggunakan autoload composer. 
Kecuali jika anda bisa merubah struktur namespace dan usage di setiap File Pino Library.

## Usage

```php
<?php

    // inclue autoload vendor
    require_once __DIR__ . '/vendor/autoload.php';

    // inclue Pino Library
    use pino\Library\Pino;
    
    // code
  ?>
```

### Example Data Input

```php
$data = 'Hello --- 45425432564^%^%&^%&o Composer';
```
### Example Usage With Calling Method

```php
    $pino = new Pino();

    return $pino->is("string", $data); // result : Hello--45425432564o-Composer

    return $pino->is("integer", $data); // result : 45425432564
```

### Example Usage With Scope Resolution Operator (::)

```php
    return Pino::is("string", $data); // result : Hello--45425432564o-Composer

    return Pino::is("integer", $data); // result : 45425432564
```

cek file ```Example.php``` untuk melihat contoh penggunaan Pino Library
