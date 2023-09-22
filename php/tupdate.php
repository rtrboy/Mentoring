<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

<?php
require("connect.php");
session_start();
if(isset($_POST["submit"])){

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $dept = $_POST['department'];
    $ph = $_POST['phone'];
    $email = $_SESSION['email'];
    
    $sql="UPDATE teacher SET `first_name`='$fname',`last_name`='$lname',`department`='$dept',`phone`='$ph' WHERE `email_id`='$email';";
    
if(update_data($sql)) { 
        ?>
        <script>
            Swal.fire({
                icon:'success',
                text: 'Updated Successfully',
                didClose: () => {
                    window.location.replace('../teacher/profile.php');
                }
            });
        </script>
    <?php
    } else { ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'unsuccessfully',
                didClose: () => {
                    window.location.replace('../teacher/profile.php');
                }
            });
        </script>



    <?php
    }
    }
   ?>
</body>
</html>