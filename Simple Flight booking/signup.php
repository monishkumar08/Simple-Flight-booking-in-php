<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">

     <style>
	.imagecontainer {
	text-align: center;
	margin: 5px 0 5px 0;
   
	}

	img.avatar {
	width: 20%;
	border-radius: 20%;
	}


form{
align-items: center;
border: 10px solid #f1f1f1;
width: 30%;
background-image: url(white.jpg);
margin-left :auto;
margin-right:auto;
margin-top :50px;

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
     <form action="signup-check.php" method="post" style="border: 3px solid skyblue;" >

     <body>

<video autoplay muted loop id="video-background">
    <source src="video.mp4" type="video/mp4">
  </video>

  </body>
     	<h2>SIGN UP</h2>
          <div class="imagecontainer">
          <img src="registerlogo.png" alt="Avatar" class="avatar" style="border: 1px solid green;">
        </div>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Email"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re-enter Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re-enter Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</html>