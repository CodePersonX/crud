<?php
$roll_no=$_POST["rollno"];
$name = $_POST["name"];

$conn = new mysqli("localhost", "root", "", "school");
$q = "INSERT INTO students (roll_no, name) VALUES ('$roll_no', '$name')";

if($conn->query($q) === True){
  $message= '<img src="done.gif" height="100" width="100" />';
}

?>

<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-4">
            <?php echo $message ?>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-5"></div>
        <div class="col-sm-2">
          <form method="post" action="index.php">
          <input type="submit" name="back" id="back" value="Back" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>