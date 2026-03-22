<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .dashboard-container {
      max-width: 800px;
      margin: 30px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .Blood_Bank_Details {
      text-align: center;
      margin-bottom: 30px;
    }

    .dashboard-options {
      display: flex;
      align-items: center;
	  float:right;
	  padding-bottom:30px;
    }
    

    .dashboard-buttons {
      display: flex;
    }

    .dashboard-button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 12px 20px;
      cursor: pointer;
      margin-right: 10px;
      text-decoration: none; /* Add this line to remove underline */
    }

    .dashboard-button:hover {
      background-color: #45a049;
    }

    .logout-button {
      background-color: #FF0000;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 12px 20px;
      cursor: pointer;
      text-decoration: none; /* Add this line to remove underline */
    }

    .logout-button:hover {
      background-color: #DF0000;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

  </style>
</head>
<body>
<div class="dashboard-container">
    <h2 class="Blood_Bank_Details ">New User Registration Details</strong></h2>
  <div class="dashboard-options">
      <div class="dashboard-buttons">
        <a  href="admin_dashboard.php" class="dashboard-button">Dashboard</a>
        <a href="#" class="logout-button">Logout</a>
      </div>
  </div>
  <table width="106%">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Petname</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    <?php
				include('connectdb.php');
				$query = "SELECT id, Name, Email, password, petname, Status FROM t_registration_details WHERE Status = 'NotApproved' ORDER BY id ASC";
				$result = mysqli_query($DB_CONNECT, $query);
				while ($row = mysqli_fetch_array($result))
				{
					echo '<tr>';
        			echo '<td>' . $row['id'] . '</td>';
        			echo '<td>' . $row['Name'] . '</td>';
        			echo '<td>' . $row['Email'] . '</td>';
					echo '<td>' . $row['password'] . '</td>';
					echo '<td>' . $row['petname'] . '</td>';
					echo '<td>' . $row['Status'] . '</td>';
        			echo '<td>';
					echo '<form action="admin_new_user.php" method="post">';
					echo '<input type="hidden" name="id" value="' . $row['id'] . '" >';
					echo '<input type="submit" name="approve" value="Approve"> &nbsp; &nbsp;';
					echo '<input type="submit" name="delete" value="Delete">';
					echo '</form>';
					echo '</td>';
					echo '</tr>';
				}
				?>
			<?php
				if(isset($_POST['approve']))
				{
					$id = $_POST['id'];
					$select = "UPDATE t_registration_details SET Status = 'Approved' WHERE id = '$id'";
					$result = mysqli_query($DB_CONNECT,$select);
					header("location:admin_new_user.php");
				}
				if(isset($_POST['delete']))
				{
					$id = $_POST['id'];
					$select = "DELETE FROM t_registration_details WHERE id = '$id'";
					$result = mysqli_query($DB_CONNECT,$select);
					header("location:admin_new_user.php");
				}
			?>
  </table>
  </div>
</body>
</html>
