<?php
$pic=$_POST["pic"];
unlink($pic);
require "database.php";
Database::iud("DELETE FROM `news` WHERE `id`='".$_POST["id"]."'")->execute();
?>