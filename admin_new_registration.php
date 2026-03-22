<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" />

<script>

var a;
function show()
{
	if(a==0)
	{
		document.getElementById("New_Registrations").style.display="inline";
		return a=1 ;
	}
	else
	{
		document.getElementById("New_Registrations").style.display="none";
		return a=0 ;
	}
}



</script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
	font-size: 14px;
}

:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;

	--light: #F9F9F9;
	--blue: #3C91E6;
	--light-blue: #CFE8FF;
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background-color:#FFC;
	overflow-x: hidden;
}





/* SIDEBAR */
#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	width: 280px;
	height: 100%;
	
	z-index: 2000;
	background-color:#FFFFFF;
	transition: .3s ease;
	overflow-x: hidden;
	scrollbar-width: none;
}
#sidebar::--webkit-scrollbar {
	display: none;
}
#sidebar.hide {
	width: 60px;
}
#sidebar .brand {
	font-size: 24px;
	font-weight: 700;
	height: 56px;
	display: flex;
	align-items: center;

	position: sticky;
	top: 0;
	left: 0;
	
	z-index: 500;
	padding-bottom: 20px;
	box-sizing: content-box;
}
#sidebar .brand .bx {
	min-width: 60px;
	display: flex;
	justify-content: center;
}
#sidebar .side-menu {
	width: 100%;
	margin-top: 48px;
}
#sidebar .side-menu li {
	height: 48px;
	background: transparent;
	margin-left: 6px;
	border-radius: 48px 0 0 48px;
	padding: 4px;
}
#sidebar .side-menu li.active {
	background: var(--grey);
	position: relative;
}
#sidebar .side-menu li.active::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li.active::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	
	z-index: -1;
}
#sidebar .side-menu li a {
	width: 100%;
	height: 100%;
	
	display: flex;
	align-items: center;
	border-radius: 48px;
	font-size: 16px;
	
	white-space: nowrap;
	overflow-x: hidden;
}
#sidebar .side-menu.top li.active a {
	color: var(--blue);
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu li a.logout {
	color: var(--red);
}
#sidebar .side-menu.top li a:hover {
	color: var(--blue);
}
#sidebar .side-menu li a .bx {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
}

.admin_hospital_details{
	margin-left:80px;
	margin-top:60px;
}



</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Side</title>
</head>

<body>
	<div align="left">
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Welcome Admin !</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Menu</span>
				</a>
			</li>
            <li>
				
				<a  href="admin hospital details.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Hospital Details</span>
				</a>
			</li>
			<li>
				<a href="admin blood bank details.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Blood Bank Details</span>
				</a>
			</li>
             <li>
				<a href="admin new registration.php">
					<i class='bx bxs-group' ></i>
					<span class="text">New Registration</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Doner Request</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Recipient Request</span>
				</a>
			</li>
            
            <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">History</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
        	<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Delete My Account</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
    </div>
    
	<section>
    <div class="admin_hospital_details">
    	<div align="center" class="admin_home_center_heading">
    		<h1>New Registrations</h1>
    	</div>
    	<div align="center" style="padding-top:40px;">
        	
        	<a href="#" onclick="show()">New Registrations</a>
            <br />
            <table id="New_Registrations" border="1" cellpadding="2000" cellspacing="10">
            	<tr>
                	<td>ID</td>
                    <td>Name</td>
					<td>Age</td>
					<td>Gender</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Petname</td>
					<td>Address</td>
                    <td>Status</td>
					<td>Action</td>
                </tr>
				<?php
				include('connectdb.php');
				$query = "SELECT * FROM t_admin_information_table WHERE Status = 'NotApproved' ORDER BY id ASC ";
				$result = mysqli_query($DB_CONNECT, $query);
				while ($row = mysqli_fetch_array($result))
				{
					echo '<tr>';
        			echo '<td>' . $row['id'] . '</td>';
        			echo '<td>' . $row['name'] . '</td>';
					echo '<td>' . $row['age'] . '</td>';
					echo '<td>' . $row['gender'] . '</td>';
        			echo '<td>' . $row['email'] . '</td>';
					echo '<td>' . $row['password'] . '</td>';
					echo '<td>' . $row['petname'] . '</td>';
					echo '<td>' . $row['address'] . '</td>';
					echo '<td>' . $row['status'] . '</td>';
        			echo '<td>';
					echo '<form action="admin_new_registration.php" method="post">';
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
    </div>
    </section>
</body>
</html>
<?php
include('connectdb.php');

if (isset($_POST['approve']))
{
  $id = $_POST['id'];
  $updatequery = "UPDATE t_admin_information_table SET status = 'Approved' WHERE  id= '$id'";
  $result = mysqli_query($DB_CONNECT, $updatequery);

}
else if (isset($_POST['delete']))
{
  $id = $_POST['id'];
  $select = "DELETE FROM t_admin_information_table WHERE id = '$id'";
  $result = mysqli_query($DB_CONNECT, $select);

  if ($result) {
    echo "Recipient with ID $id has been deleted.";
    header("location:admin_organ_recipent_request.php");
  } else {
    echo "Error deleting recipient: " . mysqli_error($DB_CONNECT);
  }
  mysqli_close($DB_CONNECT);
  exit();
}
?>
