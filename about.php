<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood and Organ Donation System</title>


<style>
/* styles.css */

/* Reset default styles */
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

.logo h1 {
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

/* Hero Section */
.hero {
  background-color: #e8f0fe;
  padding: 100px;
  text-align: center;
}

.hero-content h2 {
  color: #333;
  font-size: 36px;
  margin-bottom: 20px;
}

.hero-content p {
  color: #666;
  font-size: 18px;
  margin-bottom: 40px;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4287f5;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #1a5fd6;
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

/* Call-to-action Section */
.cta {
  background-color: #4287f5;
  padding: 100px;
  text-align: center;
}

.cta h3 {
  color: #fff;
  font-size: 36px;
  margin-bottom: 40px;
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
   <header>
    <nav id="nav">
      <div class="logo">
        <h1>Blood and Organ Donation System</h1>
      </div>
      <ul class="nav-links">
        <li><a href="home1.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li>
      		<a>Login</a>
      		<ul>
                <li><a href="admin_login.php">Admin</a></li>
                <li><a href="login.php">User</a></li>
      		</ul>
    	</li>
      <li>
        <a>Registration</a>
        <ul>
          <li><a href="admin_registration.php">Admin</a></li>
          <li><a href="registration.php">User</a></li>
        </ul>
    </nav>
  </header>  
  <section align="center" class="aboutheader">
  	<h2><u>Blood & Organ Donation System</u></h2>
    <br/>
    <br/>
    <p align="left">
    	The Division of Transplantation (DoT) is within the Health Systems Bureau (HSB) of the Health Resources and Services Administration at the U.S. Department of Health and Human Services. DoT is the primary federal entity responsible for oversight of the nation’s organ and blood stem cell transplant systems. DoT also implements programs and initiatives that increase organ and blood stem cell donations in the United States.
    </p>
    <br/>
    	<h3><u>Why Our Work Is Important</u></h3>
    <br/>	
    <p align="left">
    	DoT is our nation’s unifying voice for organs, blood donation. We encourage donor registration with outreach efforts like organdonor.gov. By creating a big donor pool, we can help more people find matches for lifesaving transplants.
    </p>
    <br/>
    	<h4><u>Our Programs</u></h4>
    <br/>
    <p align="left"> 
Leverages a multi-faceted outreach strategy to educate the public and encourage more people to register as organ,blood donors.
	</p>
    <br/>
    <p align="left">
Maintains the national transplant waiting list and distributes organs. Its policies are developed with input from the donation and transplantation communities and the general public. 
	</p>
    <br/>
    <p align="left">
The Scientific Registry of Transplant Recipients
Provides analytical support to help the Organ Procurement and Transplantation Network evaluate transplant policies and system performance.
	</p>
    <br/>
    <p align="left">
Facilitates blood stem cell transplants from donors not related to the recipients.
    </p>
    <br/>
    	<h4><u>Legislation and Policy</u></h4>
    <br/>
    <p align="left">
Organ and tissue donation and transplantation are among the most regulated areas in health care. State and federal laws ensure a safe and fair system for donated organs (including bone marrow), and tissue allocation, distribution, and transplantation.
    </p>
    <br/>
    	<h4><u>Great Programs and Research Report</u></h4>
    <br/>
    <p align="left">
    	DoT sponsors grants and research projects to reduce the gap between the demand for organs and the supply of donated organs.
    </p>
    <br/>
    	<h4><u>Secretarial Advisory Comittees</u></h4>
    <br/>
    <p align="left">
    	The Advisory Committee on Organ Transplantation (ACOT) advises the HHS Secretary on organ donation, procurement, allocation, and transplantation. ACOT provides advice on ways to maximize the number of deceased donor organs available for transplantation and to support the safety of living-organ donation.
	</p>
    <p align="left" class="aboutlastpara">
The Advisory Council on Blood Stem Cell Transplantation makes recommendations about the activities of the C.W. Bill Young Cell Transplantation Program and the National Cord Blood Inventory. The council advises the HHS Secretary and HRSA Administrator.
    </p>
  </section>
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
</body>

</html>