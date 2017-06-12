<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CI_Project</title>


    <!-- Scripts for Bootstrap -->

    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap2-toggle.min.js'); ?>"></script>


    <!-- Script for Date Picker-->
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
    <script>
        $(function () {
            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd'
            });

        });</script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datepicker.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-toggle.min.css'); ?>">

</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">Arden Telicommuniations &nbsp;&nbsp;|&nbsp;&nbsp; Admin Dashboard</div>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#myModal">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>