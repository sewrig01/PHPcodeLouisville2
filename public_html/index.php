<?php
include 'db_Conn.php';
echo "<pre>";
$sql = "SELECT * FROM RestList ";
		foreach($db->query($sql) as $row){
#var_dump($row);
$test = $row[1];
echo $test;
}
echo"yesssss";
?>
