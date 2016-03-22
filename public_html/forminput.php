<?php
  include ("y.php");
#escape input;
  $addName= htmlspecialchars($_POST["name"]);
  $addAddress= htmlspecialchars($_POST["address"]);
  $addGenre= htmlspecialchars($_POST["genre"]);
  $addPrice= htmlspecialchars($_POST["price"]);
#verify that all fields are entered
  if (isset($addName) AND $addName !="" AND
  isset($addAddress) AND $addAddress !="" AND
  isset($addGenre) AND $addGenre !="" AND
  isset($addPrice) AND $addPrice !=""
  ) {
    addtodb("'$addName'","'$addAddress'","'$addGenre'","'$addPrice'");
    $url = 'index.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  }
  else {
    #return to form if no input
    $url = 'form.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  }
?>
