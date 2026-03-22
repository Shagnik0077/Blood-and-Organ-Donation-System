<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Admin Registration</title>
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
<?php 
	include'connectdb.php';
	?>
<div class="dashboard-container">
    <h2 class="Blood_Bank_Details ">New Admin Registration Details</strong></h2>
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
      <th>Age</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Password</th>
      <th>Petname</th>
      <th>Address</th>
      <th>Approve</th>
    </tr>
    <?php
	  	$query = "SELECT * FROM t_admin_information_table WHERE status = 'NotApproved' ORDER BY id ASC ";
		$result = mysqli_query($DB_CONNECT,$query);
		while($row=mysqli_fetch_array($result))
		{
			?>
            <table>
            	<tr>
                	<td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['petname']; ?></td>
                    <td><?php echo $row['address']; ?></td>
            
                    <td>
                    	<form action="admin_new_admin.php" method="post">
                        	<input type="hidden" name="ID" value="<?php echo $row['id']; ?>" >
                            <input type="submit" name="approve" value="Yes"> &nbsp; &nbsp;<input type="submit" name="delete" value="No" >
                        </form>
                    </td>
                </tr>
            </table>
            <?php
		}
		?>
			<?php
				if(isset($_POST['approve']))
				{
					$id = $_POST['ID'];
					$select = "UPDATE t_admin_information_table SET status = 'Approved' WHERE id = '$id'";
					$result = mysqli_query($DB_CONNECT,$select);
					header("location:admin_new_admin.php");
				}
				if(isset($_POST['delete']))
				{
					$id = $_POST['ID'];
					$select = "DELETE FROM t_admin_information_table WHERE id = '$id'";
					$result = mysqli_query($DB_CONNECT,$select);
					header("location:admin_new_admin.php");
				}
			?>
  </table>
  </div>
</body>
</html>
