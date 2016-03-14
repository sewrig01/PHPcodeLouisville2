<?php
include ("y.php");
#echo 'processing';
 $addName= $_POST["name"];
 $addAddress= $_POST["address"];
 $addGenre= $_POST["genre"];
$addPrice= $_POST["price"];
#echo for testing puposes
#echo $addName;
#echo $addAddress;
#echo $addGenre;
#echo $addPrice;

addtodb("'$addName'","'$addAddress'","'$addGenre'","'$addPrice'");


?>
