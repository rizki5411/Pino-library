# Pino Library

Pino Library merupakan sebuah library yang dikembangkan untuk melakukan Validasi atau memfilter berbagai karakter yang masuk kedalam HTTP Request. Request yang menggunakan Method GET atau POST, akan diubah menjadi tipe data String atau Integer. Pino Library juga bisa digunakan untuk melakukan Validasi Variable data.

## Fitur

|   Jenis |  Deskripsi  |  Contoh Input | Contoh Output  |
| :------------ | :------------ | :------------ | :------------ |
|  Validasi String | Validasi String dapat merubah semua data yang masuk menjadi String, menghapus semua karakter khusus, dan merubah spasi menjadi tanda strip (-)  |  Hello --- 45425432564^%^%&^%&o Composer  | Hello--45425432564o-Composer  |
| Validasi Integer  | Merubah semua data yang masuk menjadi integer, serta menghapus semua data yang bukan bagian dari integer termasuk abjad dan karakter khusus.  | Hello --- 45425432564^%^%&^%&o Composer  | 45425432564  |

## Install

Install dengan Composer menggunakan perintah berikut

```
composer require gemarkode/pino-library
```

Jiika anda create Package.json sendiri, bisa gunakan json di bawah

```
{
    "require": {
        "gemarkode/pino-library": "dev-master"
    },
      "minimum-stability": "dev"
}
```

kemudian mulai install dependensi dengan perintah berikut

```
composer install
```

## Cara Menggunakan

Import library

```php
<?php

    // include autoload vendor
    require_once __DIR__ . '/vendor/autoload.php';

    // include Pino Library
    use pino\Library\Pino;
    
    // code
	
  ?>
  ```

Contoh data yang masuk

```php
$data = 'Hello --- 45425432564^%^%&^%&o Composer';
```

Menggunakan Pino Library dengan memanggil Method secara langsung

```php
    $pino = new Pino();

    return $pino->is("string", $data); // result : Hello--45425432564o-Composer

    return $pino->is("integer", $data); // result : 45425432564
```

Menggunakan Pino Library dengan Scope Resolution Operator (::)

```php
    return Pino::is("string", $data); // result : Hello--45425432564o-Composer

    return Pino::is("integer", $data); // result : 45425432564
```

kamu bisa melihat contoh penerapan di file ```Example.php```

## Penerapan 

Contoh penerapan Pino Library

#### Menyaring karakter

Untuk menyaring data agar menghasilkan data String Atau Integer

|  No | Jenis Validasi  |  Input | Output  | Dokumentasi  |
| :------------ | :------------ | :------------ | :------------ | :------------ |
| 1  | String Validation  | Request dari Http POST, Convert dari Variable data  | Data String  | Coming Soon  |
| 2  |  Integer Validation (number only)  | Request dari Http POST, Convert dari Variable data  | Data Integer  | Coming Soon  |

#### Mengamankan Parameter 

Menyaring data untuk mengapus berbagai jenis kode injeksi yang di kirim melalui Parameter

|  No | Jenis Kerentanan  | Type | Contoh Parameter  | Contoh Bentuk Injeksi  | Contoh output  | Dokumentasi|
| :------------ | :------------ | :------------ |:------------ | :------------ | :------------ | :------------ |
| 1  | Cross site scripting (XSS )  | String | news.php?id=1  | <script>alert(1)</script>  | scriptalert1script  | Coming Soon  |
| 2  | Cross site scripting (XSS )  | Integer | news.php?id=1  | <script>alert(1)</script>  | 1  | Coming Soon  |
| 3  |  SQL injection | String | news.php?id=1  | '+ORDER+BY+1--+  | 1ORDERBY1  | Coming Soon |
| 4  |  SQL injection | Integer | news.php?id=1  | '+ORDER+BY+1--+  | 11  | Coming Soon |


#### Validasi Form 

Menyaring data yang masuk melalui inputan atau form

|  No | Jenis Kerentanan  | Type | Contoh Bentuk Injeksi  | Contoh output  | Dokumentasi|
| :------------ | :------------ |:------------ | :------------ | :------------ | :------------ |
| 1  | Cross site scripting (XSS )  | String | Coming Soon | Coming Soon | Coming Soon|
| 2  | Cross site scripting (XSS )  | Integer | Coming Soon | Coming Soon | Coming Soon|
| 3  |  SQL injection | String | Coming Soon | Coming Soon | Coming Soon|
| 4  |  SQL injection | Integer | Coming Soon | Coming Soon | Coming Soon|

## Ubah Konfigurasi

coming soon
