<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_acc']))
		{
			$acc_name=$_POST['acc_name'];
			$acc_desc=$_POST['acc_desc'];
			$acc_type=$_POST['acc_type'];
            $acc_number=$_POST['acc_number'];
            $acc_amount=$_POST['acc_amount'];

			$query="INSERT INTO his_accounts (acc_name, acc_desc, acc_type, acc_number, acc_amount) values(?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssss', $acc_name, $acc_desc, $acc_type, $acc_number, $acc_amount);
			$stmt->execute();

			if($stmt)
			{
				$success = "Account Receivable Details Added";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}


		}
?>

<!DOCTYPE html>
<html lang="en">

    <!--Head-->
    <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <?php include("assets/inc/nav.php");?>

            <?php include("assets/inc/sidebar.php");?>

            <div class="content-page">
                <div class="content">

                    <div class="container-fluid">
                          <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accounting</a></li>
                                            <li class="breadcrumb-item active">Add Receivable Account</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Receivable Account Details</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="post">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Account Name</label>
                                                    <input type="text" required="required" name="acc_name" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Account Amount($)</label>
                                                    <input type="text" required="required" name="acc_amount" class="form-control" id="inputEmail4" >
                                                </div>
                                            </div>

																						<div class="form-group col-md-6">
																								<label for="inputEmail4" class="col-form-label">Account number</label>
																								<input type="text" required="required" name="acc_number" class="form-control" id="inputEmail4" >
																						</div>

                                            <div class="form-group ">
                                                    <label for="inputPassword4" class="col-form-label">Account Description</label>
                                                    <textarea required="required" type="text" name="acc_desc" class="form-control"  id="editor"></textarea>
                                            </div>

                                            <div class="form-group" style="display:none">
                                                <label for="inputAddress" class="col-form-label">Account Type</label>
                                                <input required="required" value="Receivable Account" type="text" class="form-control" name="acc_type" id="inputAddress">
                                            </div>

                                            <button type="submit" name="add_acc" class="ladda-button btn btn-success" data-style="expand-right">Add Account</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="rightbar-overlay"></div>
        <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>


        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>
        <script src="assets/js/pages/loading-btn.init.js"></script>

    </body>

</html>
