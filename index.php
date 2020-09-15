<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hospital management system</title>

       <!--include importing page to js and css -->
       <?php include './pages/import.html'; ?> 

    </head>
    <body id="login-body">
        <!--Login header -->
        <div class="login_header">
            <img src="img/hospital_logone1w.png" width="210px" height="90px;" class="login_logo1" />
            
        </div>
        
         <!--Login form-->
        <div id="login-wrapper" >
            <center><form method="post" action="service/login.php">
                <h4>User Name:</h4>
                    <?php include'./service/users/usernames.php' ?>
                <h4>Password:</h4>
                <input type="password" name="password" style="color: white"/> <br/>
                <input type="submit" name="submit" value="Login"/>
               <?php
        $msg = "";
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == "Invalid") {
               echo $msg = "<br/><p class='msg'>Invalid Login. Please try again!</p>";
            }
        }
        ?>
            </form></center>
        </div>
    </body>
</html>
