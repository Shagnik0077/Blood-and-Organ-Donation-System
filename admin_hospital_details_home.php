<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Side Hospital Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
	
    .dashboard-container {
      max-width: 900px;
      margin: 30px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .welcome-message {
      text-align: center;
      margin-bottom: 30px;
    }

    .dashboard-options {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .dashboard-option {
      flex-basis: 30%;
      padding: 30px;
      background-color: #f9f9f9;
      border-radius: 8px;
      margin-bottom: 30px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.2s ease;
    }
	
	

    .dashboard-option:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .dashboard-option a {
      text-decoration: none;
      color: #333;
      display: block;
      font-weight: bold;
    }

    .dashboard-option a:hover {
      color: #4CAF50;
    }

    .dashboard-option:last-child {
      flex-basis: 30%;
    }

    .logout-container {
      text-align: center;
      margin-top: 30px;
    }

    .logout-button {
      background-color: #FF0000;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 12px 20px;
      cursor: pointer;
      margin-right: 10px;
	  text-decoration: none;
    }

    .delete-account-button {
      background-color: #FF4500;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 12px 20px;
      cursor: pointer;
	  text-decoration: none;
    }

    .logout-button:hover, .delete-account-button:hover {
      background-color: #DF0000;
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <h2 class="welcome-message">Hospital Details</h2>
    <div class="dashboard-options">
    	
      <div class="dashboard-option">
        <a href="admin_hospital_blood_details.php">Blood Details</a>
      </div>
      <div class="dashboard-option">
        <a href="admin_hospital_organ_home.php">Organ Details</a>
      </div>
    </div>
    <div class="logout-container">
    	 <a href="#" class="logout-button">Logout</a>
         <a href="admin_dashboard.php" class="delete-account-button">Dashboard</a>
    </div>
  </div>
</body>
</html>
