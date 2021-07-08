<?php 
    session_start();
    var_dump($_REQUEST);
    var_dump($_SESSION);
    echo "Welcome " . $_SESSION['email'];
    echo "<a href='logout.php'> logout </a>";
?>