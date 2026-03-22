<?php
if(isset($_REQUEST['action'])=="login")
	{
	  session_start();
	  require('connectdb.php');
	  
	  $userName = $_REQUEST['txtuseremail'];
	  $password = $_REQUEST['txtpassword'];

	  
	  
	  if( $userName!= null && $password!= null)
	  {
		  $sql="SELECT * FROM t_registration_details WHERE email='$userName' and password='$password'";
          //echo ( $sql="SELECT * FROM t_registration_table WHERE email='$userName' and password='$password'"); exit;
		  $result  = mysqli_query($DB_CONNECT,$sql);
		  if (mysqli_num_rows($result) > 0) 
		  {
        $checkquery3="SELECT * FROM t_registration_details WHERE email='$userName' and password='$password' and Status='NotApproved'";
        //echo ( $sql="SELECT * FROM t_registration_table WHERE email='$userName' and password='$password'"); exit;
        $result2  = mysqli_query($DB_CONNECT,$checkquery3);
        if(mysqli_num_rows($checkResult) > 0) {
          echo "<script>alert('Your account is not approved yet. Please wait for admin approval.');</script>";
          echo "<script>window.location.href='login.php?action=login';</script>";
        }
      }
        else{
			   while($row = $result->fetch_assoc()) 
			   {
					$_SESSION['name']=$row["Name"];
          $_SESSION['username'] = $row["Email"];
          $_SESSION['password']=$row["password"];
          date_default_timezone_set('Asia/Kolkata');
          $time = date( 'd-m-Y h:i:s A',time());
          $usernamelogin=$_SESSION['username'];
          $status="in";
          $checkQuery = "SELECT * FROM t_userlogin_table WHERE email ='$usernamelogin' AND status='$status'";
          $checkResult = mysqli_query($DB_CONNECT, $checkQuery);
          if(mysqli_num_rows($checkResult) > 0) {
                  //header('Location:user_home_page.php ');
            ?>
            
          <div class='message'>You are already logged in .. try homepage instead </div>
            <td height="20" align="left" valign="middle" class="button">
            <input type="button" value="Home Page" onclick="location.href='user_home_page.php'">
            <br />
<?php
            //header('Location:home1.php');
          }
        }
      }
    }
          else{
            $status1='out';
            $checkQuery1 = "SELECT * FROM t_userlogin_table WHERE email ='$usernamelogin' AND status='$status1'";
            $checkResult = mysqli_query($DB_CONNECT, $checkQuery1);
            // sahnikka
            if (mysqli_num_rows($checkResult) > 0) {
            $insertQuery = "INSERT INTO t_userlogin_table VALUES ('','$usernamelogin','$time','','$status')";
            mysqli_query($DB_CONNECT,$insertQuery) or die(mysqli_error($DB_CONNECT));
					  header('Location:user_home_page.php');
			   }
		  }
  else {
    echo "<div class='message'>You are not registered. Please try registering instead.<br><a href='registration.php'>Register</a></div>";
   // header('Location:dashboard.php?action=fail');
  }
}		
}
?>
</div>
</body>
</html>