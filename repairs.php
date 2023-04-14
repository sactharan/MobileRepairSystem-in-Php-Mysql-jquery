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
                                <h3 class="card-title">Add Repair</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="product.php" method="POST">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Customer Name</label>
                                            <input type="text" name="c_name" class="form-control" id="" placeholder="Enter Service Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" name="c_address" class="form-control" id="" placeholder="Enter Amount">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">PhoneNumber</label>
                                            <input type="number" name="c_phone" class="form-control" id="" placeholder="Enter Amount">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Service</label>
                                            <select class="select2" name="status" data-placeholder="" style="width: 100%;">
                                                <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Active</option>
                                                <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Deactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Amount</label>
                                            <input type="number" name="c_phone" class="form-control" id="" placeholder="Enter Amount">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Material</label>
                                            <select class="select2" name="status" data-placeholder="" style="width: 100%;">
                                                <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Active</option>
                                                <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Deactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Amount</label>
                                            <input type="number" name="c_phone" class="form-control" id="" placeholder="Enter Amount">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <button type="submit" name="product_btn" class="btn btn-primary">Add to List</button>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button type="submit" name="product_btn" class="btn btn-primary">Add to List</button>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <table class="table table-stripped table-bordered" data-placeholder='true' id="service_list">
                                                <colgroup>
                                                    <col width="10%">
                                                    <col width="65%">
                                                    <col width="25%">
                                                </colgroup>
                                                <thead>
                                                    <tr class='bg-gradient-dark text-light'>
                                                        <th class="text-center py-1"></th>
                                                        <th class="text-center py-1">Service</th>
                                                        <th class="text-center py-1">Fee</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <table class="table table-stripped table-bordered" data-placeholder='true' id="service_list">
                                                <colgroup>
                                                    <col width="10%">
                                                    <col width="65%">
                                                    <col width="25%">
                                                </colgroup>
                                                <thead>
                                                    <tr class='bg-gradient-dark text-light'>
                                                        <th class="text-center py-1"></th>
                                                        <th class="text-center py-1">Materials</th>
                                                        <th class="text-center py-1">Cost</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="hidden" name="total_amount" value="0">
                                            <h3><b>Total Payable Amount: <span id="total_amount" class="pl-3">0.00</span></b></h3>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="hidden" name="total_amount" value="0">
                                            <h3><b>Paid Amount: <span id="total_amount" class="pl-3">0.00</span></b></h3>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Payment</label>
                                            <select class="select2" name="payment" data-placeholder="" style="width: 100%;">
                                                <option value="0" <?= isset($payment) && $payment == 0 ? "selected" : "" ?>>Credit</option>
                                                <option value="1" <?= isset($payment) && $payment == 1 ? "selected" : "" ?>>UnPaid</option>
                                                <option value="2" <?= isset($payment) && $payment == 2 ? "selected" : "" ?>>AdvancePaid</option>
                                                <option value="3" <?= isset($payment) && $payment == 3 ? "selected" : "" ?>>Paid</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Status</label>
                                            <select class="select2" name="status" data-placeholder="" style="width: 100%;">
                                                <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Progress</option>
                                                <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Pending</option>
                                                <option value="2" <?= isset($status) && $status == 2 ? "selected" : "" ?>>Checking</option>
                                                <option value="3" <?= isset($status) && $status == 3 ? "selected" : "" ?>>Completed</option>
                                                <option value="4" <?= isset($status) && $status == 4 ? "selected" : "" ?>>Cancelled</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" name="product_btn" class="btn btn-primary">Proceed</button>
                                        <a href="repairlist.php" class="btn btn-danger btn-sm float-right "> Go Back</a>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
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