<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Registration</title>
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
  <div class="registration-container">
    <h2>Admin Registration</h2>
    <form class="registration-form" action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" min="0" required>
      
       <label for="gender">Gender</label>
      <select id="gender" name="gender" required>
        <option value="" selected disabled>Select your gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

       <label for="security_question">What is your pet name?</label>
      <input type="text" id="security_question" name="security_question" required>

      <label for="address">Address</label>
      <textarea id="address" name="address" required rows="4"></textarea>

      <input type="submit" value="Register" name="submit" class="registration-button">
    </form>
    
    <?php
		include('connectdb.php');
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$petname = $_POST['security_question'];
			$address = $_POST['address'];
			$check_admin = "SELECT * FROM t_admin_information_table WHERE email = '$email'";
			$result = mysqli_query($DB_CONNECT,$check_admin);
			$count = mysqli_num_rows($result);
			if($count>0)
			{
				?>
        		<script type="text/javascript">
					alert("You Alredy exists !");
				</script>
        		<?php
			}
			else
			{
				$rt = mysqli_query($DB_CONNECT,"INSERT INTO t_admin_information_table(id,name,age,gender,email,password,petname,address,status)value('','$name','$age','$gender','$email','$password','$petname','$address','NotApproved')");
				if($rt)
				{
					?>
        			<script type="text/javascript">
						alert("Your registration has been successfull . Go to login to login your account .");
					</script>
        			<?php
					header("location:admin_registration.php");
				}
			}
		}
	?>
    
    
  </div>

</body>
</html>
