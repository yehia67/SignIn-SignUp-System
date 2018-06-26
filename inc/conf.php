<?php
    //If this file doesn't exit don't load page
    if(!defined('__CONFIG__')){
        exit("Sorry you don't have accesse to this page");
    }
    //Start Configuration
    //include database
    include_once "classes/DB.php";
    $con = DB::getConnection();
    //End Configuration
?>