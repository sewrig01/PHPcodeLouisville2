
<?php
	include 'db_Conn.php';

$sql = "SELECT * FROM RestList ";
		foreach($db->query($sql) as $row){

$test[] = $row;



#echo '<li>'.$test.'</li> ';
}
#var_dump($test);
foreach ($test as $result){
	foreach ($result as $new){
		echo $new.'<p></p>';
	};
};

#var_dump($row);
#randomize using index from 0 to values in test double array

#echo '<h1>'.$test[rand(0, count ($test)-1)][1].'</h1>';
#echo count ($test[0]);
$genrand = rand(0, count ($test)-1);
#var_dump ($genrand);
################
##AS list items###
#echo '<ul>';
#foreach ($test[$genrand] as $v){
#	echo  '<li>'.$v.'</li>' ;
#}
#echo'</ul>';
#######################
echo '<h1>'.$test[$genrand][1].'</h1>'."/n".$test[$genrand][2].$test[$genrand][3].$test[$genrand][4];


# Add to database
$a='monkey';
$b='city';
$c='fred';
$d = 'doug';
$sql = "INSERT INTO EatSpots ('EatName', 'EatAddress', 'EatGenre', 'EatPrice')
VALUES ('$a','$b','$c','$d');";
mysql_query($sql);
?>
