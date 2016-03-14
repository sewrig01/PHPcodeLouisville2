<?php
##start function to delete to database. Need to set to take var input from form.
function deltodb(){

$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'eeyore';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'DELETE FROM EatSpots WHERE EatName = "Stephen Wright"';

   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }

   echo "Deleted data successfully\n";

   mysql_close($conn);

};
##start function to add to database. Need to set to take var input from form.
#function addtodb(){
#added passed arguments


function addtodb($a,$b,$c,$d){
    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'eeyore';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
  # $sql = 'INSERT INTO EatSpots (EatName,EatAddress, EatGenre, EatPrice) VALUES ( "TacoBell", "123 Old Mill", "Fast", "Cheap" )';
## New sql to take passed data.
   $sql = 'INSERT INTO EatSpots (EatName,EatAddress, EatGenre, EatPrice) VALUES ( '.$a.','.$b.','.$c.','.$d.')';

   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }

   echo "Entered data successfully\n";

   mysql_close($conn);

};

##start function to select to database. Need to set to take var input from form.
function deseltodb(){

$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'eeyore';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = '
   UPDATE EatSpots
SET EatPicked = "n"
Where EatPrice = "cheap";';

   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }

   echo "Deselected data successfully\n";
   };
   function seltodb(){

   $dbhost = 'localhost:3036';
      $dbuser = 'root';
      $dbpass = 'eeyore';
      $conn = mysql_connect($dbhost, $dbuser, $dbpass);

      if(! $conn ) {
         die('Could not connect: ' . mysql_error());
      }

      $sql = '
      UPDATE EatSpots
   SET EatPicked = "y"
   Where EatPrice = "cheap";';

      mysql_select_db('Eats');
      $retval = mysql_query( $sql, $conn );

      if(! $retval ) {
         die('Could not enter data: ' . mysql_error());
      }

      echo "Selected data successfully\n";
      };


?>
