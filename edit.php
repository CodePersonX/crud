<?php
$id = $_GET["stuId"];
$conn = new mysqli("localhost", "root", "", "school");
$q = "SELECT * from students where roll_no = '$id'";
$records=$conn->query($q);
$row=$records->fetch_assoc();
$id=$row["roll_no"]; $name = $row["name"];

?>

<html>
  <form method="post" action="update.php">
    <input type="text" name="stdname" id="stdname" value="<?php echo $name?>"/>
    <input type="hidden" name="stdId" id="stdId" value="<?php echo $id?>"/>
    <br><br>
    <input type="submit" name="updatebtn" id="updatebtn" value = "Update" style="margin-left: 50px;"/>
  </form>
</html>