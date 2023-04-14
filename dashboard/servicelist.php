<?php
include('inc/header.php');
session_start();
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
                        <h1 class="m-0">Services</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
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
                        <div class="card">

                            <?php
                            if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                                echo '<h5 class="bg-primary text-white">' . $_SESSION['success'] . '</h5>';
                                unset($_SESSION['success']);
                            }

                            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                                echo '<h4 class="bg-danger text-white">' . $_SESSION['status'] . '</h4>';
                                unset($_SESSION['status']);
                            }
                            ?>
                            <div class="col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">List of Services</h3>
                                    <div class="card-tools">
                                        <a href="services.php" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Add Entry</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $connection = mysqli_connect("localhost", "root", "", "mobile_db");
                                    $query = "SELECT * FROM service ";
                                    $query_run = mysqli_query($connection, $query);
                                    ?>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Service Name</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['service_name']; ?></td>
                                                        <td><?php echo $row['amount']; ?>.00</td>
                                                        <td class="text-center">
                                                            <?php
                                                            switch ($row['status']) {
                                                                case 0:
                                                                    echo '<span class="rounded-pill badge badge-success">Active</span>';
                                                                    break;
                                                                case 1:
                                                                    echo '<span class="rounded-pill badge badge-info">Deactive</span>';
                                                                    break;
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <form action="view_service.php" method="post">
                                                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="edit_btn" class="btn btn-warning btn-sm rounded-pill"> EDIT</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="code.php" method="post">
                                                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn btn-danger btn-sm rounded-pill"> DELETE</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            <?php

                                                }
                                            } else {
                                                echo "No Records Found";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

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