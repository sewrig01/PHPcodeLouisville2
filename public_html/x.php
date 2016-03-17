<?php
include ("y.php");
$id= $_POST["MyOption"];
deseltodb("$id");
#echo "<script>
#             alert('message sent succesfully');
#             window.history.go(-1);
#     </script>";
     $url = 'index.php';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
