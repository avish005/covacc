<?php
    session_start();
    $con = mysqli_connect("localhost","root","","covacc");
    define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/covacc/');
    define('SITE_PATH','http://localhost/covacc/');
    /*
    define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
    define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
    */