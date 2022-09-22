<?php
session_start();
$pw=$_POST["pw"];
if($pw=="123456789Kan"){
    echo "sucess";
    $_SESSION["user"]="yes";
}

?>