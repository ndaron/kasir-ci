<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmin</title>
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/css/theme.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/menu/datatables/css/dataTables.bootstrap.css') ?>">

    <script src="<?php echo base_url(); ?>assets/menu/jquery-2.1.4.min.js"> </script>


    <!--
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    -->


</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>

            <a class="brand" href="<?php echo site_url('home')?>">
                Home
            </a>


        </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->



<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">

                    <ul class="widget widget-menu unstyled">
                        <li class="active">
                            <a href="<?php echo base_url('index.php/delivery'); ?>">
                                <i class="menu-icon icon-dashboard"></i>
                                Pemesanan Delivery
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/delivery'); ?>">
                                <i class="menu-icon icon-bullhorn"></i>
                                Pemesanan Tempat
                            </a>
                        </li>


                        <li>
                            <a href="<?php echo base_url('index.php/c_login'); ?>">
                                <i class="menu-icon icon-signout"></i>
                                Login
                            </a>
                        </li>
                    </ul><!--/.widget-nav-->



                    <ul class="widget widget-menu unstyled">



                    </ul>

                </div><!--/.sidebar-->
            </div><!--/.span3-->


            <div class="span9">
                <div class="content">

                    <div class="module">
                        <div class="module-head">
                            <h3>Penjualan Den Bagus</h3>
                        </div>
                        <div class="module-body">



                            <form class="form-horizontal row-fluid" id="form_transaksi">
                                <div>


                                </div>
                            </form>
                        </div>
                    </div>



                </div><!--/.content-->
            </div><!--/.span9-->
        </div>
    </div><!--/.container-->
</div><!--/.wrapper-->

<div class="footer">
    <div class="container">


        <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/menu/maskMoney/jquery.maskMoney.min.js" ></script>
<script src="<?php echo base_url(); ?>assets/tampilan/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/tampilan/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/tampilan/scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?= base_url('assets/menu/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/menu/datatables/js/dataTables.bootstrap.js') ?>"></script>

</body>

</html>