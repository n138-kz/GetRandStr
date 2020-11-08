# GetRandStr (Class)
## Before use
1. Nothing to do. Only the download.

## How to use
1. Download the `GetRandStr.php`.
1. Import(support is `Require()`) and call class.
   Note. this file is use the namespace.
         When calling a class, prefix the class name with `n138`.

## Sample
```php:_bin_sample.php
<?php
Require_once('GetRandStr.php');
$genRandomStr = new n138\genRandomStr();
$genRandomStr->setLength(24); // change the length. default is 8 len.
$genRandomStr->setCharType(12); // change the character. default is all char.
echo $genRandomStr->getResult();
```


# GetRandStr (API)

## Before use
1. Install the webserver(recommended the apache) and php.
1. Install the php-mbstring on php library.

## How to use
### Normal access
1. Download the this repos data to document root on your server.
1. Access the http://yourserver/GetRandStr

### API access
1. Download the this repos data to document root on your server.
1. Request to http://yourserver/GetRandStr, method is **GET**
1. (Optional) Customize the uri, how to use is below.

### Option
#### Change the include character
The character type that is output can be changed by putting the character specified in the `chr` argument.  
i.e. ![URI](http://img.shields.io/badge/Method-GET-yellow.svg?style=flat) `http://yourserver/GetRandStr?chr=aA1@`  

| Char | Description |
|:---- |:----------- |
| a | add the lower alphabet |
| A | add the upper alphabet |
| 1 | add the numeric |
| @ | add the special charactor |

#### Change the length
You can change the number of characters by putting a number in the `len` argument.  
i.e. ![URI](http://img.shields.io/badge/Method-GET-yellow.svg?style=flat) `http://yourserver/GetRandStr?len=12`  

#### Note
> Options `chr` and `len` can be used in combination

---
#### Default
| argument | value |
|:---- |:----------- |
| chr | aA1@ |
| len | 12 |
