<?php

include '../components/connect.php';

session_start();

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ?");
   $select_admin->execute([$name, $pass]);
   
   if($select_admin->rowCount() > 0){
      $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
      $_SESSION['admin_id'] = $fetch_admin_id['id'];
      header('location:dashboard.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
<link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
</head>
<body><style>
   body{ content: "";
    position: absolute;
    background: url('4.jpg') no-repeat center center/cover;
    height: 1000px;
    top:0px;
    left:0px;
    width: 100%;
	background-size:auto;
    }
	   </style>
 <nav id="navbar">
        <div id="logo">
            <img src="bg.jpg" >
        </div>
        <ul>
           <li class="item"><a href="home.php"><font size="4">Home</font></a></li>
			<li class="item"><a href="about.php"><font size="4">About us</font></a></li>
			<li class="item"><a href="menu.php"><font size="4">Menu</font></a></li>
            <li class="item"><a href="login.php"><font size="4">Login</font></a></li>
			 <li class="item"><a href="register.php"><font size="4">Registration</font></a></li>
			  <li class="item"><a href="contact.php"><font size="4">Contact</font></a></li>
			 <li class="item"><a href="find.html"><font size="4">Find us</font></a></li>
			 <li class="item"><a href="admin_login.php"><font size="4">Admin</font></a></li>
			 <li class="item"><a href="cart.html"><font size="4">Cart</font></a></li>
			 <li class="item"><a href="cc_validation.php"><font size="4">Payment</font></a></li>
			 <li class="item"><a href="admin reg.php"><font size="4">Admin registration</font></a></li>
			 
        </ul>
    </nav>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!-- admin login form section starts  -->

<section class="form-container">

   <form action="" method="POST">
      
     <h3>New admin register </h3>
      <input type="text" name="name" required placeholder="enter your name" class="box" maxlength="50">
      <input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="number" name="number" required placeholder="enter your number" class="box" min="0" max="9999999999" maxlength="10">
      <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="confirm your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="register now" name="submit" class="btn">
      <p>Already have an account? <a href="admin_login.php">Login now</a></p>
   </form>

</section>

<!-- admin login form section ends -->











</body>
</html>