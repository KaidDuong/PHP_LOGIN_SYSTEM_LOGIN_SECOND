<?php 
//if there is no constant called defined __CONFIG__  , then do not load this file 
if(!defined('__CONFIG__')){
    echo " You haven't a config file";
}
//Session are always turned on
if(!isset($_SESSION)){
    session_start();
    }

//our config is below
//allow errors
error_reporting(-1);
ini_set('display_errors','On');

//decleared variable ALLOW FOOTER
define('ALLOW FOOTER',true);
//include the DB.php file
include_once "../Database/Classes/Data.php";
include_once"../Database/Classes/Filter.php";
include_once"../Database/Classes/User.php";
include_once"../Database/Classes/Page.php";
$con= Data::getConnection();
?>