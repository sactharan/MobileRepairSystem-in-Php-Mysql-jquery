<?php
include('inc/header.php')
?>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <?php
  include('inc/navbar.php')
  ?>
  <?php
  include('inc/sidebar.php')
  ?>

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php
                    require('../config/config.php');
                    $query = "SELECT * from products";

                    if ($result = mysqli_query($connection, $query)) {

                      // Return the number of rows in result set
                      $rowcount = mysqli_num_rows($result);

                      // Display result
                      printf($rowcount);
                    }
                    ?></h3>

                <p>Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php
                    require('../config/config.php');
                    $query = "SELECT * from repairs";

                    if ($result = mysqli_query($connection, $query)) {

                      // Return the number of rows in result set
                      $rowcount = mysqli_num_rows($result);

                      // Display result
                      printf($rowcount);
                    }
                    ?></h3>

                <p>Total Repairs</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> <?php
                      require('../config/config.php');

                      $query = "SELECT sum(total_cost) as total FROM repairs";

                      $query_run = mysqli_query($connection, $query);

                      while ($row = mysqli_fetch_assoc($query_run)) {
                        echo $row['total'];
                        echo '.00';
                      }

                      mysqli_close($connection);
                      ?></h3>

                <p>Total Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3> <?php
                      require('../config/config.php');

                      $query = "SELECT sum(amt_paid) as total FROM repairs";

                      $query_run = mysqli_query($connection, $query);

                      while ($row = mysqli_fetch_assoc($query_run)) {
                        echo $row['total'];
                        echo '.00';
                      }

                      mysqli_close($connection);
                      ?></h3>

                <p>Amount Recieved </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>



        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> <?php
                      require('../config/config.php');

                      $query = "SELECT sum(payable_amount) as total FROM repairs";

                      $query_run = mysqli_query($connection, $query);

                      while ($row = mysqli_fetch_assoc($query_run)) {
                        echo $row['total'];
                        echo '.00';
                      }

                      mysqli_close($connection);
                      ?></h3>

                <p>Due Balance</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><?php
                    require('../config/config.php');
                    $query = "SELECT * from repairs where status='3'";

                    if ($result = mysqli_query($connection, $query)) {

                      // Return the number of rows in result set
                      $rowcount = mysqli_num_rows($result);

                      // Display result
                      printf($rowcount);
                    }
                    ?></h3>

                <p>Completed Repairs</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php
                    require('../config/config.php');
                    $query = "SELECT * from repairs where status='1'";

                    if ($result = mysqli_query($connection, $query)) {

                      // Return the number of rows in result set
                      $rowcount = mysqli_num_rows($result);

                      // Display result
                      printf($rowcount);
                    }
                    ?></h3>

                <p>Pending Repairs</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3><?php
                    require('../config/config.php');
                    $query = "SELECT * from repairs where status='0'";

                    if ($result = mysqli_query($connection, $query)) {

                      // Return the number of rows in result set
                      $rowcount = mysqli_num_rows($result);

                      // Display result
                      printf($rowcount);
                    }
                    ?></h3>

                <p>Progressing Repairs </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php
  include('inc/footer.php')
  ?>