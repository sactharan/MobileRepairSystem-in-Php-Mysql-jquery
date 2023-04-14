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
                        <h1 class="m-0">Repairs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Repairs</li>
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
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Repair</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "mobile_db");
                                if (isset($_POST['edit_btn'])) {

                                    $id = $_POST['edit_id'];

                                    $query = "SELECT * FROM repairs WHERE id='$id' ";
                                    $query_run = mysqli_query($connection, $query);

                                    foreach ($query_run as $row) {
                                ?>
                                        <form action="repair.php" method="POST">
                                            <div class="row">
                                                <label for="exampleInputEmail1">Repair ID-<?php echo $row['id'] ?></label>
                                                <label for="exampleInputEmail1">Customer Name-<?php echo $row['c_name'] ?></label>                   
                                                <label for="exampleInputPassword1">Address-<?php echo $row['c_address'] ?></label>
                                                <label for="exampleInputPassword1">PhoneNumber-<?php echo $row['c_phone'] ?></label>
                                                <label for="exampleInputEmail1">Mobile Model-<?php echo $row['mobile_model'] ?></label>
                                                <label for="exampleInputPassword1">Imei-<?php echo $row['id'] ?></label>
                                                <label for="exampleInputPassword1">Accessories-<?php echo $row['accessories'] ?></label>
                                                <label for="exampleInputPassword1">Issue-<?php echo $row['issue'] ?></label>
                                                <label for="exampleInputEmail1">Service-<?php echo $row['service'] ?></label>
                                                <label for="exampleInputPassword1">Amount-<?php echo $row['service_amount'] ?></label>
                                                <label for="exampleInputPassword1">Parts-<?php echo $row['parts'] ?></label>
                                                <label for="exampleInputPassword1">Amount-<?php echo $row['parts_amount'] ?></label>
                                                <label for="exampleInputPassword1">Total Cost-<?php echo $row['total_cost'] ?></label>
                                                <label for="exampleInputPassword1">Amount Paid-<?php echo $row['amt_paid'] ?></label>
                                                <label for="exampleInputPassword1">Total Payable Amount-<?php echo $row['payable_amount'] ?></label>
                                                <label for="exampleInputPassword1">Payment-<?php echo $row['payment'] ?></label>
                                                <label for="exampleInputPassword1">Status-<?php echo $row['status'] ?></label>
                                            </div>
                                            <div class="card-footer">
                                                <a href="repairlist.php" class="btn btn-danger btn-sm float-right "> Go Back</a>
                                            </div>

                                        </form>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                        <!-- /.row -->
                        <!-- Main row -->
                    </div>
                </div>
                <!-- /.card -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <?php
    include('inc/footer.php')
    ?>