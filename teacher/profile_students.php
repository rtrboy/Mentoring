<?php
session_start();
include("header.php");




   
   $username = $_GET['email'];
   $sql="select * from registration where email='$username'" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);
   

   ?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $arr['first_name'];?></h2>
              <h3><?php echo $arr['department'];?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Your Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title"></h5>
                  <p class="small fst-italic"></p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['first_name'].$arr['last_name'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['email'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['phone'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Department</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['department'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Year</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['year'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Admission No</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['admission_no'];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">University Register Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['university_reg'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">DOB</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['dob'];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Age</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['age'];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Blood Group</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['blood_group'];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">House Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['house_name'];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Aadhar No</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['aadhar'];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Category</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['category'];?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="../php/pupdate.php" method="post">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="FirstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="first_name" type="text" class="form-control" id="first_Name" value= <?php echo $arr['first_name']; ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="LastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="last_name" type="text" class="form-control" id="last_name" value= <?php echo $arr['last_name']; ?>>
                      </div>
                    </div>

                    <!--<div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>!-->

                    <div class="row mb-3">
                      <label for="year" class="col-md-4 col-lg-3 col-form-label">Year</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="year" type="text" class="form-control" id="year" value=<?php echo $arr['year']; ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="department" class="col-md-4 col-lg-3 col-form-label">Department</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="department" type="text" class="form-control" id="department" value=<?php echo $arr['department']; ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Religion" class="col-md-4 col-lg-3 col-form-label">Religion</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="religion" type="text" class="form-control" id="religion" value=<?php echo $arr['religion']; ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="category" class="col-md-4 col-lg-3 col-form-label">Category</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="category" type="text" class="form-control" id="category" value=<?php echo $arr['category']; ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="dob" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dob" type="text" class="form-control" id="dob" value=<?php echo $arr['dob']; ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Ad_no" class="col-md-4 col-lg-3 col-form-label">Admission No</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="adno" type="text" class="form-control" id="adno" value=<?php echo $arr['admission_no']; ?>>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="unireg" class="col-md-4 col-lg-3 col-form-label">University Register Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input readonly name="unireg" type="text" class="form-control" id="unireg" value=<?php echo $arr['university_reg']; ?>>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="age" class="col-md-4 col-lg-3 col-form-label">Age</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="age" type="text" class="form-control" id="age" value=<?php echo $arr['age']; ?>>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="blood_group" class="col-md-4 col-lg-3 col-form-label">Blood Group</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="blood_group" type="text" class="form-control" id="blood_group" value=<?php echo $arr['blood_group']; ?>>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="address" class="col-md-4 col-lg-3 col-form-label">House Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="hname" type="text" class="form-control" id="address" value=<?php echo $arr['house_name']; ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value=<?php echo $arr['phone']; ?> >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input readonly name="email" type="email" class="form-control" id="Email" value=<?php echo $arr['email']; ?>>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="blood_group" class="col-md-4 col-lg-3 col-form-label">Aadhar Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="aadhar" type="number" class="form-control" id="aadhar" value=<?php echo $arr['aadhar']; ?>>
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div>

                    <div class="text-center">
                      <button name="submit" type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="../php/passwordupdate.php" method="post">
                  <div class="row mb-3">
    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
    <div class="col-md-8 col-lg-9">
        <div class="input-group">
            <input name="cpass" type="password" class="form-control" id="currentPassword">
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                <i class="bi bi-eye"></i>
            </button>
        </div>
    </div>
</div>

<script>
    const passwordInput = document.getElementById("currentPassword");
    const togglePasswordButton = document.getElementById("togglePassword");

    togglePasswordButton.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
</script>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="npass" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="cnpass" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
<?php
include 'footer.html'
?>