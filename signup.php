

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="style1.css">
  </head>
  <body class="body2">
    <section >

      <div class="container">
        <div class="screen2">
          <div class="screen__content">
            <?php

            if(isset($_GET["error"])){
              if ($_GET["error"] =="emptyinput"){
                echo "<br>";
                echo '<span style="color:#D16587; font-weight:bold; position:relative; left:95px; top:115px">Fill in all fields!</span>';
              }

              if ($_GET["error"] =="invaliduid"){
                echo "<br>";
                echo '<span style="color:#D16587; font-weight:bold; position:relative; left:70px; top:115px">Chose a proper username!</span>';
              }

              if ($_GET["error"] =="invalidemail"){
                echo "<br>";
                echo '<span style="color:#D16587; font-weight:bold; position:relative; left:60px; top:115px">Choose a proper email!</span>';
              }

              if ($_GET["error"] =="passmissmatch"){
                echo "<br>";
                echo '<span style="color:#D16587; font-weight:bold; position:relative; left:60px; top:115px">Passwords do not match!</span>';
              }

              if ($_GET["error"] =="stmtfailed"){
                echo "<br>";
                echo '<span style="color:#D16587; font-weight:bold; position:relative; left:95px; top:115px">Something Went wrong, try again!</span>';
              }
              if ($_GET["error"] =="usernametaken"){
                echo "<br>";
                echo '<span style="color:#D16587; font-weight:bold; position:relative; left:25px; top:115px">Username/Email is already taken!</span>';
              }

              if ($_GET["error"] =="none"){
                echo "<br>";
                echo '<span style="color:#D16587; font-weight:bold; position:relative; left:95px; top:115px">You have signed up!</span>';
              }
            }
             ?>
            <form class="login" action="additonal/signup.add.php" method="post" >
              <div class="login__field"> <i class="login__icon fas fa-address-card "></i><input type="text" class="login__input" name="name" placeholder="Full Name..."></div>
              <div class="login__field"> <i class="login__icon fas fa-envelope "></i><input type="text" class="login__input" name="email" placeholder="Email..."></div>
              <div class="login__field"> <i class="login__icon fas fa-user "></i><input type="text" class="login__input" name="uid" placeholder="Username..."></div>
             <div class="login__field"> <i class="login__icon fas fa-lock "></i><input type="password" class="login__input" name="pwd" placeholder="Password..."></div>
              <div class="login__field"> <i class="login__icon fas fa-key "></i><input type="password" class="login__input" name="rptpwd" placeholder="Repeat Password..."></div>
              <button class="button login__submit" type="submit" name="submit">Sign        Up</button>
            </form>
<p class="para-2" style="color:#4863A0 ;">
      <b>Already have an account?</b> <a href="login.php" style="color:#50EBEC;"><b>Log in Here</b></a>
    </p>

          </div>
          <div class="screen__background">
          			<span class="screen__background__shape screen__background__shape8"></span>
          			<span class="screen__background__shape screen__background__shape7"></span>
          			<span class="screen__background__shape screen__background__shape6"></span>
          			<span class="screen__background__shape screen__background__shape5"></span>
          		</div>

        </div>





    </div>



    </section>
    <?php
     include_once 'footer.php';
    ?>
