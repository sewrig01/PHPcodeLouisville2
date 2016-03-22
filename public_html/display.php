<?php
  function display_all($id, $item){
    echo "<li><b>".$item["EatName"].
    "</b>  ".$item["EatAddress"]."  <b>".
    $item["EatGenre"]."</b>  ".$item["EatPrice"]."</li>";
  }
?>
