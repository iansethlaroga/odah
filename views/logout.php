<?php
    session_start();
    session_destroy();

    header('Location:../views/home/home.php');

?>