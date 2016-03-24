<?php
  include ("y.php");

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
  ini_set('display_errors','On');
  $dsn = 'mysql:dbname=Eats;host=localhost;';
  $username = 'root';
  $password = 'eeyore';
  try {
    $db = new PDO($dsn, $username, $password); // also allows an extra parameter of configuration
          $sql = 'INSERT INTO EatSpots (EatName,EatAddress, EatGenre, EatPrice) VALUES (:EatName,:EatAddress, :EatGenre, :EatPrice)';
$stmt=$db->prepare($sql);
$stmt->bindParam(':EatName', $_POST['name']);
$stmt->bindParam(':EatAddress', $_POST['address']);
$stmt->bindParam(':EatGenre', $_POST['genre']);
$stmt->bindParam(':EatPrice', $_POST['price']);
$stmt->execute();
$url = 'index.php';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    } catch(PDOException $e) {  die('Could not connect to the database:<br/>' . $e);

    }
}  else {
    #return to form if no input
    $url = 'form.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  }
#escape input;
?>
