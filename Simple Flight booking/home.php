<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {   

}else{
		header("Location: index.php");
		exit();
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
		* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

header {
	background-color: rgb(62, 100, 139);

}

nav {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 20px 20px;
}

nav h1 {
	font-size: 30px;
	margin: 0;
}

nav ul {
	display: flex;
	list-style: none;
    margin-right: 200px;
	
}

nav ul li {
	margin: 0 10px;
    
  
}

nav ul li a {
	color: #0c0c0c;
	text-decoration: none;
}

nav ul li a:hover {
	color: #ffffff;
  box-shadow:   inset 0 0 10px #ffffff;
}

.burger {
	display: none;
	cursor: pointer;
}

.burger div {
	width: 25px;
	height: 3px;
	background-color: #fff;
	margin: 5px;
}

@media screen and (max-width: 768px) {
	nav ul {
		flex-direction: column;
		position: absolute;
		top: 60px;
		left: 0;
		background-color:rgb(62, 100, 139);
		width: 100%;
		height: 0;
    text-align: center;
		overflow: hidden;
		transition: all 0.5s ease;
	}

	nav ul li {
		margin: 5px 0;
	}

	nav ul li a {
		color:black;
	}

	.burger {
		display: block;
	}
}

.nav-active {
	height: 200px;
}

.rotate .line1 {
	transform: rotate(-45deg) translate(-5px, 6px);
}

.rotate .line2 {
	opacity: 0;
}

.rotate .line3 {
	transform: rotate(45deg) translate(-5px, -6px);
}


.h{

  position: absolute;
  top: 50%;
  left: 40%;
}


#video-background {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: -1;
      object-fit: cover;
	  width:100%;
	  height: 100%;
    }
	</style>

	<header>
		<nav>
			<h1>Welcome to RMKFlightbooking.com</h1>
			<ul class="nav-links" style="font-size: 20px;">
				<li><a href="flightbook.php">Flight Book</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="signup.php">Register</a></li>
				<li><a href="logout.php">Logout</a></a></li>
				<li>Welcome!, <?php echo $_SESSION['name'];?></li>
			</ul>

			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>
		
	</header>
	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="script.js"></script>

</head>
<body>
<video autoplay muted loop id="video-background">
    <source src="video.mp4" type="video/mp4">
  </video>
</body>
</html>