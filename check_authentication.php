<?php
session_start();

if(!isset ($_SESSION['authenticated']) || !$_SESSION['authenticated']){
    header("location:login.php");

}
