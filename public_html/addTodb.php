<?php


# Add to database
$a='monkey';
$b='city';
$c='fred';
$d = 'doug';
$sql = "INSERT INTO EatSpots ('EatName', 'EatAddress', 'EatGenre', 'EatPrice')
VALUES (".$a.",".$b.",".$c.",".$d.")"
mysql_query($sql);
?>
