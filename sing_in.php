
<?php 
session_start();
include('dbconnector.php');



 ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign up and login form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet"> 

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- log in  -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
  
  
      <link rel="stylesheet" href="css/sing_in.css">

  
</head>

<body>
  <body>

      <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            
            <li>
                <a href="index.php" onclick=$("#menu-close").click();>Home</a>
            </li>
             <li>
                   <a href="sing_in.php" onclick=$("#menu-close").click();>Sing In</a>
              </li> 
        </ul>
    </nav>

 

<div id="sing_in">
  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Don't have an account?</p>
          <p>Sign up Now.</p>
          <button id="switch1">Sign Up</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Have an account?</p>
          <p>Log in and Enjoy.</p>
          <button id="switch2">LOG IN</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <h2>LOG IN</h2>
        <form action="sing_in.php" method="POST">
        <div class="inputbox">
          <input type="text" name="email" placeholder="  EMAIL">
          <input type="password" name="password" placeholder="  PASSWORD">
        
        <p>FORGET PASSWORD?</p>
         <input type="submit" name="login" class="btn btn-default" value="LOG IN">
         </div>
        </form>
        
        <!-- <button>LOG IN</button> -->
      </div>

      <div class="signup hide">
        <h2>SIGN UP</h2>
        <form action="sing_in.php" method="POST">
        <div class="inputbox">
          <input type="text" name="name" placeholder="  FULLNAME">
          <input type="text" name="email" placeholder="  EMAIL">
          <input type="password" name="password" placeholder="  PASSWORD">
          <input type="submit" name="signup" class="btn btn-default" value="SIGN UP">
        </div>
        </form>
        <!-- <button>SIGN UP</button> -->
      </div>


    </div>
    <!-- frontbox -->
  </div>

  </div>
</body>

</html>
  
   <script src="js/sing_in.js"></script> 
   
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
  
    </script>

</body>
</html>

<?php 
function login($email, $password){
  global $db;
  $updated_at = date("Y-m-d H:i:s");
  $query_string = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($db, $query_string);
  if (!$result) {
    die ("<script>alert(\"Fail To sign in please try again later, reason: " . mysqli_errno(). "\");</script>");
  } else {
    session_start();
    while($row = mysqli_fetch_assoc($result)){
      $myEmail  =$row['email'];
      $_SESSION['login_user'] = $myEmail;
      $myName =$row['name'];
      $_SESSION['login_name'] = $myName ;
      $query_string = "UPDATE users SET updated_at = '$updated_at' WHERE email = '$email'";
      $result = mysqli_query($db, $query_string);
   
      break;  
    }
    //ob_start();
    // header("Location: index.php");
  

    
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
  }
}
function signup($name, $email, $password){
  global $db;
  $updated_at = $created_at = date("Y-m-d H:i:s");
  $query_string = "insert into users (name,email,password,created_at,updated_at) values('$name' ,'$email','$password' ,'$created_at', '$updated_at')";
  $result = mysqli_query($db , $query_string);
  if(!$result){
    
        die ("<script>alert(\"Fail To register please try again later, reason: " . mysqli_errno(). "\");</script>");
    } else 
      
      echo "<script>alert(\"Congrats!: You have registered Successfully.\");</script>";
    
}
if (isset($_POST["signup"])) {
  signup($_POST["name"],$_POST["email"], $_POST["password"]);
} else if(isset($_POST["login"])){
  login($_POST["email"], $_POST["password"]);
}

?>


