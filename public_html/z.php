<?php
##start function to add to database. Need to set to take var input from form.
function addtodb(){

$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'eeyore';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'INSERT INTO EatSpots '.
      '(EatName,EatAddress, EatGenre, EatPrice) '.
      'VALUES ( "guest", "XYZ", "red", "NOW()" )';

   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }

   echo "Entered data successfully\n";

   mysql_close($conn);

};

?>