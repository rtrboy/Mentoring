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
    $yr = $_POST['year'];
    $rlgn = $_POST['religion'];
    $ctgry = $_POST['category'];
    $adno = $_POST['adno'];
    $unireg = $_POST['unireg'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $bldgrp = $_POST['blood_group'];
    $hname = $_POST['hname'];
    $ph = $_POST['phone'];
    $aadhar = $_POST['aadhar'];
    $email = $_SESSION['email'];
    
    $sql="UPDATE registration SET `first_name`='$fname',`last_name`='$lname',`department`='$dept',`year`='$yr',`religion`='$rlgn',`category`='$ctgry',`admission_no`='$adno',`university_reg`='$unireg',`dob`='$dob',`age`='$age',`blood_group`='$bldgrp',`house_name`='$hname',`phone`='$ph',`aadhar`='$aadhar' WHERE `email`='$email';";
if(update_data($sql)) { 
        ?>
        <script>
            Swal.fire({
                icon:'success',
                text: 'Updated Successfully',
                didClose: () => {
                    window.location.replace('../student/profile.php');
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
                    window.location.replace('../student/profile.php');
                }
            });
        </script>



    <?php
    }
    }
   ?>
</body>
</html>