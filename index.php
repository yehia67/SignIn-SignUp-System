<?php
    //Give Permisiion
    define('__CONFIG__',true);
    //Require Permisiion
    require_once "inc/conf.php";
    ?>
<!DOCTYPE html5>
<html>
  <?php
  //initailize head
  include 'inc/footer.php'
  ?>
    <body>
        <!-- Start Website-->
        <div class="web">
            <!-- Start login form-->
            <form class ="js-login">
                email<br />
                <input type ="email" require >
                <br />
                Password<br />
                <input type ="password" require >
                <br/>
                <input type ="button" value ="login">
                <br/>
                <span class ="registrate">
                Don't have an account?<a href="signup.php">signup</a>
                </span>
            </form>
             <!-- End login form-->
         <!-- End Website-->
        </div>
    </body>
</html>