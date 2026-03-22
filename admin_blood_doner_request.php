<?php 
include('connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Doner Request</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .dashboard-container {
      max-width: 700px;
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
<div class="dashboard-container">
    <h2 class="Blood_Bank_Details ">Blood Doner Request</strong></h2>
    <div class="dashboard-options">
      <div class="dashboard-buttons">
        <a  href="admin_dashboard.php" class="dashboard-button">Dashboard</a>
        <a href="#" class="logout-button">Logout</a>
      </div>
    </div>
   
    <table align="center">
      <tr>
        <th>ID</th>
        <th>Doner Name</th>
        <th>Donate Type</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Donation Place </th>
        <th>Place Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
   <?php
      include('connectdb.php');
      
      $query = "SELECT * FROM t_blood_doner_pending_table WHERE status = 'Pending' ORDER BY id ASC ";
      $result = mysqli_query($DB_CONNECT, $query);
      while ($row = mysqli_fetch_array($result))
      {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['type'] . '</td>';
        echo '<td>' . $row['age'] . '</td>';
        echo '<td>' . $row['bloodGroup'] . '</td>';
        echo '<td>' . $row['donationPlace'] . '</td>';
        echo '<td>' . $row['placeName'] . '</td>';
        echo '<td>' . $row['status'] . '</td>';
        echo '<td>';
        echo '<form action="admin_blood_doner_request.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '" >';
        echo '<input type="submit" name="approve" value="Approve"> &nbsp; &nbsp;';
        echo '<input type="submit" name="delete" value="Delete">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
      }
      ?>
      </table>
      </div>
</body>
</html>
  

			<?php
       include('connectdb.php');

       if (isset($_POST['approve']))
       {
         $id = $_POST['id'];
         $select = "UPDATE t_blood_doner_pending_table SET status = 'Approved' WHERE id = '$id'";
        $result = mysqli_query($DB_CONNECT, $select);
         $select1 = "UPDATE t_blood_doner_pending_table SET process = 'ND' WHERE id = '$id' ";
         $result1 = mysqli_query($DB_CONNECT, $select1);
       
         $query1 = "SELECT * FROM t_blood_doner_pending_table WHERE status = 'Approved' AND process='ND' AND id='$id' ORDER BY id ASC ";
         $result2 = mysqli_query($DB_CONNECT,$query1);
         while($row=mysqli_fetch_array($result2))
          {
            $name=$row['name'];
            $type=$row['type'];
            $age=$row['age'];
            $bloodGroup=$row['bloodGroup'];
            $donationplace=$row['donationPlace'];
            $placename=$row['placeName'];
            if($type == "Blood") {
              if($donationplace=="hospital"){
           $sqlCheck = "SELECT `$bloodGroup` FROM t_hospital_blood_details_table WHERE Hospital_Name = '$placename'";
           $resultCheck = mysqli_query($DB_CONNECT,$sqlCheck);
           if (mysqli_num_rows($resultCheck) > 0) {
               $row2 = mysqli_fetch_assoc($resultCheck);
               $currentQuantity = $row2[$bloodGroup];
                 if($currentQuantity <= 0){
                   echo "The quantity for blood of $bloodGroup at $placename is already 0 or less.";
                   } 
                 else{
                   $sqlUpdate = "UPDATE t_hospital_blood_details_table SET `$bloodGroup` = `$bloodGroup` + 1 WHERE Hospital_Name = '$placename'";
                   mysqli_query($DB_CONNECT,$sqlUpdate);
                   echo "Quantity for Blood Group $bloodGroup reduced by 1 at $placename.";
                   header("location:admin_blood_doner_request.php");
                 }
               }   
           else{
                echo "Hospital or Blood Group not found.";
               }
               $select = "UPDATE t_blood_doner_pending_table SET process='D' WHERE id='$id'";
         $result = mysqli_query($DB_CONNECT, $select);
       }
       else if($donationplace=="bloodBank"){
        $sqlCheck = "SELECT `$bloodGroup` FROM t_bloodbank_details_table WHERE Bank_Name = '$placename'";
        $resultCheck = mysqli_query($DB_CONNECT,$sqlCheck);
        if (mysqli_num_rows($resultCheck) > 0) {
            $row2 = mysqli_fetch_assoc($resultCheck);
            $currentQuantity = $row2[$bloodGroup];
              if($currentQuantity <= 0){
                echo "The quantity for blood of $bloodGroup at $placename is already 0 or less.";
                } 
              else{
                $sqlUpdate = "UPDATE t_bloodbank_details_table SET `$bloodGroup` = `$bloodGroup` + 1 WHERE Bank_Name = '$placename'";
                mysqli_query($DB_CONNECT,$sqlUpdate);
                echo "Quantity for Blood Group $bloodGroup reduced by 1 at $placename.";
                header("location:admin_blood_doner_request.php");
              }
            }   
        else{
             echo "Hospital or Blood Group not found.";
            }
            $select = "UPDATE t_blood_doner_pending_table SET process='D' WHERE id='$id'";
      $result = mysqli_query($DB_CONNECT, $select);
    }      
         }
      }
    }
    else if (isset($_POST['delete']))
{
  $id = $_POST['id'];
  $select = "DELETE FROM t_blood_doner_pending_table  WHERE id = '$id'";
  $result = mysqli_query($DB_CONNECT, $select);

  if ($result) {
    echo "Recipient with ID $id has been deleted.";
    header("location:admin_blood_doner_request.php");
  } else {
    echo "Error deleting recipient: " . mysqli_error($DB_CONNECT);
  }
  mysqli_close($DB_CONNECT);
  exit();
}
?>
  	

