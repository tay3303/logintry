<html>
<body>

<form action="validate.php" method="post">

E-mail: <input type="text" id="email" name="email"><br>
Password: <input type="password" id="pass" name="password"><br>
<input type="checkbox" name="remember" value="1" />Remember Me <br>
<input type="submit" value="Login" name="login">

</form>


<?php
if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
   
    //what does this mean??
    echo "
          document.getElementById('email').value = '$email';
          document.getElementById('pass').value = '$pass';
          ";
}

?>

</body>
</html>


