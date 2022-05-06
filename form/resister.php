<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/resister.css">
    <title>Register</title>
    <style>
      body{
            /*background-image: url(img/wp2928790.jpg);*/
            background-color: gray;
            background-size: cover;
            background-repeat: no-repeat;
            background-position:center;
        }
        .card{
          opacity: 0.8;
          border-radius: 10px;
          box-shadow: 10px 10px 18px 10px #888888;
      }
      h2{
          text-align: center;
          font-family: cambria;
          font-weight: bold;
          font-size: 33px;
          font-style: normal;

      }
      #box{
            /*height: 600px;
            width: 100%;*/
            background-color: red;

        }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="row vh-100 justify-content-center align-items-center">
              <div class="col-5 md-3">
                  <div class="card shadow-lg" onclick="clearInterval(x)" id="box" >
                      <div class="card-body">
                          <form action="getdata.php" method="post">
                            <h2 class="mb-3">Resistration Form</h2>
                            <div class="form-group">
                              <label for="NAME">Username</label>
                              <input type="text" id="NAME" placeholder="name" name="uusername" class="form-control" onkeyup="fun()">
                              <span id="op1"></span>
                            </div>
                            <div class="form-group">
                              <label for="EMAIL">Email</label>
                              <input type="email" id="EMAIL" placeholder="email" name="uemail" class="form-control"  onkeyup="fun2()">
                              <span id="op2"></span>
                            </div>
                            <div class="form-group">
                              <label for="PASS">Password</label>
                              <input type="password" id="PASS" placeholder="password" name="upass" class="form-control"  onkeyup="fun3()">
                              <span id="op3"></span>
                            </div>
                            
                            <input type="submit" name="regsubmit" class="btn btn-success" value="Resister">
                            <input type="reset" class="btn btn-danger" value="Cancel">
                            <a href="index.php" class="btn btn-link btn-block mx-auto">Already have an account!</a>
                          </form>
                      </div>
                  </div>
              </div>

          </div>
      </div>

     <!-- Optional JavaScript; choose one of the two! -->
     <script type="text/javascript">
      d = document.getElementById('NAME');
      d2 = document.getElementById('EMAIL');
      d3 = document.getElementById('PASS');
      
      
      op1 = document.getElementById('op1');
      op2 = document.getElementById('op2');
      op3 = document.getElementById('op3');

      function fun(){
          regularExpression=/[A-Za-z][A-Za-z0-9_]{7,29}$/;
          data = d.value;
          res=data.match(regularExpression);
          if (res == null) {
              op1.innerHTML = "Invalid Username";
              op1.style.color="red";
          }
          else{
              op1.innerHTML = "Valid Username";
              op1.style.color="green";
          }
          console.log(res);
      }
      function fun2(){
          regularExpression=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          data = d2.value;
          res=data.match(regularExpression);
          if (res == null) {
              op2.innerHTML = "Invalid Email";
              op2.style.color="red";
          }
          else{
              op2.innerHTML = "Valid Email";
              op2.style.color="green";
          }
          console.log(res);
      }
      function fun3(){
          regularExpression=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
          data = d3.value;
          res=data.match(regularExpression);
          if (res == null) {
              op3.innerHTML = "Invalid Password";
              op3.style.color="red";
          }
          else{
              op3.innerHTML = "Valid Password";
              op3.style.color="green";
          }
          console.log(res);
      }
      d = document.getElementById('box');
       r=g=b=0;
       function slider(){
        d.style.background="rgb("+r+","+g+","+b+")";
        r=r+3;
        g=g+50;
        b=b+95;
        if(r>255)r=0;
        if(g>255)g=0;
        if(b>255)b=0;
        console.log(r,g,b);
       }
       x=setInterval("slider()", 100);
      
    
  </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    
  </body>
</html>