<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Forgot Password</title>
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

    .registration-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 400px;
      width: 100%;
    }

    .registration-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .registration-form {
      display: flex;
      flex-direction: column;
    }

    .registration-form label {
      font-weight: bold;
      margin-bottom: 8px;
    }

    .registration-form input,
    .registration-form textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 15px;
    }

    .registration-form select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 15px;
    }

    .registration-button {
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

.registration-button:hover {
    background-color: #0056b3;
}
  </style>
</head>
<body>
<?php 
	include'connectdb.php';
	?>
  <div class="registration-container">
    <h2>Admin Forgot Password</h2>
    <form class="registration-form" action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter Your Registered Email"required>
      
      <label for="security_question">What is your pet name?</label>
      <input type="text" id="security_question" name="security_question" placeholder="Enter Your Pet Name"required>

      <label for="password"> New Password</label>
      <input type="password" id="password" name="new_password" placeholder="Enter Your New Password"required>
      
      <label for=" Confirm password"> Confirm New Password</label>
      <input type="password" id="password" name="confirm_new_password" placeholder="Enter Your Updated Password"required>

      <input type="submit" value="Update" name="submit" class="registration-button">
    </form>
    
    <?php
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$security_question = $_POST['security_question'];
			$new_password = $_POST['new_password'];
			$confirm_new_password = $_POST['confirm_new_password'];
			if($new_password == $confirm_new_password)
			{
				$updateQuery = "UPDATE t_admin_information_table SET password = '$new_password' WHERE email='$email' AND petname = '$security_question'";
				$stmtUpdate = mysqli_query($DB_CONNECT, $updateQuery);
				if($stmtUpdate)
				{
					?>
					<script type="text/javascript">
						alert("Your Password has been updated . ");
					</script>
					<?php
					header("Location:admin_login.php");
				}
				else
				{
					?>
					<script type="text/javascript">
						alert("Something went wrong. ");
					</script>
					<?php
					header("Location:admin_forgot_password.php");
				}
			}
			else
			{
				echo "please enter the same password.";
			}
		}
	?>
    
  </div>

</body>
</html>
