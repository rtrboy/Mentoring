<?php


include 'header.php';

?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Students List</h5>
         

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Admission No</th>
                <th scope="col">University reg no</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              $sql="select * from registration";
              $res=select_data($sql);
              while($row=mysqli_fetch_assoc($res)){
                $i=$i+1;
                ?>
              
              <tr>
                <th scope="row"><?php echo $i;?></th>
                <td><?php echo($row['first_name']." ".$row['last_name']);?></td>
                <td><?php echo($row['department']);?></td>
                <td><?php echo($row['admission_no']);?></td>
                <td><?php echo($row['university_reg']);?></td>
                <td><?php echo($row['phone']);?></td>
                <td><?php echo($row['email']);?></td>
                <td><a href="profile_students.php?email=<?php echo $row['email'];?>">View</td>
              </tr>
             <?php
              }
             ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<?php 

include 'footer.html';

?>