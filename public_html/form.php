<?php
  $pageTitle = "Enter a New Resturant";
  $Section = "Form";
  include ("header.php"); ?>
<!--need to add isset to keep out null values -->
  <div class=section>
    <div class="container">
      <h1>Add a resturant</h1>
      <form method = "post" action = "forminput.php" >
      <table>
        <tr>
          <th><label for="name">Name</label></th>
          <td><input type="text" id="name" name="name" /></td>
        </tr>
        <tr>
          <th><label for="address">Address</label></th>
          <td><input type="text" id="address" name="address" /></td>
        </tr>
        <tr>
          <th><label for="genre">Genre</label></th>
          <td><input type="text" id="genre" name="genre" /></td>
        </tr>
        <tr>
          <th><label for="price">Price</label></th>
          <td><input type="text" id="price" name="price" /></td>
        </tr>
      </table>
      <input type = "submit" value = "Send" class='btn'/>
      </form>
    </div>
  </div>
  <div class = "container">
    <a href = "index.php">I have changed my mind</a>
  </div>
<?php
  include ("footer.php");
?>
