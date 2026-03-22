<?php
error_reporting(E_ALL);
session_start();
include('connectdb.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $userName = $_SESSION['username'];
    $password = $_SESSION['password']; // Not used for updating password. Just for checking user existence.
    $Mobile = $_POST['mobile'];
    $DOB = $_POST['dob'];
    $Age = $_POST['age'];
    $Address = $_POST['address'];

    if ($userName != null) {
        
            $sql = "SELECT * FROM t_registration_details WHERE email = ? AND password = ?";
            $stmt = mysqli_prepare($DB_CONNECT, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $userName, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result); // Fetch the logged-in user's details
                // Update the user details
                $updateQuery = "UPDATE t_registration_details SET Name = ?, Mobile = ?, DOB = ?, Age = ?, Address = ? WHERE email = ?";
                $stmtUpdate = mysqli_prepare($DB_CONNECT, $updateQuery);
                mysqli_stmt_bind_param($stmtUpdate, "ssssss", $name, $Mobile, $DOB, $Age, $Address, $userName);
                mysqli_stmt_execute($stmtUpdate);

                // Redirect to profileupdate.php after successful update
                header('Location: profileupdate.php');
                exit;
            } else {
                // User not found
                header('Location: home1.php');
                echo "Could not find the proper user ... try registration";
                exit;
            }
        
    }
}
?>

<!DOCTYPE html>
<html>
<!-- The rest of your HTML code -->

</html>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood and Organ Donation System</title>


<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

/* Header */
header {
  background-color: #f5f5f5;
  padding: 20px;
}

.logo {
  color: #333;
}

.nav-links {
  list-style: none;
  display: flex;
  justify-content: flex-end;
}

.nav-links li a:hover {
  color: #555;
  text-decoration: underline;
}


.nav-links li {
  margin-left: 20px;
}

.nav-links a {
  color: #333;
  text-decoration: none;
  font-weight: bold;
}


/* Donation Process Section */
.donation-process {
  padding: 80px;
  text-align: center;
}

.donation-process h3 {
  color: #333;
  font-size: 32px;
  margin-bottom: 40px;
}

.process-steps {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.step {
  flex: 0 0 250px;
  margin-bottom: 40px;
}

.step img {
  width: 240px;
  height: 140px;
  margin-bottom: 20px;
}

.step h4 {
  color: #333;
  font-size: 24px;
  margin-bottom: 10px;
}

.step p {
  color: #666;
}

/*account section*/
.container {
			max-width: 600px;
			margin: 20px auto;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
	
		
		form {
			display: flex;
			flex-direction: column;
		}
		
		label {
			font-weight: bold;
			margin-bottom: 5px;
		}
		
		input, textarea {
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		
		textarea {
			resize: vertical;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			color: #ffffff;
			border: none;
			border-radius: 5px;
			padding: 10px;
			cursor: pointer;
			font-weight: bold;
		}
		
		input[type="submit"]:hover {
			background-color: #45a049;
		}


/* Footer */
footer {
  background-color: #f5f5f5;
  padding: 20px;
  text-align: center;
}

.footer-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.footer-links {
  list-style: none;
  display: flex;
}

.footer-links li {
  margin-left: 10px;
}

.footer-links a {
  color: #333;
  text-decoration: none;
}

.social-icons {
  display: flex;
  align-items: center;
}

.social-icons img {
  width: 30px;
  height: 30px;
  margin-left: 10px;
}


#nav a {
  text-decoration: none;
  padding: 15px;
  display:inline-block;
}
ul {
  display: inline;
  margin: 0;
  padding: 0;
}
ul li {display: inline-block;}
ul li:hover ul {display: block;}
ul li ul {
  position: absolute;
  width: 200px;
  display: none;
}
ul li ul li { 
  display: block;
  background-color:#CCC; 
}
ul li ul li a {display:block !important;} 
ul li ul li:hover {background: #666;}

.aboutheader h2{
	color:#F00;
	padding-top:18px;
	padding-bottom:18px;
}
.aboutheader h3{
	color:#666;
}
.aboutheader h4{
	color:#9C6;
}
.aboutheader p{
	padding-left:13px;
}
.aboutlastpara{
	padding-bottom:10px;
}
</style>
</head>

<body>
  		<?php
		//$userName = $_SESSION['email'];
		//$query1 = "SELECT * FROM t_userlogin_table WHERE email = '".$_SESSION['username']."' and status = 'in'";
		//$data1 = mysqli_query($DB_CONNECT,$query1);
		//if($data1){
			//if(mysqli_num_rows($data1)>0){
				//while($row1 = mysqli_fetch_array($data1)){
					//print_r($row1['email']);
					
				//}
			//}
		//}
	  	$query = "SELECT * FROM t_registration_details WHERE Email = '".$_SESSION['username']."'";
		$data = mysqli_query($DB_CONNECT,$query);
		$result = mysqli_num_rows($data);
		if($result){
			while($row=mysqli_fetch_array($data)){
				?>
  		<div class="container">
        <h1 align="center">My Account</h1>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value ="<?php echo $row['Name']; ?>" >

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['Email']; ?>" readonly>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>"readonly>
            <label for="mobile">Mobile:</label>
            <input type="tel" id="mobile" name="mobile" value="<?php echo $row['Mobile']; ?>"required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" placeholder="<?php echo $row['DOB']; ?>" >

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="<?php echo $row['Age']; ?>">

            <label for="address">Address:</label>
            <textarea id="address" name="address" placeholder="<?php echo $row['Address']; ?>" ></textarea>

            <input type="submit" name="submit" value="Update">
        </form>
    </div>
    		<?php
			}
			}
?>

 
  <footer>
    <div class="footer-content">
      <p>&copy; 2023 Blood and Organ Donation System. All rights reserved.</p>
      <ul class="footer-links">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
      </ul>
    </div>
    <div class="social-icons">
      <a href="https://www.facebook.com/your_facebook_page_url" target="_blank">
        <img src="images/facebook-1799691_1280.webp" alt="Facebook">
      </a>
      <a href="https://www.instagram.com/your_instagram_page_url" target="_blank">
        <img src="images/3692531.png" alt="Instagram">
      </a>
      </div>
  </footer>
</body>

</html>