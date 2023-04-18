
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
<style>
	.imagecontainer {
	text-align: center;
	/*margin: 5px 0 5px 0;*/
	}

	img.avatar {
	width: 20%;
	border-radius: 30%;
	}

	body {
	display: flex;
	justify-content: center;
	align-items: center;
	margin-top: 7%;
	height: 100%;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 


@media screen and (max-width: 768px) {
span.psw {
display: block;
float: right;
margin-top: 0%;
padding-top: 0%;
}
.cancelbtn {
width: 100%;
}

form{
align-items: center;
border: 10px solid #f1f1f1;
width: 90%;
background-image: url(white.jpg);
margin-left :auto;
margin-right:auto;
margin-top :10px;

}
}
    /* Set the video as a background */
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

</head>


     <form action="login.php" method="post" style="border: 3px solid skyblue";>

	 <body>

<video autoplay muted loop id="video-background">
    <source src="video.mp4" type="video/mp4">
  </video>

  </body>
	 <h2>LOGIN</h2>
	 <div class="imagecontainer">
          <img src="page.png" alt="Avatar" class="avatar" style="border: 1px solid green;">
        </div>
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="uname" placeholder="Email" required=""><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required=""><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</html>