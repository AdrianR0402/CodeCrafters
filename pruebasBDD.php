<?php include("includes/a_config.php"); 
include("includes/dbconnection.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>

<body>
  <?php
try {
  $result = $conn->query("Select * from usuario");
} catch (Exception $ex) {
  die($ex->getMessage());
}
while ($reg = $result->fetch_object()) {
  echo "$reg->username";
}


  ?>
</body>
</html>