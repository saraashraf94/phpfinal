<?php

    session_start();

    session_unset();

    session_destroy();
    //print_r($_SESSION);

    header('Location:http://localhost/PHP_project/startbootstrap-blog-home-gh-pages/login/index.php');

?>