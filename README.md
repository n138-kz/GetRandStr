# Before use
1. Install the webserver(recommended the apache) and php.
1. Install the php-mbstring on php library.

# How to use
## Normal access
1. Download the this repos data to document root on your server.
1. Access the http://yourserver/GetRandStr

## API access
1. Download the this repos data to document root on your server.
1. Request to http://yourserver/GetRandStr, method is **GET** 
1. (Optional) Customize the uri, how to use is below.

## Option
### Change the include character
The character type that is output can be changed by putting the character specified in the `chr` argument.  
i.e. ![URI](http://img.shields.io/badge/Method-GET-yellow.svg?style=flat) `http://yourserver/GetRandStr?chr=aA1@`  

| Char | Description |
|:---- |:----------- |
| a | add the lower alphabet |
| A | add the upper alphabet |
| 1 | add the numeric |
| @ | add the special charactor |

### Change the length
You can change the number of characters by putting a number in the `len` argument.  
i.e. ![URI](http://img.shields.io/badge/Method-GET-yellow.svg?style=flat) `http://yourserver/GetRandStr?len=12`  

### Note
> Options `chr` and `len` can be used in combination

---
### Default
| argument | value |
|:---- |:----------- |
| chr | aA1@ |
| len | 12 |
