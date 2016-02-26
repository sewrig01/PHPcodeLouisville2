
<?php
include 'db_Conn.php';
echo "<ul>";
$sql = "SELECT * FROM RestList ";
		foreach($db->query($sql) as $row){
#var_dump($row);
$test[] = $row[1];

#echo '<li>'.$test.'</li> ';
}
echo"</ul>";
# var_dump($test);

#randomize using index from 0 to values in test array
echo '<h1>'.$test[rand(0, count ($test)-1)].'</h1>';
#echo rand(0, count ($test)-1);



?>
