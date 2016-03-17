<?php
	$pageTitle = "Restaurant Picker";
	$Section = "Main";
	$PgHeading = "My List...";
	$sorttype="name";
?>
<form method="POST" action="index.php">
	<input type="submit" name="sorttype" value="name" />
	<input type="submit" name="sorttype" value="address" />
	<input type="submit" name="sorttype" value="genre" />
	<input type="submit" name="sorttype" value="price" />
</form>

<?php
	$sorttype = $_POST['sorttype'];
		#includes
		include "header.php";
		include 'db_Conn.php';
		include 'y.php';
		include 'display.php';
#Database connect and dump to $results sorted based on $sorttype variable
if ($sorttype == "name"){
			$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatName');
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	#display picked items
			foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
				if ($item["EatPicked"]=="y"){
					echo display_all($id,$item);
				};
			}
}
 elseif  ($sorttype == "address"){
	$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatAddress');
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if ($item["EatPicked"]=="y"){
				echo display_all($id,$item);
				};
			}
}
 elseif  ($sorttype == "genre"){
	$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatGenre');
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if ($item["EatPicked"]=="y"){
				echo display_all($id,$item);
				};
			}
}
	elseif  ($sorttype == "price"){
				$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatPrice');
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
					#display picked items
					foreach ($results as $id=>$item){
						#use EatPicked to determine if flag is set
						if ($item["EatPicked"]=="y"){
							echo display_all($id,$item);
							};
						}
}
						else {
							$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatName');
							$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
								#display picked items
								foreach ($results as $id=>$item){
									#use EatPicked to determine if flag is set
									if ($item["EatPicked"]=="y"){
										echo display_all($id,$item);
										};
									}
}
#Temporary spacer
	echo "++++++++++++++++++++++++++++=";
##trying a asort function
#display picked items

#echo ")))))))))))))))))))))))";
#asort($results);

#foreach ($results as $id=>$item){
#	#use EatPicked to determine if flag is set
#	if ($item["EatPicked"]=="y"){
#		echo display_all($id,$item);
#		};
#	}

#Temporary spacer
	echo "++++++++++++++++++++++++++++=";
?>
<!-- Use form to remove from Picked list -->
<form method="post" action = "x.php">
	<select name = "MyOption">
	<option selected="selected">
	Remove from My List
	</option>
<?php
foreach ($results as $item){
	if ($item["EatPicked"]=="y"){
?>
<!-- Fill in values to populate Selection drop down -->
<option value = "<?php echo $item["id"]; ?>">
	<?php echo $item["EatName"]." ".$item["EatAddress"]; ?></option>
	<?php
}}
 ?>
</select>
<input type = "submit" value="submit">
</form>
<?php
		#Temporary spacer
echo "++++++++++++++++++++++++++++=";

#sort out only selected

foreach ($results as $id=>$item){
if ($item["EatPicked"]=="y"){
	$test[] = $item;
	};
}
#randomize from selected results
echo $test[rand(0, count ($test)-1)]["EatName"];
$genrand = rand(0, count ($test)-1);

#Temporary spacer
echo "++++++++++++++++++++++++++++=";

##Print Whole Display - Commented ot to allow for drop down
#foreach ($results as $id=>$item){
#	echo display_all($id,$item);
#}
?>
<form method = "post" action = "form.php">
	<input type = "submit" value = "Add a resturant" />
	</form>
	<?php

#echo '<h1>'.$test[$genrand][1].'</h1>'."/n".$test[$genrand][2].$test[$genrand][3].$test[$genrand][4];
#+++++++++++++++++++++++++++++++++++++++
#Database connect and dump to $results sorted based on $sorttype variable
if ($sorttype == "name"){
			$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatName');
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	#display picked items
			foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
				if ($item["EatPicked"]!="y"){
					echo display_all($id,$item);
				};
			}
}
 elseif  ($sorttype == "address"){
	$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatAddress');
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if ($item["EatPicked"]!="y"){
				echo display_all($id,$item);
				};
			}
}
 elseif  ($sorttype == "genre"){
	$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatGenre');
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if ($item["EatPicked"]!="y"){
				echo display_all($id,$item);
				};
			}
}
	elseif  ($sorttype == "price"){
				$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatPrice');
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
					#display picked items
					foreach ($results as $id=>$item){
						#use EatPicked to determine if flag is set
						if ($item["EatPicked"]!="y"){
							echo display_all($id,$item);
							};
						}
}
						else {
							$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatName');
							$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
								#display picked items
								foreach ($results as $id=>$item){
									#use EatPicked to determine if flag is set
									if ($item["EatPicked"]!="y"){
										echo display_all($id,$item);
										};
									}
}
?>
<form method="post" action = "z.php">
	<select name = "MyOption">
	<option selected="selected">
	Add to My List
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
</form>
<?php
	include "footer.php";
?>
