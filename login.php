<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<style>
   body{ content: "";
    position: absolute;
    background: url('bg.jpg') no-repeat center center/cover;
    height: 1000px;
    top:0px;
    left:0px;
    width: 100%;
	background-size:auto;
    }
	   </style>
   <body>
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
			 <li class="item"><a href="cart.html"><font size="4">Cart</font></a></li>
        </ul>
        </ul>
    </nav>



<section class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" name="submit" class="btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</section>

















<!-- custom js file link  -->


</body>
</html>