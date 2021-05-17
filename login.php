<!------ Php code start---------->
<?php
$conn=mysqli_connect('localhost','root','','arbandatabase');
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if(isset($_POST['submit']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from login where UserName='".$uname."' AND Password='".$password."' limit 1";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
     {
         echo "Login Successfully";
         header('Location:admin.php');
     }
     else{
        ?>
        <script >swal("Login Faild!");</script>;
        <?php
     }
}
?>
<!------ Php code end ---------->

<!DOCTYPE html>
<html lang="en">
<title>Arban</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!------ Include the above in your HEAD tag ---------->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="loginbodu">

<div class="container">
  <div class="form-box">
  <img src="images/login.png"/>
  <form method="post">
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
  <label >UserName</label>
  <input type="text" name="username">
  </div>
  <div class="form-group">
  <label >Password</label>
  <input type="password" name="password">
  </div>
  <button class="btn-login" name="submit">Submit</button> 

  </div>
  </div>
  </form>
  </div>
  </div>

    <!--*************start header**************-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bccc7b239b.js" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/ Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">  </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    
    

</body>

</html>