<?php
    //Give Permisiion
    define('__CONFIG__',true);
    //Require Permisiion
    require_once "../inc/conf.php";
    //Make return json format
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
       header('Content-Type:application/json');
       //make sure user isn't already exist
       $return = [];
       //make sure user is added

       //return info and redirect the page using javascript
       $return['redirect'] = 'dashboard.php';
       echo json_encode($return,JSON_PRETTY_PRINT);
       exit;
    }
    else{
    //die
    exit('test');   
   } 
    ?>
