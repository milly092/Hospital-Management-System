<?php
    session_start();
    include('assets/inc/config.php');
    if(isset($_POST['doc_login']))
    {
        $doc_number = $_POST['doc_number'];
        $doc_pwd = sha1(md5($_POST['doc_pwd']));
        $stmt=$mysqli->prepare("SELECT doc_number, doc_pwd, doc_id FROM his_docs WHERE  doc_number=? AND doc_pwd=? ");
        $stmt->bind_param('ss', $doc_number, $doc_pwd);
        $stmt->execute();
        $stmt -> bind_result($doc_number, $doc_pwd ,$doc_id);
        $rs=$stmt->fetch();
        $_SESSION['doc_id'] = $doc_id;
        $_SESSION['doc_number'] = $doc_number;
        if($rs)
            {
                header("location:his_doc_dashboard.php");
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
        <title>Hospital Management System </title>
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
                <script>
                            setTimeout(function ()
                            {
                                swal("Failed","<?php echo $err;?>","error");
                            },
                                100);
                </script>

        <?php } ?>



    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">

                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access Doctor panel.</p>
                                </div>

                                <form method='post' >

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Doctor Number</label>
                                        <input class="form-control" name="doc_number" type="text" id="emailaddress" required="" placeholder="Enter your doctor number">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="doc_pwd" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" name="doc_login" type="submit"> Log In </button>
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
