<!--Server side code to handle  Patient Registration-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_acc']))
		{
			$acc_name=$_POST['acc_name'];
			$acc_desc=$_POST['acc_desc'];
			$acc_type=$_POST['acc_type'];
            $acc_number=$_GET['acc_number'];
            $acc_amount=$_POST['acc_amount'];

			$query="UPDATE  his_accounts SET acc_name=?, acc_desc=?, acc_type=?, acc_amount=? WHERE acc_number = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssss', $acc_name, $acc_desc, $acc_type, $acc_amount, $acc_number);
			$stmt->execute();

			if($stmt)
			{
				$success = "Account Payable Details Updated";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}


		}
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('assets/inc/head.php');?>
    <body>

        <div id="wrapper">

            <?php include("assets/inc/nav.php");?>

            <?php include("assets/inc/sidebar.php");?>

            <?php
                $acc_number=$_GET['acc_number'];
                $ret="SELECT  * FROM his_accounts WHERE acc_number=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$acc_number);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                while($row=$res->fetch_object())
            {
            ?>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accounting</a></li>
                                            <li class="breadcrumb-item active">Manage Payable Account</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Payable Account Details</h4>
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
                                                    <input type="text" required="required" value="<?php echo $row->acc_name;?>" name="acc_name" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Account Amount($)</label>
                                                    <input type="text" required="required" value="<?php echo $row->acc_amount;?>" name="acc_amount" class="form-control" id="inputEmail4" >
                                                </div>
                                            </div>
																						<div class="form-group col-md-6">
																								<label for="inputEmail4" class="col-form-label">Account number</label>
																								<input type="text" required="required" value="<?php echo $row->acc_numbert;?>" name="acc_number" class="form-control" id="inputEmail4" >
																						</div>

                                            <div class="form-group ">
                                                    <label for="inputPassword4" class="col-form-label">Account Description</label>
                                                    <textarea required="required" type="text" name="acc_desc" class="form-control"  id="editor"><?php echo $row->acc_desc;?></textarea>
                                            </div>

                                            <div class="form-group" style="display:none">
                                                <label for="inputAddress" class="col-form-label">Account Type</label>
                                                <input required="required" value="Payable Account" type="text" class="form-control" name="acc_type" id="inputAddress">
                                            </div>

                                            <button type="submit" name="update_acc" class="ladda-button btn btn-warning" data-style="expand-right">Update Account</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            <?php }?>

            </div>



        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>


        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!-- Loading buttons js -->
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>

        <!-- Buttons init js-->
        <script src="assets/js/pages/loading-btn.init.js"></script>

    </body>

</html>
