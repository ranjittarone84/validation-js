<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Login </title>
    <style>
      body{
      /*background-image: url(img/wp2928790.jpg);*/
        background-color: lightblue;
        background-size: cover;
        background-repeat: no-repeat;
        background-position:center;
      }
      .card{
    
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
            height: 600px;
            width: 100%;
            background-color: red;

        }
    </style>
  </head>
  <body>
      <div class="container" onclick="clearInterval(x)" id="box">
          <div class="row vh-100 justify-content-center align-items-center">
              <div class="col-5 md-7">
                  <div class="card shadow-xl">
                      <div class="card-body">
                          <form action="" method="post">
                            <h2 class="mb-3">Login</h2>
                            <div class="form-group">
                              <label for="EMAIL">Email</label>
                              <input type="email" id="EMAIL" name="uemail" placeholder="email.id" class="form-control" onkeyup="fun2()">
                            </div>
                            <div class="form-group">
                              <label for="PASS">Password</label>
                              <input type="password" id="PASS" name="upass" placeholder="password" class="form-control" onkeyup="fun3()">
                            </div>
                            <input type="submit" name="reglogin" class="btn btn-success" value="LOGIN">
                            <input type="reset" class="btn btn-danger" value="Cancel">
                            <div class="d-flex justify-content-between my-3">
                                <a href="resister.php" class="btn btn-link">Already have an account!</a>
                                <a href="forgotPassword.php" class="btn btn-link text-danger">Forgot Password ?</a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
           </div>
      </div>

     <!-- Optional JavaScript; choose one of the two! -->
     <script type="text/javascript">
     
      d2 = document.getElementById('EMAIL');
      d3 = document.getElementById('PASS');
      
      
     
      op2 = document.getElementById('op2');
      op3 = document.getElementById('op3');

      
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