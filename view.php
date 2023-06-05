<?php
$conn = new mysqli("localhost", "root", "", "school");
$q = "SELECT * from students";
$records = $conn->query($q);
while($row = $records->fetch_assoc()){
  $rollno=$row["roll_no"]; $name=$row["name"];
  echo $rollno."  ".$name."  ";
  echo "<a href='delete.php? stuId=$rollno'>Delete<a/>"."  "."<a href='edit.php? stuId=$rollno'>Edit<a/><br>";

}
?>