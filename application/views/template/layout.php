<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($PAGE_TITLE) ? $PAGE_TITLE : ''; ?></title> <!-- title dinamis -->
    <meta name="description" content="<?php echo isset($PAGE_DESCRIPTION) ? $PAGE_DESCRIPTION : ''; ?>">

    <!-- css default pasang langsung -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/css/theme.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/tampilan/images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/menu/datatables/css/dataTables.bootstrap.css') ?>">
    <?php echo isset($STYLES) ? $STYLES : ""; ?> <!-- gawe tambahan lek butuh css khusus per halaman *-->
    <script src="<?php echo base_url(); ?>assets/menu/jquery-2.1.4.min.js"> </script>

</head>
<body>
    <header>Ini header </header>
    <?php $this->load->view($PAGE); ?>
    <footer>Ini footer</footer>
    <!-- js default pasang langsung -->
    <script src="<?php echo base_url(); ?>assets/menu/maskMoney/jquery.maskMoney.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/tampilan/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/tampilan/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/tampilan/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/menu/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/menu/datatables/js/dataTables.bootstrap.js') ?>"></script>

    <?php echo isset($SCRIPTS) ? $SCRIPTS : ""; ?> <!-- gawe tambahan lek butuh js khusus per halaman -->
</body>
</html>