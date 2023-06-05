<?php
$id = $_POST["stdId"];
$name = $_POST["stdname"];

$conn = new mysqli("localhost", "root", "", "school");
$q = "UPDATE students set name='$name' where roll_no = '$id'";
if($conn->query($q)){
  echo "updated";
}
else{
  echo "error";
}
?>