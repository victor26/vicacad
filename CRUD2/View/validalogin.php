<?php
session_cache_expire(1);
session_start();

if(!isset($_SESSION["login"])){
   echo "<script>";
    echo " window.location='index.php'";
    echo "</script>";
}



