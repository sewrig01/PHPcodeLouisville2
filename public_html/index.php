
<?php
		include 'db_Conn.php';
	#	include 'z.php';
			include 'y.php';

#			$a="1";
#			$b="2";
#			$c="3";
#			$d="4";
#			$a="5";
#			$b="6";
#			$c="7";
#			$d="8";
#			$a="9";
#			$b="10";
#			$c="11";
#			$d="12";

#addtodb($a,$b,$c,$d);
#deltodb();

#was testing if proper $db
#var_dump($db);

#########Sql statement is returning double array
#		$sql = "SELECT * FROM movies_";
#		foreach($db->query($sql) as $row){

$stmt = $db->query('SELECT * FROM EatSpots');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
#var_dump($results);
echo $results[1]["EatName"];
#			var_dump( $row);





		#	foreach($row as $item){
			#	echo $item;
		#	}
#$test[] = $row;
#echo '<li>'.$test.'</li> ';
#}
#var_dump($test);
#foreach ($test as $result){
#	foreach ($result as $new){
#		echo $new.'<p></p>';
#	};
#};

#var_dump($row);
#####randomize using index from 0 to values in test double array

#echo '<h1>'.$test[rand(0, count ($test)-1)][1].'</h1>';
#echo count ($test[0]);
#$genrand = rand(0, count ($test)-1);
#var_dump ($genrand);
################
##AS list items###
#echo '<ul>';
#foreach ($test[$genrand] as $v){
#	echo  '<li>'.$v.'</li>' ;
#}
#echo'</ul>';
#######################
#echo '<h1>'.$test[$genrand][1].'</h1>'."/n".$test[$genrand][2].$test[$genrand][3].$test[$genrand][4];



?>
