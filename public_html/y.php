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
   $sql = 'INSERT INTO EatSpots (EatName,EatAddress, EatGenre, EatPrice) VALUES ( '.$a.','.$b.','.$c.','.$d.')';
   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   echo "Entered data successfully\n";
      mysql_close($conn);
};

##start function to deselect to database. Need to set to take var input from form.
  function deseltodb($id){

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
    Where id = '.$id.';';
    mysql_select_db('Eats');
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
  #  die('Could not enter data_: ' . mysql_error());
  #removed die and refresh to index if no value.
    $url = 'index.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
  };
   #function to select passed id to db
  function seltodb($id){
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
   Where id = '.$id.';';
   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
  #   die('Could not enter data: ' . mysql_error());
    $url = 'index.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
   }
  };
?>
