<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 400px;
      width: 100%;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .login-form label {
      font-weight: bold;
      margin-bottom: 8px;
    }

    .login-form input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 15px;
    }

    .login-button {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <form class="login-form" action="admin_login.php?action=login" name="login" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login" name="submit" class="login-button">
      <a href="admin_forgot_password.php">Forgot Password</a>
    </form>
  </div>
  
  <?php
  if(isset($_REQUEST['action']) && $_REQUEST['action']=="login") {
    session_start();
    require('connectdb.php');
    $userEmail = $_POST['email']; // Use POST to get form data
    $password = $_POST['password'];

    if ($userEmail != null && $password != null) {
      $stmt = $DB_CONNECT->prepare("SELECT * FROM t_admin_information_table WHERE email=? AND password=?");
      $stmt->bind_param("ss", $userEmail, $password);
      $stmt->execute();
      $result = $stmt->get_result();
      
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $_SESSION['name'] = $row["name"];
          $_SESSION['username'] = $row["email"];
          $_SESSION['password'] = $row["password"];
          date_default_timezone_set('Asia/Kolkata');
          $time = date('d-m-Y h:i:s A', time());
          $adminemaillogin = $_SESSION['username'];
          $status = "in";
          //echo ($_SESSION['name'] . $_SESSION['username'] . $_SESSION['password'] . $time);
           $checkQuery = "SELECT * FROM t_admin_login_table WHERE email ='$adminemaillogin' AND status='$status'";
          $checkResult = mysqli_query($DB_CONNECT, $checkQuery);
          if(mysqli_num_rows($checkResult) > 0) {
            ?>
          <div class='message'>You are already logged in admin.. try homepage instead </div>
            <td height="20" align="left" valign="middle" class="button">
            <input type="button" value="Home Page" onclick="location.href='admin_dashboard.php'">
            <br />
    <?php
          }
          else{
            $status1='out';
            $checkQuery1 = "SELECT * FROM t_admin_login_table WHERE email ='$adminemaillogin' AND status='$status1'";
            $checkResult = mysqli_query($DB_CONNECT, $checkQuery1);
          if (mysqli_num_rows($checkResult) > 0) {
            $insertQuery = "INSERT INTO t_admin_login_table VALUES ('','$adminemaillogin','$time',' ','$status')";
            mysqli_query($DB_CONNECT,$insertQuery) or die(mysqli_error($DB_CONNECT));
					  header('Location:admin_dashboard.php');
			   }
         else{
          $insertQuery = "INSERT INTO t_admin_login_table VALUES ('','$adminemaillogin','$time',' ','$status')";
            mysqli_query($DB_CONNECT,$insertQuery) or die(mysqli_error($DB_CONNECT));
					  header('Location:admin_dashboard.php');

         }
		  }
    }
  }
  else {
    echo "<div class='message'>You are not registered. Please try registering instead.<br><a href='registration.php'>Register</a></div>";
   // header('Location:dashboard.php?action=fail');
  }
}
}
?>
</body>
</html>
