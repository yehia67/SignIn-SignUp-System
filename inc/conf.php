<?php
    //If this file doesn't exit don't load page
    if(!defined('__CONFIG__')){
        exit("Sorry you don't have accesse to this page");
    }
	// Allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');
    //Start Configuration
    //include database
    include_once "classes/DB.php";
    include_once "classes/Filter.php";
    $con = DB::getConnection();
    //End Configuration
?>