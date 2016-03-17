
<?php
$pageTitle = "Resturant Picker";
$Section = "Main";
include ("header.php");
include 'db_Conn.php';
	#	include 'z.php';
include 'y.php';
include 'display.php';
#			$a="'TacoBell'";
#			$b="'1234 Old Mill Road'";
#			$c="'Fast Food'";
#			$d="'Cheap'";
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
#seltodb();
#deseltodb();
#was testing if proper $db
#var_dump($db);

#########Sql statement is returning double array
#		$sql = "SELECT * FROM movies_";
#		foreach($db->query($sql) as $row){

$stmt = $db->query('SELECT * FROM EatSpots');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
#var_dump($results);
#echo $results[0]["EatName"];
#			var_dump( $row);
#display picked items
foreach ($results as $id=>$item){
	#if ($id == 'y'){
	#	echo display_all($id,$item);}
if ($item["EatPicked"]=="y"){
	echo display_all($id,$item);
};
}
echo "++++++++++++++++++++++++++++=";
?>
<form method="post" action = "x.php">
	<select name = "MyOption">
	<option selected="selected">
	Choose one
	</option>
<?php
foreach ($results as $item){
	if ($item["EatPicked"]=="y"){
?>
<option value = "<?php echo $item["id"]; ?>">
	<?php echo $item["EatName"]." ".$item["EatAddress"]; ?></option>
	<?php
}}
 ?>
</select>
<input type = "submit" value="submit">
<?php
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@";







#sort out only selected

foreach ($results as $id=>$item){
if ($item["EatPicked"]=="y"){
	$test[] = $item;
	};
}
#var_dump($test);
#echo '<h1>'.$test[rand(0, count ($test)-1)][1].'</h1>';
#print randomized selection from picks
echo $test[rand(0, count ($test)-1)]["EatName"];
$genrand = rand(0, count ($test)-1);
#echo $genrand;

echo "++++++++++++++++++++++++++++=";
##Print Whole Display - Commented ot to allow for drop down
#foreach ($results as $id=>$item){
#	echo display_all($id,$item);
#}
?>
<h1>FORM?</h1>
<form method = "post" action = "form.php">
	<input type = "submit" value = "Add a resturant" />
	</form>
	<?php
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
#+++++++++++++++++++++++++++++++++++++++
#working on selectable list.
?>
<form method="post" action = "z.php">
	<select name = "MyOption">
	<option selected="selected">
	Choose one
	</option>
<?php
foreach ($results as $item){
	if ($item["EatPicked"]!="y"){
?>
<option value = "<?php echo $item["id"]; ?>">
	<?php echo $item["EatName"]." ".$item["EatAddress"]; ?></option>
	<?php
}}
 ?>
</select>
<input type = "submit" value="submit">
