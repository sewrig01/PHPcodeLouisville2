<?php
	session_start();
	$pageTitle = "Restaurant Picker";
	$Section = "Main";
	$PgHeading = "What's for dinner?";
	$sorttype="name";
	$sorttype = $_POST['sorttype'];
	$Clear = $_POST['Clear'];
	$AddAll = $_POST['AddAll'];
#includes
	include "header.php";
	include 'db_Conn.php';
	include 'y.php';
	include 'display.php';
	include 'clear.php';
?>

<Div class="col-sm-4">
	<div  >
		<h2>Sort options:</h2>
		<form method="POST" action="index.php">
			<input type="submit" name="sorttype" value="Name" class='btn btn-primary'/>
			<input type="submit" name="sorttype" value="Address" class='btn btn-primary' />
			<input type="submit" name="sorttype" value="Genre" class='btn btn-primary'/>
			<input type="submit" name="sorttype" value="Price" class='btn btn-primary'/>
		</form>
		<h2>Press clear to clear your list. Press Add All to add everything! </h2>
		<form method="POST" action="index.php">
			<input type="submit" name="Clear" value="Clear" class='btn btn-success'/>
			<input type="submit" name="AddAll" value="Add All" class='btn btn-success'/>
		</form>
		<h2>If your restaurant isnt listed then...  </h2>
	</div>
	<form method = "post" action = "form.php" >
		<input type = "submit" value = "Add a Restaurant" class='btn btn-success'/>
	</form>
	<h2>If you are satisfied with your list...  </h2>
	<form method = "post" action = "MyPick.php">
		<input type = "submit" value = <?php $results ?> "Ready to pick" class='btn btn-danger btn-lg'>
	</form>
</div>

<Div class="col-sm-4">
<?php
	if ($Clear == "Clear"){
		$Clear=0;
		clearMylist();
	}
	if ($AddAll == "Add All"){
		$AddAll=0;
		AddAll();
	}
	$stmt = $db->query('SELECT * FROM EatSpots ORDER BY EatName');
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
		<input type = "submit" value="submit" class='btn btn-success'>
	</form>
<?php
#Database connect and dump to $results sorted based on $sorttype variable
	if ($sorttype == "Name"){
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
 	elseif  ($sorttype == "Address"){
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
 	elseif  ($sorttype == "Genre"){
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
	elseif  ($sorttype == "Price"){
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
?>
</div>
<div class="col-sm-4">
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
		<input type = "submit" value="submit" class='btn btn-success'>
	</form>
<?php
#sort out only selected
	foreach ($results as $id=>$item){
		if ($item["EatPicked"]=="y"){
			$test[] = $item;
		};
	}
#randomize from selected results
	if (isset($test)){
		$YourPick = $test[rand(0, count ($test)-1)]["EatName"];
#Use session to store resuly array.
		$_SESSION['test'] = $test;
	}
#Database connect and dump to $results sorted based on $sorttype variable
	if ($sorttype == "Name"){
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
 	elseif  ($sorttype == "Address"){
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
 	elseif  ($sorttype == "Genre"){
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
	elseif  ($sorttype == "Price"){
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
</div>
<?php
	include "footer.php";
?>
