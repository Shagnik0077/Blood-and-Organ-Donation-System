<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Blood Details</title>
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
    <h2 class="Blood_Bank_Details ">Hospital Blood Details </strong></h2>
    <div class="dashboard-options">
      <div class="dashboard-buttons">
        <a  href="admin_dashboard.php" class="dashboard-button">Dashboard</a>
        <a href="#" class="logout-button">Logout</a>
      </div>
    </div>
    <table>
      <tr>
        <th>ID</th>
        <th>Hospital Name</th>
        <th>Address</th>
        <th>A+</th>
        <th>A-</th>
        <th>B+</th>
        <th>B-</th>
        <th>AB+</th>
        <th>AB-</th>
        <th>O+</th>
        <th>O-</th>
        <th>Status</th>
      </tr>
      <?php
	  	$query = "SELECT * FROM t_hospital_blood_details_table";
		$data = mysqli_query($DB_CONNECT,$query);
		$result = mysqli_num_rows($data);
		if($result){
			while($row=mysqli_fetch_array($data)){
				?>
                	<tr>
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Hospital_Name']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
                        <td><?php echo $row['A+']; ?></td>
                        <td><?php echo $row['A-']; ?></td>
                        <td><?php echo $row['B+']; ?></td>
                        <td><?php echo $row['B-']; ?></td>
                        <td><?php echo $row['AB+']; ?></td>
                        <td><?php echo $row['AB-']; ?></td>
                        <td><?php echo $row['O+']; ?></td>
                        <td><?php echo $row['O-']; ?></td>
                        <td><?php echo $row['Status']; ?></td>
                    
                    </tr>
                <?php
			}
		}
	  ?>
      </table>
  </div>
</body>
</html>