<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah Makan Den Bagus</title>

    <!-- Bootstrap Core CSS -->
    <link type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link type="text/css" href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link type="text/css" href="<?php echo base_url('assets/dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link type="text/css" href="<?php('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Rumah Makan Den Bagus</h3>
                </div>
                <div class="panel-body">
                    <form action ="<?php echo site_url('login/aksi_p_login'); ?>" method="post"role="form">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="nama"class="form-control" placeholder="nama"  autofocus>
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <td><input type="submit" value="Login"class="btn btn-lg btn-success btn-block"></td>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js" type="text/javascript')?>"</script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript')?>"</script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js"type="text/javascript')?>"</script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets/dist/js/sb-admin-2.js" type="text/javascript')?>"</script>


</body>

</html>



