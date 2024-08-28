<?php
function emptyInputSignup($name, $email, $username, $pwd, $rptpwd){
  $result;
  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($rptpwd)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidUid($username){
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function invalidEmail($email){
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;

}

function pwdMatch($pwd, $rptpwd){
  if ($pwd !== $rptpwd){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function uidExists($conn, $username, $email){
  $sql="SELECT * FROM users WHERE usersUid =? OR usersEmail =?;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData= mysqli_stmt_get_result($stmt);
  if ($row= mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else {
    $result=false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn,$name, $email, $username, $pwd){
  $sql="INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?,?,?,?);" ;
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

$hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
  exit();

}

function emptyInputLogin($username, $password)
	{
		$result;
		if( empty($username) || empty($password) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}


function loginUser($conn, $username, $password)
	{
		$uidExists = uidExists($conn, $username, $username);

		if ($usernameExists === false)
		{
			header("location: ../login.php?error=wronglogin");
			exit();
		}

		$hashedPassword = $uidExists["usersPwd"];
		$checkPassword = password_verify($password, $hashedPassword);
    $role=$uidExists["role"];

		if ( $checkPassword === false )
		{
			header("location: ../login.php?error=wronglogin");
			exit();
		}
		else if ( $checkPassword === true )
		{
			session_start();
			$_SESSION["usersUid"] = $uidExists["usersUid"];
      $_SESSION["role"] = $uidExists["role"];

      if ($role==1){
        header("location: ../adminheader.php");
  			exit();
      }
			else {
        header("location: ../userheader.php");
  			exit();
      }
		}
	}

  function createadmin($conn, $username){
    $sql="UPDATE  users SET role='1' WHERE usersUid =? OR usersEmail =? ;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../signup.php?error=stmtfailed");
      exit();
    }

    mysqli_stmt_bind_param($stmt, "ss",$username,$username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../makeadmin.php?error=none");


    }

    function deleteadmin($conn, $username){
      $sql="UPDATE  users SET role='0' WHERE usersUid =? OR usersEmail =? ;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
      }

      mysqli_stmt_bind_param($stmt, "ss",$username,$username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location: ../makeadmin.php?error=none2");


      }


function build_calendar ($month,$year,$conn){

        $stmt =$conn->prepare ("SELECT * FROM appointmentbook WHERE MONTH(booking_date)=? and YEAR(booking_date)=?");
        $stmt->bind_param("ss",$month,$year);
        $bookings=array();
        if ($stmt->execute()){
          $result=$stmt->get_result();
          if ($result->num_rows>0){
            while ($row=$result->fetch_assoc()){
              $bookings[]=$row['booking_date'];

            }
            $stmt->close();
          }
        }




              $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

              $firstDayOfMonth=mktime(0,0,0,$month,1,$year);

              $numberDays=date('t',$firstDayOfMonth);

              $dateComponents=getdate($firstDayOfMonth);

              $monthName=$dateComponents['month'];

              $dayOfWeek=$dateComponents['wday'];

              $dateToday=date('Y-m-d');

              $calendar= "<br><br><br><table class='table table-bordered'>";
              $calendar.= "<center><h2>$monthName $year</h2></center>";
              $calendar.= "<tr>";

              foreach ($daysOfWeek as $day) {
                $calendar.= "<th class='header'>$day</th>";
              }
                $calendar.= "<tr></tr>";


                if ($dayOfWeek>0){
                  for ($k=0;$k<$dayOfWeek;$k++){
                    $calendar.= "<td></td>";
                  }
                }

                $currentDay=1;

                $month=str_pad($month,2,"0",STR_PAD_LEFT);

                while ($currentDay <= $numberDays){

                  if ($dayOfWeek==7){
                    $dayOfWeek=0;
                      $calendar.= "<tr></tr>";

                  }


                  $currentDayRel=str_pad($currentDay,2,"0",STR_PAD_LEFT);
                  $date="$year-$month-$currentDayRel";

                  $today=$date==date('Y-m-d')? "today": "";
                  if ($date<=date('Y-m-d')){
                    $calendar.= "<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
                  }

                  elseif (in_array($date,$bookings)) {
                    $calendar.= "<td><h4>$currentDay</h4> <button class='btn btn-secondary'>Booked</button>";
                  }
                  else {
                    $calendar.= "<td ><h4>$currentDay</h4><a href='appointmentbooking.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
                  }

                  $calendar.= "</td>";

                  $currentDay++;
                  $dayOfWeek++;


                }

                if ($dayOfWeek !=7){
                  $remainingDays=7-$dayOfWeek;
                  for ($i=0;$i<$remainingDays;$i++){
                    $calendar.= "<td></td>";
                  }
                }

                $calendar.= "</tr>";
                $calendar.= "</table>";
            echo $calendar;
            }

  function contactUs($name, $email, $phone, $message, $conn) {
              $stmt = $conn->prepare("INSERT INTO contactUs (name, email, phone, message) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $email, $phone, $message);
                $stmt->execute();
                $stmt->close();
                header("location: contact.php?error=none");
              }
