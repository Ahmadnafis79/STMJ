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
                <a href="https://docs.google.com/spreadsheets/d/1SsYiH65S_1uWphrQEGPiL58udVpL0Py47zhaAa405Kw/edit?usp=sharing" class="list-group-item list-group-item-action">Behavior</a>
                <a href="https://docs.google.com/spreadsheets/d/1BIi8Ip1YjWT1NIwE6F_ij0NIpbde01O97Ydr6ukWaQU/edit?usp=sharing" class="list-group-item list-group-item-action">Safety</a>
                <a href="https://docs.google.com/spreadsheets/d/1uAvzFjjR-vfNs7p9mAFKS5ZWkCK-8hcgZMRdniipbXg/edit?usp=sharing" class="list-group-item list-group-item-action">Product Knowledge</a>
                <a href="https://docs.google.com/spreadsheets/d/1wMsCUKfcfkHMi9KKEMVrffu6caDp-zwlknN31GjwHpQ/edit?usp=sharing" class="list-group-item list-group-item-action">Tools</a>
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

    <div class="col-12">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-header">
        Grafik
      </div>
      <div class="card-body">
        <div id="chart1">
          <canvas id="myAreaChart" width="400" height="200"></canvas>
          sdsdsdsdd
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
<!-- <div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-header">
        <div class="card-body">
          <div id="chart1">
          <canvas id="myAreaChart" width="400" height="200"></canvas>
          </div>

        </div>
      </div>
    </div>
  </div>

</div> -->

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


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Basic Area Chart</title>
</head>
<body>

    <script>

      
var options = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        }, {
          name: 'series2',
          data: [11, 32, 45, 32, 34, 52, 41]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();
      
      
    
    </script>
</body>
