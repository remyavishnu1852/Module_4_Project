<?php
session_start();
?>
<!DOCTYPE html>
<html>  
<head>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>  
    <link rel = "stylesheet" type = "text/css" href = "css/login.css"> 
      
</head>  
<body>  
        <div id="login">  
        <h1>ADMIN LOGIN</h1>  
        <form action = "login-verify.php" method = "POST" class="form">    
                <input type = "text" name  = "username" placeholder="Enter Username"  required/><br/>    
                <input type = "password" name  = "password" placeholder="Enter Password"  required/><br/>     
                <input type = "submit" value = "Login" name="submit_email" />   
        </form>
        </div>  
</body>
</html>