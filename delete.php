<?php

  $connect = mysqli_connect("localhost", "u286343678_erjupi", "Rajnagar98@#");
   //getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM stuinfo WHERE id=$id");
//redirecting to the display page (index.php in our case)
header("Location:https://bereanschooltripura.org/marksheetdata/class1/checkinfo.php");
?>