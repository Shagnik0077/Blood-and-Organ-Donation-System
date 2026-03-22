  <!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <style>
    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .container h1 {
      text-align: center;
    }

    .container label {
      display: block;
      margin-bottom: 5px;
    }

    .container input[type="text"],
    .container input[type="email"],
    .container input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    .container input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .message {
      text-align: center;
      margin-top: 20px;
      padding: 10px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .message p {
      margin-bottom: 10px;
    }

    .message a {
      text-decoration: none;
      color: #4CAF50;
    }
  </style>
  <script>
    function validateform() {
      var name = document.form1.txtname.value;
      var password = document.form1.txtpassword.value;

      if (name == null || name === "") {
        alert("Name can't be blank");
        return false;
      } else if (password.length !== 8) {
        alert("Password should be 8 characters long");
        return false;
      }
    }
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <div class="container">
    <h1>New Registration</h1>
    <form method="post" name="form1" onsubmit="return validateform()">
      <label>Name</label>
      <input type="text" name="txtname" id="txtname" placeholder="Enter your name">

      <label>E-mail</label>
      <input type="email" name="txtemail" id="txtemail" required placeholder="Enter your e-mail">

      <label>Password</label>
      <input type="password" name="txtpassword" id="txtpassword" placeholder="Enter your password">

      <label>What is your pet name?</label>
      <input type="text" name="txtpetname" id="txtpetname" placeholder="This is a security question" required>

      <input type="submit" value="Register">
      <a href="login.php">Already have an Account?Login </a>
    </form>

    <?php
    include('connectdb.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST['txtname']) ? mysqli_real_escape_string($DB_CONNECT, $_POST['txtname']) : '';
        $email = isset($_POST['txtemail']) ? mysqli_real_escape_string($DB_CONNECT, $_POST['txtemail']) : '';
        $password = isset($_POST['txtpassword']) ? mysqli_real_escape_string($DB_CONNECT, $_POST['txtpassword']) : '';
        $petname = isset($_POST['txtpetname']) ? mysqli_real_escape_string($DB_CONNECT, $_POST['txtpetname']) : '';
        $status = "NotApproved"; // Hard-coded for now

        $stmt = $DB_CONNECT->prepare("SELECT * FROM t_registration_details WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<div class='message'>You are already registered. Please try logging in instead.<br><a href='login.php'>Login</a></div>";
        } else {
            $insertQuery = $DB_CONNECT->prepare("INSERT INTO t_registration_details (Name, Email, Password, PetName, status) VALUES (?, ?, ?, ?, ?)");
            $insertQuery->bind_param("sssss", $name, $email, $password, $petname, $status);

            if ($insertQuery->execute()) {
                echo "<div class='message'>Registration successful!</div>";
            } else {
                echo "<div class='message'>Registration failed. Please try again.</div>";
            }
            $insertQuery->close();
        }

        $stmt->close();
    }

    $DB_CONNECT->close();
    ?>

  </div>
</body>
</html>
