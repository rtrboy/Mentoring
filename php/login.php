<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();
    require("./connect.php");
    if (isset($_POST['sub'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "select * from login where email_id='$email'";
        if (count_data($sql) != 0) {
            $res = select_data($sql);
            $row = mysqli_fetch_assoc($res);
            if ($password == $row['password']) {
                $_SESSION['email'] = $email;
                
                // user
                if ($row['user_type'] == 1) {
                    
                    
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back User!',
                            }).then((result) => {
                                window.location.replace('../student/index.php');
                            });
                        </script>
                    <?php
                    }
                
                // guide
                if ($row['user_type'] == 2) {
                    
                    
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back User!',
                            }).then((result) => {
                                window.location.replace('../teacher/index.php');
                            });
                        </script>
                    <?php
                    }
                // hotel
                else if ($row['user_type'] == 4) {
                    $sql = "select statusflag from hotel_registration where email='$email'";
                    $res = sel($sql);
                    $row = mysqli_fetch_assoc($res);
                    if ($row['statusflag'] == 0) {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'info',
                                title: 'Account under verification!',
                            }).then((result) => {
                                window.location.replace('../../index.html');
                            });
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back Hotel!',
                            }).then((result) => {
                                window.location.replace('../../hotel/index.php');
                            });
                        </script>
                    <?php
                    }
                }
                //admin
                else if ($row['user_type'] == 34) {
                    ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Welcome Back Admin!',
                        }).then((result) => {
                            window.location.replace('../../admin/index.php');
                        });
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Incorrect credentials',
                    }).then((result) => {
                        window.location.replace('../index.html');
                    });
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Account doesn\'t exsist!',
                }).then((result) => {
                    window.location.replace('../../index.html');
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>