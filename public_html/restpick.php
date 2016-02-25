<?php
ini_set('display_errors','On');

$dsn = 'mysql:dbname=Rest_db;host=localhost;';
$username = 'root';
$password = 'eeyore';
try {
    $db = new PDO($dsn, $username, $password); // also allows an extra parameter of configuration
} catch(PDOException $e) {
    die('Could not connect to the database:<br/>' . $e);
}
echo "<pre>";
$sql = "SELECT * FROM RestList ";
		foreach($db->query($sql) as $row){
#var_dump($row);
$test = $row[4];
echo $test;
}
#what this should do...
#offer to load saved database
#Load tailored list or generic list(whole db)
#allow for selection of items
#allow for exclusion of items
#allow for saving of list as custom
#take items that remain and randomize and pick.
?>
