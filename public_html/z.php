<?php
include ("y.php");
#echo 'processing';
#var_dump($_POST);
# echo $_POST[0];
 $id= $_POST["MyOption"];
# $addGenre= $_POST["genre"];
#$addPrice= $_POST["price"];
#echo for testing puposes
#echo $addName;
#echo $id;
#echo $addGenre;
#echo $addPrice;

#$option = isset($_POST['MyOption']) ? $_POST['MyOption'] : false;
#   if ($option) {
#      echo htmlentities($_POST['MyOption'], ENT_QUOTES, "UTF-8");
#   } else {
#     echo "task option is required";
#     exit;
#   }
seltodb("$id");
$url = 'index.php';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
