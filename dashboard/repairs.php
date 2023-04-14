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
                            <form action="repair.php" method="POST">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Customer Name</label>
                                            <input type="text" name="c_name" class="form-control" id="" placeholder="Enter Customer Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" name="c_address" class="form-control" id="" placeholder="Enter Address">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">PhoneNumber</label>
                                            <input type="number" name="c_phone" class="form-control" id="" placeholder="Enter PhoneNumber">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Mobile Model</label>
                                            <input type="text" name="mobile_model" class="form-control" id="" placeholder="Enter Mobile Model">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Imei</label>
                                            <input type="text" name="imei" class="form-control" id="" placeholder="Enter Imei">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Accessories</label>
                                            <input type="text" name="accessories" class="form-control" id="" placeholder="Enter Accessories">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Issue</label>
                                            <textarea class="form-control" name="issue" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <!-- <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Service</label>
                                            <input type="text" name="service" class="form-control" id="" placeholder="Enter Service Name"> -->

                                        <!-- <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Amount</label>
                                            <input type="number" name="service_amount" class="form-control" id="service_amt" placeholder="Enter Amount">
                                        </div> -->
                                        <div class="form-group col-md-6">
                                            <table class="table table-bordered">
                                                <thead class="table-success">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Service</th>
                                                        <th scope="col" class="text-end">Quantity</th>
                                                        <th scope="col" class="text-end">UnitPrice</th>
                                                        <th scope="col" class="text-end">Amount</th>
                                                        <th scope="col" class="NoPrint">
                                                            <button type="button" class="btn btn-sm btn-success" onclick="BtnservAdd()">+</button>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody id="TBody">
                                                    <tr id="TRow" class="d-none">
                                                        <th scope="row">1</th>
                                                        <td><input type="text" name="service_name" class="form-control"></td>
                                                        <td><input type="number" class="form-control text-end" name="serv_qty" value="1" onchange="ServCalc(this);"></td>
                                                        <td><input type="number" class="form-control text-end" name="serv_unit_price" value="" onchange="ServCalc(this);"></td>
                                                        <td><input type="number" class="form-control text-end" name="service_amount" value="" disabled=""></td>
                                                        <td class="NoPrint"><button type="button" class="btn btn-sm btn-danger" onclick="BtnservDel(this)">X</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <table class="table table-bordered">
                                                <thead class="table-success">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th width="38%" scope="col">Parts</th>
                                                        <th scope="col" class="text-end">Quantity</th>
                                                        <th scope="col" class="text-end">UnitPrice</th>
                                                        <th width="30%"scope="col" class="text-end">Amount</th>
                                                        <th scope="col" class="NoPrint">
                                                            <button type="button" class="btn btn-sm btn-success" onclick="BtnAdd()">+</button>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody id="TBody_1">
                                                    <tr id="TRow_1" class="d-none_1">
                                                        <th scope="row">1</th>
                                                        <td><input type="text" name="service_name" class="form-control"></td>
                                                        <td><input type="number" class="form-control text-end" name="parts_qty" value="" onchange="Calc(this);"></td>
                                                        <td><input type="number" class="form-control text-end" name="parts_amount" value="" onchange="Calc(this);"></td>
                                                        <td><input type="number" class="form-control text-end" name="part_amount" value="" disabled=""></td>
                                                        <td class="NoPrint"><button type="button" class="btn btn-sm btn-danger" onclick="BtnDel(this)">X</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Service</label>
                                            <input type="text" name="service" class="form-control" id="" placeholder="Enter Service Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Amount</label>
                                            <input type="number" onblur="findTotal()" name="service_amount" class="form-control" id="service_amt" placeholder="Enter Amount">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Parts</label>
                                            <input type="text" name="parts" class="form-control" id="" placeholder="Enter Parts">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Amount</label>
                                            <input type="number" onblur="findTotal()" name="parts_amount" class="form-control" id="parts_amt" placeholder="Enter Amount">
                                        </div>
                                    </div> -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Total Service Cost</label>
                                            <input type="number" class="form-control"  name="total_service_cost" id="total_service_cost" onchange="GetTotalService()"  >
                                            <!-- <h3><b><span id="total_cost" class="pl-3">0.00</span></b></h3> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Total Parts Cost</label>
                                            <input type="number" name="total_parts_cost"  class="form-control" id="total_parts_cost" onchange="GetTotalParts()"  >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Total Amount</label>
                                            <input type="number" class="form-control" name="total_cost" onchange="GetTotal()" id="total_cost">
                                            <!-- <h3><b><span id="total_cost" class="pl-3">0.00</span></b></h3> -->
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Amount Paid</label>
                                            <input type="number" name="amt_paid" class="form-control" id="amt_paid" onchange="GetGrandTotal()" placeholder="Enter Amount Paid">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Due Balance</label>
                                            <input type="number" class="form-control" id="payable_amount" name="payable_amount" value="0" disabled>
                                        </div>
                                    </div>
                                    <!-- <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Due Balance</label>
                                            <input type="number" class="form-control" id="payable_amount" name="payable_amount" value="0" disabled>
                                             <h3><b><span id="payable_amount" class="pl-3">0.00</span></b></h3>
                                        </div>
                                    </div> -->

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="select2" name="payment" data-placeholder="" style="width: 100%;">
                                                <option value="0" <?= isset($payment) && $payment == 0 ? "selected" : "" ?>>Paid</option>
                                                <option value="1" <?= isset($payment) && $payment == 1 ? "selected" : "" ?>>UnPaid</option>
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
                                        <button type="submit" name="repair_btn" class="btn btn-primary">Proceed</button>
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

    <script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#total_service_cost, #total_service_cost").keyup(function(){

    	var total=0;    	
    	var x = Number($("#total_service_cost").val());
    	var y = Number($("#total_parts_cost").val());
    	var total=x + y;  

    	$('#total_cost').val(total);

    });
});
</script> 
    
    <!-- <script>
        $(document).ready(function() {
            // Get value on keyup funtion
            $("#total_service_cost, #total_parts_cost").keyup(function() {

                var total = 0;
                var x = Number($("#total_service_cost").val());
                var y = Number($("#total_parts_cost").val());
                var total = x + y;

                $('#total_cost').val(total);

            });
        });
    </script>  -->

    <!-- <script>
        $(document).ready(function() {
            // Get value on keyup funtion
            $("#total_cost, #amt_paid").keyup(function() {

                var total = 0;
                var x = Number($("#total_cost").val());
                var y = Number($("#amt_paid").val());
                var total = x - y;

                $('#payable_amount').val(total);

            });
        });
    </script>    -->


    <?php
    include('inc/footer.php')
    ?>