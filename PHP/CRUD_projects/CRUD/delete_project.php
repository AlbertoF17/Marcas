<?php
include("connection.php");
$con = connection();

if (isset($_GET["project_id"])) {
  $id = $_GET["project_id"];
  
  $sql = "DELETE FROM projects WHERE id = $id";
  $query = mysqli_query($con, $sql);
  if ($query) {
    header("Location: ../index.php");
    exit();
  } else {
    echo "Ocurrió un error al eliminar el elemento";
  }
}
?>
