<!DOCTYPE html>
<html lang="en">
<head>

	<style>
header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}

nav {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
}

nav a {
  color: #fff;
  text-decoration: none;
  margin: 0 20px;
  font-weight: bold;
}

nav a:hover {
  text-decoration: underline;
}


main {
  padding: 20px;
}

.section {
  margin-bottom: 30px;
}

h2 {
  margin-top: 0;
}

.table-container {
  margin-top: 20px;
}

table {
  width:auto;
  border-collapse: collapse;
  border: 1px solid #ccc;
}

th, td {
  padding: 10px;
  text-align: center;
  border: 1px solid #ccc;
}

/* Additional styling as needed */

	</style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User History</title>
</head>
<body>

<?php 
	include'connectdb.php';
	?>

  <header>
    <h1>User History</h1>
    <nav>
  <nav>
  <a href="home1.php">Home</a>
  <a href="user_dashboard.php">My Account</a>
  <a href="logout.php">Logout</a>
</nav>
</nav>
  </header>
  <main>
    <section id="donorHistory">
      <h2 style="text-align:center">Donor History</h2>
      <div class="table-container">
        <h3>Blood Donation History</h3>
        <table>
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
      $status='Approved';
      $username=$_SESSION['name'];
      $useremail=$_SESSION['username'];
			$query = "SELECT * FROM t_blood_doner_pending_table WHERE status='$status' AND Email='$useremail'";
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
      </div>
      <div class="table-container">
        <h3>Organ Donation History</h3>
        <table>
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
            	session_start();
                $status='Approved';
                $username=$_SESSION['name'];
                $useremail=$_SESSION['username'];
			
			$query = "SELECT * FROM t_organ_doner_pending_table WHERE status='$status' AND Email='$useremail' ";
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
      </div>
    </section>
    <section id="recipientHistory">
      <h2 style="text-align:center">Recipient History</h2>
      <div class="table-container">
        <h3>Blood Recipient History</h3>
        <table>
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
      session_start();
      $status='Approved';
      $username=$_SESSION['name'];
      $useremail=$_SESSION['username'];
			$query = "SELECT * FROM t_blood_recipent_pending_table  WHERE status='$status' AND Email='$useremail'";
			
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
      </div>
      <div class="table-container">
        <h3>Organ Recipient History</h3>
        <table>
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
            		session_start();
                $status='Approved';
                $username=$_SESSION['name'];
                $useremail=$_SESSION['username'];
			
			$query = "SELECT * FROM t_organ_recipient_pending_table WHERE status='$status' AND Email='$useremail' ";
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
    </section>
  </main>
</body>
</html>
