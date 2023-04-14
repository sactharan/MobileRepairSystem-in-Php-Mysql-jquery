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
                        <h1 class="m-0">Products</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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
                                <h3 class="card-title">Edit Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "mobile_db");
                                if (isset($_POST['edit_btn'])) {

                                    $id = $_POST['edit_id'];

                                    $query = "SELECT * FROM products WHERE id='$id' ";
                                    $query_run = mysqli_query($connection, $query);

                                    foreach ($query_run as $row) {
                                ?>
                                        <form action="product.php" method="POST">
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">Product ID</label>
                                                <input type="text" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control" id="" placeholder="Enter Service Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Product Name</label>
                                                <input type="text" name="p_name" value="<?php echo $row['p_name'] ?>" class="form-control" id="" placeholder="Enter Service Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Amount</label>
                                                <input type="number" name="unit_price" value="<?php echo $row['unit_price'] ?>" class="form-control" id="" placeholder="Enter Amount">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Quantity</label>
                                                <input type="number" name="qty" value="<?php echo $row['qty'] ?>" class="form-control" id="" placeholder="Enter Amount">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Manufacturer</label>
                                                <input type="text" name="manufacturer" value="<?php echo $row['manufacturer'] ?>" class="form-control" id="" placeholder="Enter Amount">
                                            </div>
                                            <div class="form-group">
                                                <label>Product Type</label>
                                                <select class="select2" name="p_type" value="<?php echo $row['p_type'] ?>" data-placeholder="" style="width: 100%;">
                                                    <option value="0" <?= isset($p_type) && $p_type == 0 ? "selected" : "" ?>>Toys</option>
                                                    <option value="1" <?= isset($p_type) && $p_type == 1 ? "selected" : "" ?>>MobileParts</option>
                                                    <option value="2" <?= isset($p_type) && $p_type == 2 ? "selected" : "" ?>>MobilePhones</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="select2" name="status" value="<?php echo $row['status'] ?>" data-placeholder="" style="width: 100%;">
                                                    <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Active</option>
                                                    <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Deactive</option>
                                                </select>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="product_edit_btn" class="btn btn-primary">Submit</button>
                                                <a href="servicelist.php" class="btn btn-danger btn-sm float-right "> Go Back</a>


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