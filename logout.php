<?php

    session_start();
    session_destroy();
    setcookie("PHPSESSID","",time()-3600,"/");
    var_dump($_REQUEST);
    var_dump($_SESSION);
    echo "You successfully logout. Click here to 
    <a href='index.php'> login  </a>again.";
?>