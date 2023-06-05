<?php
$id = $_GET["stuId"];
$conn = new mysqli("localhost", "root", "", "school");
$q = "DELETE from students where roll_no = '$id'";
if($conn->query($q)){
  echo "Deleted";
}
else{
  echo "error";
}
?>