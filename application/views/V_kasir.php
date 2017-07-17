<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Admin</title>

        <link type="text/css" href="<?php echo base_url('assets/tampilan/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url('assets/tampilan/bootstrap/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url('assets/tampilan/css/theme.css')?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url('assets/tampilan/images/icons/css/font-awesome.css')?>" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo site_url('admin'); ?>">Admin </a>
            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav nav-icons">
                    <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                    <li><a href="#"><i class="icon-eye-open"></i></a></li>
                    <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                </ul>
                <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </form>
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Item No. 1</a></li>
                            <li><a href="#">Don't Click</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Example Header</li>
                            <li><a href="#">A Separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/login/keluar'); ?>">Keluar </a></li>

                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li><a href="<?php echo site_url('kasir/data_p_makanan'); ?>"><i class="menu-icon icon-book"></i>Data Pemesanan Makanan
                            </a></li>
                        <li class="active"><a href="<?php echo site_url('kasir/data_p_delivery'); ?>"><i class="menu-icon icon-book"></i>Data Pemesanan Delivery
                            </a></li>
                        <li><a href="<?php echo site_url('kasir/data_p_tempat'); ?>"><i class="menu-icon icon-book"></i>Data Pemesanan Tempat
                            </a></li>
                        <li>
                            <a href="<?php echo base_url('index.php/login/keluar'); ?>">
                                <i class="menu-icon icon-signout"></i>
                                Logout
                            </a>
                        </li>


                    </ul>
                    <!--/.widget-nav-->



                    <!--/.widget-nav-->

                </div>
                <!--/.sidebar-->
            </div>
            <!--/.span3-->
            <div class="span9">
                <div class="content">
                    <div class="btn-controls">


                    </div>
                    <!--/#btn-controls-->
                    <div class="module">
                        <div class="module-head">
                            <h3> Home </h3>
                        </div>
                        <div class="module-body">
                            <div class="chart inline-legend grid">
                                <div id="placeholder2" class="graph" style="height: 500px">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/.module-->
                <div class="module hide">
                    <div class="module-head">
                        <h3>
                            Adjust Budget Range</h3>
                    </div>
                    <div class="module-body">
                        <div class="form-inline clearfix">
                            <a href="#" class="btn pull-right">Update</a>
                            <label for="amount">
                                Price range:</label>
                            &nbsp;
                            <input type="text" id="amount" class="input-" />
                        </div>
                        <hr />
                        <div class="slider-range">
                        </div>
                    </div>
                </div>
                <!--/.module-->
            </div>
            <!--/.content-->
        </div>
        <!--/.span9-->
    </div>
</div>
<!--/.container-->
</div>
<!--/.wrapper-->


<script src="<?php echo base_url('assets/tampilan/scripts/jquery-1.9.1.min.js" type="text/javascript')?>"</script>
<script src="<?php echo base_url('assets/tampilan/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript')?>"</script>
<script src="<?php echo base_url('assets/tampilan/bootstrap/js/bootstrap.min.js" type="text/javascript')?>"</script>
<script src="<?php echo base_url('assets/tampilan/scripts/flot/jquery.flot.js" type="text/javascript')?>"</script>
<script src="<?php echo base_url('assets/tampilan/scripts/flot/jquery.flot.resize.js" type="text/javascript')?>"</script>
<script src="<?php echo base_url('assets/tampilan/scripts/datatables/jquery.dataTables.js" type="text/javascript')?>"</script>
<script src="<?php echo base_url('assets/tampilan/scripts/common.js" type="text/javascript')?>"</script></body>





</html>
