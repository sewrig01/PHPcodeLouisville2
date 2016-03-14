<?php
function display_all($id, $item){

  echo "<li>".$item["EatName"].
  "  ".$item["EatAddress"]."  ".
  $item["EatGenre"]."  ".$item["EatPrice"]."</li>";
}



 ?>
