<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

    <?php
    session_start();
    require("connect.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dept = $_POST['dept'];
    $yr = $_POST['yr'];
    $rlgn = $_POST['rlgn'];
    $ctgry = $_POST['ctgry'];
    $adno = $_POST['adno'];
    $unireg = $_POST['unireg'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $bldgrp = $_POST['bldgrp'];
    $hname = $_POST['hname'];
    $ph = $_POST['ph'];
    $mail = $_POST['mail'];
    $aadhar = $_POST['aadhar'];
    $pswrd = $_POST['pswrd'];
    $sql = "insert into login(email_id,password,user_type)values('$mail','$pswrd',1)";
    $sql1 = "insert into registration(first_name,last_name,department,year,religion,category,admission_no,university_reg,dob,age,blood_group,house_name,phone,email,aadhar,password)values('$fname','$lname','$dept',$yr,'$rlgn','$ctgry',$adno,$unireg,$dob,$age,'$bldgrp','$hname',$ph,'$mail',$aadhar,'$pswrd')";
   echo $sql;
   echo $sql1;
    if (insert_data($sql) && insert_data($sql1)) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Student Added Successfully',
                didClose: () => {
                    window.location.replace('../index.html');
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
                    window.location.replace('../student.php');
                }
            });
        </script>



    <?php
    }

    ?>
</body>

</html>