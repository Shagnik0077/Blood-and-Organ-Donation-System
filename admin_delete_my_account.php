<!DOCTYPE HTML>
<html>
<?php 
    include 'connectdb.php';

    // Check if the user has confirmed the deletion
    if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] == 'yes') {
        // Execute the PHP code to delete the account
        $select = "UPDATE t_admin_information_table SET STATUS = 'Deleted'";
        $result = mysqli_query($DB_CONNECT, $select);
        header("location: home1.php");
        exit; // Terminate further script execution
    }
?>
<head>
<meta charset="utf-8">
<title>Delete My Account</title>
</head>
<body>

<script type="text/javascript">
    // Use the confirm dialog to ask for user confirmation
    var confirmed = confirm("Are you sure you want to delete your account permanently?");
    
    if (confirmed) {
        // If the user confirms, submit a form to trigger the PHP code
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = ''; // Replace with the URL of your PHP script

        // Add a hidden input to confirm the deletion
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'confirm_delete';
        input.value = 'yes';

        form.appendChild(input);
        document.body.appendChild(form);

        form.submit();
    } else {
        // If the user cancels, you can redirect them to a different page or take appropriate action
        window.location.href = "admin_dashboard.php"; // Replace with the desired URL
    }
</script>

</body>
</html>
