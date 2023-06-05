<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script>
      function validate(){
        let x = document.forms["insert"]["rollno"].value;
        let y = document.forms["insert"]["name"].value;
        if(x=="" || y==""){
          alert("Please fill the form");
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-4">
          <p style="font-size:30px">Student Form</p>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <br><br><br><br><br><br><br><br><br><br>
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-4">
        <form method="post" action="insert.php" name="insert" id="insert", onsubmit="return validate()">
      <input type="text" name="rollno" id="rollno" placeholder="Roll No"/>
      <br><br>
      <input type="text" name="name" id="name" placeholder="Name"/>
      <br><br>
      <input  type="submit" name="sub" id="sub" value="Insert" style="margin-left: 70px"/>
    </form>
    
    <form method="post" action="view.php" name="view" id="view">
      
      <input  type="submit" name="sub" id="sub" value="View" style="margin-left: 70px"/>
    </form>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </body>
</html>