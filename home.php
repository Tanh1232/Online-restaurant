<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Restaurant</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<style>
body{ content: "";
    position: absolute;
    background: url('4.jpg') no-repeat center center/cover;
   
    top:0px;
    left:0px;
   background-size:auto;
	opacity:200%;
	
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
			 <li class="item"><a href="admin/admin_login.php"><font size="4">Admin</font></a></li>
			  <li class="item"><a href="cart.html"><font size="4">Cart</font></a></li>
			 <li class="item"><a href="cc_validation.php"><font size="4">Payment</font></a></li>
			 <li class="item"><a href="admin reg.php"><font size="4">Admin registration</font></a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis dolorum numquam minus. </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
        
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="step-1.png" alt="">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            <div class="box">
                <img src="step-2.png" alt="">
                <h2 class="h-secondary center">Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            <div class="box">
                <img src="step-3.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
        </div>
    </section>
   
    

    <footer>
        <div class="center">
            Copyright &copy;  All rights reserved!
        </div>
    </footer>
</body>
</html>