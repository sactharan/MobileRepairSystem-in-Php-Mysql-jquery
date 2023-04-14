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
                                        <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail1">Repair ID</label>
                                                    <input type="text" name="edit_id" value="<?php echo $row['id'] ?>"class="form-control" id="" placeholder="Enter Customer Name" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Customer Name</label>
                                                    <input type="text" name="c_name" value="<?php echo $row['c_name'] ?>"  class="form-control" id="" placeholder="Enter Customer Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1">Address</label>
                                                    <input type="text" name="c_address" value="<?php echo $row['c_address'] ?>"  class="form-control" id="" placeholder="Enter Address" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1">PhoneNumber</label>
                                                    <input type="number" name="c_phone" value="<?php echo $row['c_phone'] ?>" class="form-control" id="" placeholder="Enter PhoneNumber" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Mobile Model</label>
                                                    <input type="text" name="mobile_model" value="<?php echo $row['mobile_model'] ?>" class="form-control" id="" placeholder="Enter Mobile Model" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1">Imei</label>
                                                    <input type="text" name="imei" value="<?php echo $row['imei'] ?>" value="<?php echo $row['id'] ?>" class="form-control" id="" placeholder="Enter Imei" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1">Accessories</label>
                                                    <input type="text" name="accessories" value="<?php echo $row['accessories'] ?>" class="form-control" id="" placeholder="Enter Accessories" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1">Issue</label>
                                                     <input type="text" name="issue" value="<?php echo $row['issue'] ?>" class="form-control" id=""  >
                                                    <!-- <textarea class="form-control" value="<?php echo $row['issue'] ?>" name="issue" id="exampleFormControlTextarea1" rows="3" ></textarea> -->
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="exampleInputEmail1">Service</label>
                                                    <input type="text" name="service" value="<?php echo $row['service'] ?>" class="form-control" id="" placeholder="Enter Service Name" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="exampleInputPassword1">Amount</label>
                                                    <input type="number" value="<?php echo $row['service_amount'] ?>" onblur="findTotal()" name="service_amount" class="form-control" id="service_amt" placeholder="Enter Amount" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="exampleInputPassword1">Parts</label>
                                                    <input type="text" value="<?php echo $row['parts'] ?>" name="parts" class="form-control" id="" placeholder="Enter Parts" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="exampleInputPassword1">Amount</label>
                                                    <input type="number" value="<?php echo $row['parts_amount'] ?>" onblur="findTotal()" name="parts_amount" class="form-control" id="parts_amt" placeholder="Enter Amount" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1">Total Cost</label>
                                                    <input type="number" value="<?php echo $row['total_cost'] ?>" class="form-control" name="total_cost" id="total_cost" value="0" >
                                                    <!-- <h3><b><span id="total_cost" class="pl-3">0.00</span></b></h3> -->
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1">Paid Amount</label>
                                                    <input type="number" value="<?php echo $row['amt_paid'] ?>" name="amt_paid" class="form-control" id="amt_paid" placeholder="Enter Amount Paid">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1">Pay Amount</label>
                                                    <input type="number"  name="new_amt_paid" class="form-control"  >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1">Total Payable Amount</label>
                                                    <input type="number" value="<?php echo $row['payable_amount'] ?>" class="form-control" id="payable_amount" name="payable_amount" value="0" >
                                                    <!-- <h3><b><span id="payable_amount" class="pl-3">0.00</span></b></h3> -->
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="select2"  class="form-control" name="payment" data-placeholder="" style="width: 100%;">
                                                        <option value="0" <?= isset($payment) && $payment == 0 ? "selected" : "" ?>>Paid</option>
                                                        <option value="1" <?= isset($payment) && $payment == 1 ? "selected" : "" ?>>UnPaid</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Status</label>
                                                    <select class="select2"  name="status" data-placeholder="" style="width: 100%;">
                                                        <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Progress</option>
                                                        <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Pending</option>
                                                        <option value="2" <?= isset($status) && $status == 2 ? "selected" : "" ?>>Checking</option>
                                                        <option value="3" <?= isset($status) && $status == 3 ? "selected" : "" ?>>Completed</option>
                                                        <option value="4" <?= isset($status) && $status == 4 ? "selected" : "" ?>>Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="repair_edit_btn" class="btn btn-primary">Update</button>
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