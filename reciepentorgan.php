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

/*donate blood*/

.container {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
select,
textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
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

button:hover {
    background-color: #0056b3;
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
.button input{
        width:150px;
        height:35px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <header>
    <nav id="nav">
      <div class="logo">
        <h1>Organ Recipient Registration</h1>
      </div>
      <ul class="nav-links">
        <li><a href="home1.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <h1>Recieve Organ</h1>
    <form id="organDonationForm" method="post" action="reciepentorgan.php?action=submit" name="organDonateForm">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="Organ">Organ:</label>
        <select id="organ" name="organ" required>
          <option value="" selected disabled>Select Organ</option>
          <option value="Heart">Heart</option>
          <option value="Lungs">Lungs</option>
        </select>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <select id="Age" name="Age" required>
          <option value="" selected disabled>Select Age Group</option>
          <option value="0-15">0-15</option>
          <option value="16-30">16-30</option>
          <option value="31-50">31-50</option>
        </select>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="Gender" name="Gender" required>
          <option value="" selected disabled>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="bloodGroup">Blood Group:</label>
        <select id="bloodGroup" name="bloodGroup" required>
          <option value="" selected disabled>Select Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>
      </div>
      <div class="form-group">
        <label for="SelectHospital">Available-Hospital:</label>
        <select id="SelectHospital" name="SelectHospital" required>
          <option value="" selected disabled>Select Hospital</option>
          <option value="Apollo Medical centre Kolkata">Apollo Medical centre Kolkata</option>
          <option value="Belle Vue Clinic">Belle Vue Clinic</option>
          <option value="ILS Hospital">ILS Hospital</option>
          <option value="ILS Hospital Dumdum">ILS Hospital Dumdum</option>
          <option value="KPC Medical college & Hospital">KPC Medical college & Hospital</option>
          <option value="Medica Superspeciality Hospital[Kolkata]">	Medica Superspeciality Hospital[Kolkata]</option>
          <option value="Ruby General Hospital">Ruby General Hospital</option>
          <option value="Nrs. Medical College & Hospital">Nrs. Medical College & Hospital</option>
          <option value="IPGME&R and SSKM Hospital">IPGME&R and SSKM Hospital</option>
          <option value="Chittaranjan Seva Sadan Hospital">Chittaranjan Seva Sadan Hospital</option>
        </select>
      </div>
      <button type="submit">Submit</button>
</form>
  
</body>

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
        <img src="facebook.avif" alt="Facebook">
      </a>
      <a href="https://www.instagram.com/your_instagram_page_url" target="_blank">
        <img src="Instagram.webp" alt="Instagram">
      </a>
      </div>
</footer>
</html>
<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['action']=="submit")
    {
        include("connectdb.php");
        session_start();
        $email=$_SESSION['username'];
        $name =$_POST['name'];
        $organ =  $_POST['organ'];
        $age = $_POST['Age'];
        $gender = $_POST['Gender'];
        $hospital =  $_POST['SelectHospital'];
        $bloodGroup =  $_POST['bloodGroup'];
        $status="Pending";
        if($gender=="Male"){
            $gender='M';
        }
        else if($gender=="Female")
        {
            $gender="F";
        }
        $insertQuery = "INSERT INTO t_organ_recipient_pending_table VALUES ('', '$name','$email','$organ', '$age', '$gender','$bloodGroup','$hospital','$status','S')";
        mysqli_query($DB_CONNECT, $insertQuery) or die(mysqli_error($DB_CONNECT));
        mysqli_close($DB_CONNECT); 
        }
?>



