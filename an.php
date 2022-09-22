<?php
require "database.php";
$pic_ol=$_FILES["pic"]["tmp_name"];
$nl="newpics/".uniqid().$_FILES["pic"]["name"];



$title=$_POST["tit"];
$desc=$_POST["desc"];
move_uploaded_file($pic_ol,$nl);

$var=Database::iud("INSERT INTO `news` (`title`,`description`,`pic`) VALUES(?,?,?)");
$var->bind_param("sss",$title,$desc,$nl);
$var->execute();
?>