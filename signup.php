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
            <!-- Start SignUp form-->
            <form class ="js-login">
                username<br />
                <input type ="text" require >
                <br />
                email<br />
                <input type ="email" require >
                <br />
                Password<br />
                <input type ="password" require >
                <br/>
                <input type ="button" value ="Register">
                <br/>        
            </form>
             <!-- End SignUp form-->
         <!-- End Website-->
        </div>
    </body>
</html>