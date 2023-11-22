<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>

<div class="row">


  <?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  if ($_SESSION['level'] === 'UT') {
    echo '
  
    ';
  }
  ?>

<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  if ($_SESSION['level'] === 'UTSchool') {
    echo '
 
    <div class="col-xl-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Behaviiiiiiiiior</a>
                <a href="#" class="list-group-item list-group-item-action">Safety</a>
                <a href="#" class="list-group-item list-group-item-action">Product Knowledge</a>
                <a href="#" class="list-group-item list-group-item-action">Tools</a>
                <a href="#" class="list-group-item list-group-item-action">Basic Mechine Element</a>
                <a href="#" class="list-group-item list-group-item-action">Diesel Engine</a>
                <a href="#" class="list-group-item list-group-item-action">Hydraulic System</a>
                <a href="#" class="list-group-item list-group-item-action">Electrical System</a>
                <a href="#" class="list-group-item list-group-item-action">Direct Drive System</a>
                <a href="#" class="list-group-item list-group-item-action">Torqflow Drive System</a>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Steering & Brake System</a>
                <a href="#" class="list-group-item list-group-item-action">Steering Wheel System</a>
                <a href="#" class="list-group-item list-group-item-action">Brake System Wheel</a>
                <a href="#" class="list-group-item list-group-item-action">Dinal Drive & Undercariage</a>
                <a href="#" class="list-group-item list-group-item-action">Axle, Wheel, Suspension</a>
                <a href="#" class="list-group-item list-group-item-action">Basic Remove Install</a>
                <a href="#" class="list-group-item list-group-item-action">Basic Troubleshooting</a>
                <a href="#" class="list-group-item list-group-item-action">Basic Maintenance</a>
                <a href="#" class="list-group-item list-group-item-action">Partboot Reading</a>
              </div>
          </div>
        </div>
      </div>
    </div>
    
    ';
  }
  ?>

<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  if ($_SESSION['level'] === 'Customer') {
    echo '
    <div class="col-xl-4 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
              DOSEN
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              0
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
    ';
  }
  ?>

  <!-- <div class="col-xl-4 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
              USER
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              include '../connection.php';
              $count = "SELECT * from user";

              if ($result = mysqli_query($con, $count)) {
                $rowcount = mysqli_num_rows($result);
                echo $rowcount;
              }
              ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-user fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
