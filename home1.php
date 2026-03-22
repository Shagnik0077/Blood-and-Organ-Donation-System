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
  background-color: black;
  color:yellow;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: purple;
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
      </li>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h2>Donate Blood and Save Lives</h2>
      <p>Find blood and organ donors in your area. Join our cause and help saving lives.</p>
      <a href="registration.php" class="btn">Donate Now</a>
    </div>
  </section>

  <section class="donation-process">
    <h3>Donation Process</h3>
    <div class="process-steps">
      <div class="step">
        <img src="account_creation_home.jpg" alt="Step 1">
        <h4>Step 1</h4>
        <p>Create an account</p>
      </div>
      <div class="step">
        <img src="information_home.avif" alt="Step 2">
        <h4>Step 2</h4>
        <p>Provide necessary information</p>
      </div>
      <div class="step">
        <img src="Blood and organ_home.jpg" alt="Step 3">
        <h4>Step 3</h4>
        <p>Donate blood or organs</p>
      </div>
      <div class="step">
        <img src="step4_home.jpg" alt="Step 4">
        <h4>Step 4</h4>
        <p>Save lives and make a difference</p>
      </div>
    </div>
  </section>

  <section class="cta">
    <h3>Ready to make a difference?</h3>
    <a href="registration.php" class="btn">Join Now</a>
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
