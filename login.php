

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="style1.css">
    <link rel="stylesheet"href="css/decorate.css">
    <link rel="stylesheet"href="css/style.css">
  </head>
  <body class="body1">
    <div class="container">
    	<div class="screen">
    		<div class="screen__content">

                <?php
                  if( isset($_GET["error"]) )
                  {
                    if( $_GET["error"] == "emptyinput" )
                    {
                      echo "<br>";
                      echo '<span style="color:red; font-weight:bold; position:relative; left:95px; top:115px">Fill in all fields!</span>';
                    }
                    if( $_GET["error"] == "wronglogin" )
                    {
                      echo "<br>";
                      echo '<span style="color:red;position:relative; font-weight:bold; left:80px; top:125px">Invalid login credentials!</span>';
                    }
                  }
                ?>


    			<form class="login"  action="additonal/login.add.php" method="post">

          </head>

    				 <div class="login__field"> <i class="login__icon fas fa-user"></i><input type="text" class="login__input" name="username" placeholder="Username/Email"> </div>
    				 <div class="login__field"> <i class="login__icon fas fa-lock"></i><input type="password" class="login__input" name="password" placeholder="Password"> </div>
    					<button class="button login__submit" type="submit" name="submit"><span class="button__text">Log In Now</span><i class="button__icon fas fa-chevron-right"></i></button>
    			</form>
 <p class="para-2" style="color:#0AFFFF; !important">
      <b>Don't have an account?</b> <a href="signup.php"><b>Sign Up Here</b></a>
    </p>

    </div>
    <div class="screen__background">
    			<span class="screen__background__shape screen__background__shape4"></span>
    			<span class="screen__background__shape screen__background__shape3"></span>
    			<span class="screen__background__shape screen__background__shape2"></span>
    			<span class="screen__background__shape screen__background__shape1"></span>
    		</div>

    </div>
    </div>
  </body>
</html>
