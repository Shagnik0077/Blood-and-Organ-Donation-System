
<?php 
	include'connectdb.php';
	?>
    <!DOCTYPE html>
<html lang="en">
<head>
<style>
		/* Reset some default styles */
body, h1, h2, p, label, input, textarea {
  margin: 0;
  padding: 0;
}

/* Global styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

/* Header styles */
header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px 0;
}

h1 {
  margin-bottom: 10px;
  font-size: 24px;
}

/* Navigation styles */
nav {
  text-align: right;
  margin-top: 20px;
  margin-right: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
  margin-left: 20px;
  font-weight: bold;
}

/* Main content styles */
main {
  max-width: 800px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h2 {
  margin-bottom: 20px;
  font-size: 20px;
}

.user-info {
  margin-bottom: 10px;
}

label {
  display: inline-block;
  width: 120px;
  font-weight: bold;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
}

/* Adjust styles for read-only fields */
input[readonly],
textarea[readonly] {
  background-color: #f0f0f0;
  border: none;
}

/* Adjustments for the "Action" section */
#userActions {
  text-align: center;
  margin-top: 20px;
}

#userActions h2 {
  margin-bottom: 20px;
  font-size: 20px;
}

.action-box {
  background-color: #f0f0f0;
  border-radius: 8px;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.action-box a {
  display: block;
  color: #333;
  text-decoration: none;
  margin: 10px 0;
  font-weight: bold;
}

	</style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
</head>
<body>

  <header>
    <h1>Welcome User</h1>
    <nav>
      <a href="user_history.php">History</a>
      <a href="logout.php">Logout</a>
      <a href="profileupdate.php">Update Profile</a>
    </nav>
  </header>
  <main>
    <section id="userDetails">
      <h2>User Details</h2>
      <?php
      session_start();
      $username=$_SESSION['name'];
      $useremail=$_SESSION['username'];
	  	$query = "SELECT * FROM t_registration_details WHERE Name='$username' AND Email='$useremail'";
		  $data = mysqli_query($DB_CONNECT,$query);
		  $result = mysqli_num_rows($data);
		if($result){
			while($row=mysqli_fetch_array($data)){
				?>
      <div class="user-info">
        <label for="name">Name:</label>
        <input type="text" id="name" value="<?php echo $row['Name']; ?>" readonly>
      </div>
      <div class="user-info">
        <label for="username">Username:</label>
        <input type="text" id="username" value="<?php echo $row['Email']; ?>" readonly>
      </div>
      <div class="user-info">
        <label for="age">Age:</label>
        <input type="text" id="age" value="<?php echo $row['Age']; ?>" readonly>
      </div>
      <div class="user-info">
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" value="<?php echo $row['Mobile']; ?>" readonly>
      </div>
		<div class="user-info">
        <label for="DOB">DOB:</label>
        <input type="text" id="DOB" value="<?php echo $row['DOB']; ?>" readonly>
      </div>
      <div class="user-info">
        <label for="petname">Petname:</label>
        <input type="text" id="petname" value="<?php echo $row['petname']; ?>" readonly>
      </div>
      <div class="user-info">
        <label for="address">Address:</label>
        <textarea rows="5" cols="10" id="address" readonly><?php echo $row['Address']; ?></textarea>
      </div>
      <?php
			}
		}
	  ?>
    </section>
    <section id="userActions">
      <h2>Action</h2>
      <div class="action-box">
        <a href="donateblood.php">Donate Blood</a>
        <a href="reciepentblood.php">Receive Blood</a>
        <a href="donateorgan.php">Donate Organ</a>
        <a href="reciepentorgan.php">Receive Organ</a>
      </div>
    </section>
  </main>
</body>

</html>
