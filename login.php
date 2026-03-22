<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
    .image{
        padding-left:45px;
    }
    label{
        font-size:30px;
    }
    input{
	width:350px;
	height:33px;
	border:thin #000 solid;
	border-radius:30px;
	color:#999999;
	text-align:center;
    }
    .button input{
        width:150px;
        height:35px;
    }
    .message {
      text-align: center;
      margin-top: 20px;
      padding: 10px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .message p {
      margin-bottom: 10px;
    }

    .message a {
      text-decoration: none;
      color: #4CAF50;
    } 
.image {
    text-align: justify;
}
h1{
    background-color:#0099FF;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<div align="center">
<h1 align="center">User-Log-in</h1>
<table width="1194" height="287" border="0" cellpadding="15px">
    <form method="post" action="login.php?action=login" name="login">
  <tr>
    <td rowspan="4" class="image"><img src="login.jpg" width="700" height="400" /></td>
    <td width="453" height="103" align="left" valign="middle">
    <label>Username</label>
    <br>
    <input type="text" name="txtuseremail" id="txtuseremail" required placeholder="Enter your E-mail ID">
    </td>
  </tr>
  <tr>
    <td height="103" align="left" valign="middle">
    <label>Password</label>
</br>
    <input type="password" name="txtpassword" id="txtpassword" required placeholder="Enter your Password">
    </td>
  </tr>
  <tr>
    <td height="71" align="left" valign="middle" class="button">
    <input type="submit" value="submit">
    <br />
    <a href="#">forgot password</a>
    </td>
  </tr>
  </form>
</table>

<?php
require('connectdb.php');
if (isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
    session_start();
    $userName = isset($_REQUEST['txtuseremail']) ? $_REQUEST['txtuseremail'] : '';
    $password = isset($_REQUEST['txtpassword']) ? $_REQUEST['txtpassword'] : '';
    date_default_timezone_set('Asia/Kolkata');
    $time = date('d-m-Y h:i:s A', time());

    if ($userName != '' && $password != '') {
        $sql = "SELECT * FROM t_registration_details WHERE email='$userName' and password='$password'";
        $result = mysqli_query($DB_CONNECT, $sql);
        if (mysqli_num_rows($result) > 0) {
        	$checkquery3 = "SELECT * FROM t_registration_details WHERE email='$userName' and password='$password' and Status='NotApproved'";
            $result2 = mysqli_query($DB_CONNECT, $checkquery3);
            if (mysqli_num_rows($result2) > 0) {
                echo "<script>alert('Your account is not approved yet. Please wait for admin approval.');</script>";
               //echo "Bal";
                echo " <script>window.location.href='login.php?action=login';</script> ";
            } 
			else {
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['name'] = $row["Name"];
                    $_SESSION['username'] = $row["Email"];
                    $_SESSION['password'] = $row["password"];
                    $_SESSION['Age']=$row['Age'];
                    $_SESSION['Mobile']=$row['Mobile'];
                    $_SESSION['DOB']=$row['DOB'];
                    $_SESSION['petname']=$row['petname'];
                    $_SESSION['Address']=$row['Address'];
                    $usernamelogin = $_SESSION['username'];
                    $status = "in";
                    $checkQuery = "SELECT * FROM t_userlogin_table WHERE email ='$usernamelogin' AND status='$status'";
                    $checkResult = mysqli_query($DB_CONNECT, $checkQuery);
                    if (mysqli_num_rows($checkResult) > 0) {
						?>
                        <div class='message'>You are already logged in .. try homepage instead </div>
                        <td height="20" align="left" valign="middle" class="button">
                            <input type="button" value="Home Page" onclick="location.href='user_home_page.php'">
                            <br />
						<?php
                    }
        else {
			$status = "in";
            $status1 = 'out';
            $checkQuery1 = "SELECT * FROM t_userlogin_table WHERE email ='$usernamelogin' AND status='$status1'";
            $checkResult = mysqli_query($DB_CONNECT, $checkQuery1);
            // sahnikka
            if (mysqli_num_rows($checkResult) > 0) {
                $insertQuery = "INSERT INTO t_userlogin_table VALUES ('','$usernamelogin','$time','','$status')";
                mysqli_query($DB_CONNECT, $insertQuery) or die(mysqli_error($DB_CONNECT));
                header('Location:user_home_page.php');
            }
        }
    }
 }
} 
 else {
        echo "<div class='message'>You are not registered. Please try registering instead.<br><a href='registration.php'>Register</a></div>";
    }
}
}
?>
</div>
</body>
</html>
