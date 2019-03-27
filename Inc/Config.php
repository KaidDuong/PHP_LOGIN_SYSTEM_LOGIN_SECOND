<?php 
//if there is no constant called defined __CONFIG__  , then do not load this file 
if(!defined('__CONFIG__')){
    echo " You haven't a config file";
}
//our config is below
//allow errors
error_reporting(-1);
ini_set('display_errors','On');

//decleared variable ALLOW FOOTER
define('ALLOW FOOTER',true);


?>