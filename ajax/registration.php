<?php
    //Give Permisiion
    define('__CONFIG__',true);
    //Require Permisiion
    require_once "../inc/conf.php";
    //Make return json format
   if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1){
       header('Content-Type:application/json');
       //make sure user isn't already exist
       $return = [];
       $username =Filter::String($_POST['text']);
       $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
       $email =Filter::String($_POST['email']);
       $findUser = $con->prepare("SELECT user_email FROM user WHERE user_email = LOWER(:email) LIMIT 1");
       $findUser->bindParam(':email',$email,PDO::PARAM_STR); 
       $findUser->execute();
       //make sure user is added
      /* if($findUser->rowCount() == 1){
           //user exist
           $return['error'] ="you already have an account"; 
       }else{*/
           //add user
           $addUser = $con->prepare("INSERT into user(user_name,user_email,user_password) values (:text,LOWER(:email),:password)");
           $addUser->bindParam(':text',$username,PDO::PARAM_STR); 
           $addUser->bindParam(':email',$email,PDO::PARAM_STR);
           $addUser->bindParam(':password',$password,PDO::PARAM_STR); 
           $addUser->execute();
           $user_id = $con->lastInsertId();
		   $_SESSION['user_id'] = (int) $user_id;
		   $return['redirect'] = '/dashboard.php?message=welcome';
		   $return['is_logged_in'] = true; 
        //}
       //return info and redirect the page using javascript
       echo json_encode($return,JSON_PRETTY_PRINT);
       exit;
    }
    else{
    //die
    exit('error fl 5ara');   
   } 
    ?>
