<?php
include('connectdb.php');
//echo("connected");
session_start();
  $useremail = $_SESSION["username"];
  $status='in';
  $Select_Query = "SELECT * FROM t_userlogin_table WHERE email = ? AND status=?";
  $stmt = mysqli_prepare($DB_CONNECT, $Select_Query);
  mysqli_stmt_bind_param($stmt, "ss", $useremail,$status); // "s" indicates a string parameter
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) > 0 ) {
    $row = mysqli_fetch_array($result);
    $username=$row['email'];
    $status=$row['status'];
    if($status=='in')
    {
        date_default_timezone_set('Asia/Kolkata');
        $time = date( 'd-m-Y h:i:s A',time());
        $updateQuery="UPDATE t_userlogin_table SET status = 'out', Out_time = ? WHERE Email = ?";
        $updateStmt = mysqli_prepare($DB_CONNECT, $updateQuery);
        mysqli_stmt_bind_param($updateStmt, "ss",$time,$useremail);
        mysqli_stmt_execute($updateStmt);
        session_unset();
        session_destroy();
        header('Location:home1.php');
        exit;
    }
    else{
        echo("You are not logged in yet");
    }
    //echo ($username);
  }
  
?>