<?php include('admin_header.php'); ?>



<ul class="breadcrumb">
    <li><a href="adminDashboard">Home</a></li>

</ul>

<!--Customer Options-->

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Customer</h3>
        </div>
        <div class="panel-body">
            <div class="btn-group-justified">
                <a href="ViewCustomer" class="btn btn-default btn-lg">View</a>
                <a href="viewCustomerPO" class="btn btn-default btn-lg">View PO</a>
                <a href="viewCustomerReciept" class="btn btn-default btn-lg">View Reciepts</a>
                <a href="viewCustomerPayment" class="btn btn-default btn-lg">View Payments</a>
            </div>
        </div>
    </div>
</div>



<!--Vendor Options-->

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Vendor</h3>
        </div>
        <div class="panel-body">
            <div class="btn-group-justified btn-group">
                <a href="ViewVendor" class="btn btn-default btn-lg">View and Approve</a>
                <a href="viewVendorPO" class="btn btn-default btn-lg">View PO</a>
                <a href="viewVendorReciept" class="btn btn-default btn-lg">View Reciept</a>
                <a href="viewVendorPayment" class="btn btn-default btn-lg">View Payment</a>

            </div>
        </div>
    </div>
</div>




<?php include('admin_footer.php'); ?>
