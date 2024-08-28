<?php
    session_start();
    include('assets/inc/config.php');
    if(isset($_POST['admin_login']))
    {
        $ad_email=$_POST['ad_email'];
        $ad_pwd=sha1(md5($_POST['ad_pwd']));
        $stmt=$mysqli->prepare("SELECT ad_email ,ad_pwd , ad_id FROM his_admin WHERE ad_email=? AND ad_pwd=? ");
        $stmt->bind_param('ss',$ad_email,$ad_pwd);
        $stmt->execute();
        $stmt -> bind_result($ad_email,$ad_pwd,$ad_id);
        $rs=$stmt->fetch();
        $_SESSION['ad_id']=$ad_id;

        if($rs)
            {
                header("location:his_admin_dashboard.php");
            }

        else
            {
                $err = "Access Denied Please Check Your Credentials";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <body style="background-image: url(assets/images/hospital1.jpg);>
  <div class="container text-center">
  <marquee  bgcolor="black" direction="left"behaviour="alternate" ><h4 class="text-white">Wellcome to the EAST WEST Hospital LTD. This is your home.Your smile is our satisfaction</h4></marquee>
  </div>
        <meta charset="utf-8" />
        <title>Hospital Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="MartDevelopers" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.jpg">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet"href="css/decorate.css">
        <link rel="stylesheet"href="css/style.css">
        <script src="assets/js/swal.js"></script>
        <?php if(isset($success)) {?>

                <script>
                            setTimeout(function ()
                            {
                                swal("Success","<?php echo $success;?>","success");
                            },
                                100);
                </script>

        <?php } ?>

        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function ()
                            {
                                swal("Failed","<?php echo $err;?>","Failed");
                            },
                                100);
                </script>

        <?php } ?>
      </body>
    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">

                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form method='post' >

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" name="ad_email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="ad_pwd" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" name="admin_login" type="submit"> Admin Log In </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
  </body>
</html>
