<?php include('user_header.php'); ?>



<ul class="breadcrumb">
    <li><a href="userDashboard">Home</a></li>

</ul>

<!--Customer Options-->

<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Customer</h3>
    </div>
    <div class="panel-body">
        <div class="btn-group-justified">
            <a href="addCustomer" class="btn btn-default btn-lg">Add New</a>
            <a href="addGST" class="btn btn-default btn-lg">Maintain GST</a>
            <a href="addCustomerPO" class="btn btn-default btn-lg">Add PO</a>
            <a href="addCustomerReciept" class="btn btn-default btn-lg">Add Reciept</a>
            <a href="addCustomerPayment" class="btn btn-default btn-lg">Add Payment</a>
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
                <a href="#" class="btn btn-default btn-lg">Add New</a>
                <a href="#" class="btn btn-default btn-lg">Add PO</a>
                <a href="#" class="btn btn-default btn-lg">Add Reciept</a>
                <a href="#" class="btn btn-default btn-lg">Add Payment</a>
                <a href="#" class="btn btn-default btn-lg">Add Payment</a>

            </div>
        </div>
    </div>
</div>


<?php include('user_footer.php'); ?>
