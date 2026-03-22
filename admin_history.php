<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin History</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .dashboard-container {
      max-width: 1000px;
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
	background-color: #FFF;
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
    <h2 class="Blood_Bank_Details ">Admin History</strong></h2>
    <div class="dashboard-options">
      <div class="dashboard-buttons">
        <a  href="admin_dashboard.php" class="dashboard-button">Dashboard</a>
        <a href="admin_logout.php" class="logout-button">Logout</a>
      </div>
    </div>
   
    <table align="center">
    <h3>Blood Donation History</h3>
      <thead>
            <tr>
              <th>Donation ID</th>
              <th>Donor Name</th>
            
              <th>Blood Group</th>
              <th>Donation Place</th>
              <th>Organisation Name</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Donor blood donation history rows -->
            <?php
			session_start();
			$query = "SELECT * FROM t_blood_doner_pending_table WHERE status = 'Approved'";
			$data = mysqli_query($DB_CONNECT,$query);
			$result = mysqli_num_rows($data);
			if($result){
			while($row=mysqli_fetch_array($data)){
				?>
                	<tr>
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                       
                        <td><?php echo $row['bloodGroup']; ?></td>
                        <td><?php echo $row['donationPlace']; ?></td>
                        <td><?php echo $row['placeName']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    
                    </tr>
                <?php
				}
			}
			?>
          </tbody>
    	
  </table>
  <table align="center">
  <h3>Organ Donation History</h3>
          <thead>
            <tr>
              <th>Donation ID</th>
              <th>Donor Name</th>
              <th>Hospital Name</th>
              <th>Organ Type</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Blood Group</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Donor organ donation history rows -->
            <?php
			
			$query = "SELECT * FROM t_organ_doner_pending_table  WHERE status = 'Approved'";
			$data = mysqli_query($DB_CONNECT,$query);
			$result = mysqli_num_rows($data);
			if($result){
			while($row=mysqli_fetch_array($data)){
				?>
                	<tr>
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['hospitalName']; ?></td>
                        <td><?php echo $row['organType']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['bloodGroup']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    
                    </tr>
                <?php
				}
			}
			?>
          </tbody>
        </table>
        
        <table align="center">
        <h3>Blood Recipient History</h3>
          <thead>
            <tr>
              <th>Receive ID</th>
              <th>Recipent Name</th>
              <th>Blood Group</th>
              <th>Recipent Place</th>
              <th>Organisation Name</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Recipient blood recipient history rows -->
            <?php
			//session_start();
			$query = "SELECT * FROM t_blood_recipent_pending_table WHERE STATUS = 'Approved' ";
			
			$data = mysqli_query($DB_CONNECT,$query);
			$result = mysqli_num_rows($data);
			if($result){
			while($row=mysqli_fetch_array($data)){
				?>
                	<tr>
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        
                        <td><?php echo $row['bloodGroup']; ?></td>
                        <td><?php echo $row['donationPlace']; ?></td>
                        <td><?php echo $row['placeName']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    
                    </tr>
                <?php
				}
			}
			?>
          </tbody>
        </table>
  		
        <table align="center">
        <h3>Organ Recipient History</h3>
          <thead>
            <tr>
              <th>Recipient ID</th>
              <th>Recipient Name</th>
            
              <th>Hospital Name</th>
              <th>Organ Type</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Blood Group</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Recipient organ recipient history rows -->
            <?php
			
			$query = "SELECT * FROM t_organ_recipient_pending_table WHERE status = 'Approved'";
			$data = mysqli_query($DB_CONNECT,$query);
			$result = mysqli_num_rows($data);
			if($result){
			while($row=mysqli_fetch_array($data)){
				?>
                	<tr>
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['hospitalName']; ?></td>
                        <td><?php echo $row['organType']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['bloodGroup']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    
                    </tr>
                <?php
				}
			}
			?>
          </tbody>
        </table>
  </div>
</body>
</html>
