<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['action']=="submit")
    {
        include("connectdb.php");
        session_start();
        $name =$_POST['name'];
        $type="Blood";
        $email=$_SESSION['username'];
        $age = $_POST['age'];
        $bloodGroup =  $_POST['bloodGroup'];
        $donationPlace = $_POST['donationPlace'];
        $selectedPlace = "";
        $status="Pending";
        if ($donationPlace === "hospital" && isset($_POST['selectHospital'])) {
          $selectedPlace = $_POST['selectHospital'];
        }
        elseif ($donationPlace === "bloodBank" && isset($_POST['selectBloodBank'])) {
          $selectedPlace = $_POST['selectBloodBank'];
        }
        $insertQuery = "INSERT INTO t_blood_recipent_pending_table VALUES ('', '$name','$email','$type', '$age','$bloodGroup','$donationPlace','$selectedPlace','$status','S')";
        mysqli_query($DB_CONNECT, $insertQuery) or die(mysqli_error($DB_CONNECT));
        mysqli_close($DB_CONNECT); 
        }
?>
<!DOCTYPE html>
<html>
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
</style>
</head>

<body>
    <header>
    <nav id="nav">
      <div class="logo">
        <h1>Blood Donation Registration</h1>
      </div>
      <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
    </nav>
    </header>

    <div class="container">
        <!-- Your registration form goes here -->
        <h1>Blood Recipient</h1>
        <form id="bloodRecipientForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- Your form fields -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="18" max="55" required>
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
                <label>Receiving Place:</label><br>
                <label>
                    <input type="radio" id="donationPlaceHospital" name="donationPlace" value="hospital" required>
                    Hospital
                </label><br>
                <label>
                    <input type="radio" id="donationPlaceBloodBank" name="donationPlace" value="bloodBank" required>
                    Blood Bank
                </label>
            </div>

            <div class="form-group" id="hospitalField" style="display: none;">
                <label for="selectHospital">Select Hospital:</label>
                <select id="selectHospital" name="selectHospital">
                    <!-- Populate hospital options dynamically using AJAX (explained in the previous response) -->
                </select>
            </div>

            <div class="form-group" id="bloodBankField" style="display: none;">
                <label for="selectBloodBank">Select Blood Bank:</label>
                <select id="selectBloodBank" name="selectBloodBank">
                    <!-- Populate blood bank options dynamically using AJAX (explained in the previous response) -->
                </select>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea cols="6" rows="8" id="address" name="address" required></textarea>
            </div>
            <button type="submit" name="action" value="submit">Submit</button>
        </form>
    </div>

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

    <script>
      const hospitalField = document.getElementById("hospitalField");
    const bloodBankField = document.getElementById("bloodBankField");
    const selectHospital = document.getElementById("selectHospital");
    const selectBloodBank = document.getElementById("selectBloodBank");
        document.querySelectorAll('input[type=radio][name="donationPlace"]').forEach(radio => {
            radio.addEventListener("change", function () {
                if (this.value === "hospital") {
                    hospitalField.style.display = "block";
                    bloodBankField.style.display = "none";
                    fetchHospitalOptions(); // Fetch hospital names using AJAX
                } else if (this.value === "bloodBank") {
                    bloodBankField.style.display = "block";
                    hospitalField.style.display = "none";
                    fetchBloodBankOptions(); // Fetch blood bank names using AJAX
                } else {
                    hospitalField.style.display = "none";
                    bloodBankField.style.display = "none";
                }
            });
        });
        function fetchHospitalOptions() {
      // AJAX request to fetch hospital names from PHP backend
      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            const hospitals = JSON.parse(xhr.responseText);
            populateOptions(selectHospital, hospitals);
          } else {
            console.error("Failed to fetch hospital data.");
          }
        }
      };
      xhr.open("GET", "get_hospitals.php", true);
      xhr.send();
    }

    function fetchBloodBankOptions() {
      // AJAX request to fetch blood bank names from PHP backend
      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            const bloodBanks = JSON.parse(xhr.responseText);
            populateOptions(selectBloodBank, bloodBanks);
          } else {
            console.error("Failed to fetch blood bank data.");
          }
        }
      };
      xhr.open("GET", "get_blood_banks.php", true);
      xhr.send();
    }

    function populateOptions(selectElement, optionsData) {
      selectElement.innerHTML = ""; // Clear existing options
      optionsData.forEach(optionValue => {
        const option = document.createElement("option");
        option.value = optionValue;
        option.text = optionValue;
        selectElement.appendChild(option);
      });
    }

    // Function to fetch and populate the address based on selected option
    function fetchAddressFromDatabase(selectedOption) {
      // AJAX request to fetch address from PHP backend
      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            const address = xhr.responseText;
            populateAddressField(address);
          } else {
            console.error("Failed to fetch address from the database.");
          }
        }
      };

      // Determine whether it's a hospital or blood bank and make the respective request
      if (document.querySelector('input[name="donationPlace"]:checked').value === "hospital") {
        xhr.open("GET", "get_hospital_address.php?hospital=" + encodeURIComponent(selectedOption), true);
      } else if (document.querySelector('input[name="donationPlace"]:checked').value === "bloodBank") {
        xhr.open("GET", "get_blood_bank_address.php?bloodBank=" + encodeURIComponent(selectedOption), true);
      }

      xhr.send();
    }
    function populateAddressField(address) {
      const addressField = document.getElementById("address");
      addressField.value = address;
      addressField.setAttribute("readonly", true);
    }

    // Add event listeners to select elements
    selectHospital.addEventListener("change", function() {
      fetchAddressFromDatabase(this.value);
    });

    selectBloodBank.addEventListener("change", function() {
      fetchAddressFromDatabase(this.value);
    });
    </script>
</body>

</html>
