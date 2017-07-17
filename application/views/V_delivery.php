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

            <a class="brand" href="index.html">
                Edmin
            </a>

            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav nav-icons">
                    <li class="active"><a href="#">
                            <i class="icon-envelope"></i>
                        </a></li>
                    <li><a href="#">
                            <i class="icon-eye-open"></i>
                        </a></li>
                    <li><a href="#">
                            <i class="icon-bar-chart"></i>
                        </a></li>
                </ul>

                <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </form>

            </div><!-- /.nav-collapse -->
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
                            <a href="index.html">
                                <i class="menu-icon icon-dashboard"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="activity.html">
                                <i class="menu-icon icon-bullhorn"></i>
                                News Feed
                            </a>
                        </li>


                        <li>
                            <a href="<?php echo base_url('index.php/login/keluar'); ?>">
                                <i class="menu-icon icon-signout"></i>
                                Logout
                            </a>
                        </li>
                    </ul><!--/.widget-nav-->





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
                                    <div class="control-group">
                                        <label class="control-label" for="tgl_transaksi">Tgl.Transaksi :</label>
                                        <div class="controls">
                                            <input type="text" class="form-control"
                                                   name="tgl_transaksi" value="<?= date('d-m-Y') ?>"
                                                   readonly="readonly">

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="id_pesan">ID Pemesanan :</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <input type="text" class="form-control reset"
                                                       name="id_pesan" id="id_pesan"
                                                       readonly="readonly"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="nama">Nama :</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <input type="text" class="form-control reset"
                                                       name="nama" id="nama"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="no_telp">No Telp:</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <input type="text" class="form-control reset"
                                                       name="no_telp" id="no_telp"
                                                >
                                            </div>
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <textarea class="span8" rows="5" name="alamat" id="alamat"></textarea>
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="kd_menu">Id Menu :</label>
                                        <div class="controls">
                                            <input list="list_barang" class="form-control reset"
                                                   placeholder="Ketik menu" name="kd_menu" id="kd_menu"
                                                   autocomplete="off" onchange="showBarang(this.value)">
                                            <datalist id="list_barang">
                                                <?php foreach ($menu as $menu): ?>
                                                    <option value="<?= $menu->kd_menu ?>"><?= $menu->menu ?></option>
                                                <?php endforeach ?>
                                            </datalist>
                                        </div>
                                    </div>

                                    <div id="daftarmenu">




                                        <div class="control-group">
                                            <label class="control-label" for="menu">Menu :</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <input type="text" class="form-control reset"
                                                           name="menu" id="menu"
                                                           readonly="readonly">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="tipe">Tipe :</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <input type="text" class="form-control reset"
                                                           name="tipe" id="tipe"
                                                           readonly="readonly">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="harga">Harga (Rp) :</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="text" class="form-control reset"
                                                           name="harga" id="harga"
                                                           readonly="readonly">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <label class="control-label" for="jumlah">Jumlah :</label>
                                            <div class="controls">
                                                <input type="number" class="form-control reset"
                                                       autocomplete="off" onchange="subTotal(this.value)"
                                                       onkeyup="subTotal(this.value)" id="jumlah" min="0"
                                                       name="jumlah" placeholder="Jumlah">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <button type="button" class="btn btn-primary"
                                                id="tambah" onclick="addmenu()">
                                            <i class="fa fa-cart-plus"></i> Tambah</button>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="sub_total">Sub-Total (Rp):</label>
                                    <div class="controls">
                                        <input type="text" class="form-control reset"
                                               name="sub_total" id="sub_total"
                                               readonly="readonly">
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label class="control-label" for="total" >Total (Rp) :</label>
                                    <div class="controls">
                                        <input type="text" class="form-control input-lg"
                                               name="total" id="total" placeholder="0"
                                               readonly="readonly" value="<?= number_format(
                                            $this->cart->total(), 0 , '' , '.' ); ?>">
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label for="bayar" class="control-label">Bayar (Rp) :</label>
                                    <div class="controls">
                                        <input type="text" class="form-control input-lg uang"
                                               name="bayar" placeholder="0" autocomplete="off"
                                               id="bayar" onkeyup="showKembali(this.value)">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <table id="table_transaksi" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tgl.Transaksi</th>
                                            <th>Id Menu</th>
                                            <th>Menu</th>
                                            <th>Tipe</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Sub-Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="control-group">
                                    <button type="button" class="btn btn-primary "
                                            id="selesai"
                                            onclick="save()">
                                        Selesai <i class="fa fa-angle-double-right"></i></button>
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
<script type="text/javascript">

    function showBarang(str)
    {

        if (str == "") {
            $('#menu').val('');
            $('#tipe').val('');
            $('#harga').val('');
            $('#jumlah').val('');
            $('#sub_total').val('');
            $('#reset').hide();
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("daftarmenu").innerHTML =
                        xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "<?= base_url(
                    'index.php/delivery/getbarang') ?>/"+str,true);
            xmlhttp.send();
        }
    }

    function subTotal(qty)
    {

        var harga = $('#harga').val().replace(".", "").replace(".", "");

        $('#sub_total').val(convertToRupiah(harga*qty));
    }

    function convertToRupiah(angka)
    {

        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');

        for(var i = 0; i < angkarev.length; i++)
            if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';

        return rupiah.split('',rupiah.length-1).reverse().join('');

    }

    var table;
    $(document).ready(function() {

        showKembali($('#bayar').val());

        table = $('#table_transaksi').DataTable({
            paging: false,
            "info": false,
            "searching": false,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables'
            // server-side processing mode.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?= site_url('delivery/ajax_list_transaksi')?>"
            },
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ 0,1,2,3,4,5,6 ], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });
    });

    function reload_table()
    {

        table.ajax.reload(null,false); //reload datatable ajax
        console.log("reload table")

    }

    function addmenu()
    {
        var id_barang = $('#kd_menu').val();
        var qty = $('#jumlah').val();
        if (id_barang == '') {
            $('#kd_menu').focus();
        }else if(qty == ''){
            $('#jumlah').focus();
        }else{
            // ajax adding data to database
            $.ajax({
                url : "<?= site_url('delivery/addmenu')?>",
                type: "POST",
                data: $('#form_transaksi').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    //reload ajax table
                    reload_table();


                    console.log("add done");
                    console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding data');
                }
            });
            showTotal();
            showKembali($('#bayar').val());
            //mereset semua value setelah btn tambah ditekan
            $('.reset').val('');

        };

    }


    function deletebarang(id,sub_total)
    {
        // ajax delete data to database
        $.ajax({
            url : "<?= site_url('delivery/delete_menu')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

        var ttl = $('#total').val().replace(".", "");

        $('#total').val(convertToRupiah(ttl-sub_total));

        showKembali($('#bayar').val());
    }

    function showTotal()
    {

        var total = $('#total').val().replace(".", "").replace(".", "");

        var sub_total = $('#sub_total').val().replace(".", "").replace(".", "");

        $('#total').val(convertToRupiah((Number(total)+Number(sub_total))));

    }

    //maskMoney
    $('.uang').maskMoney({
        thousands:'.',
        decimal:',',
        precision:0
    });

    function showKembali(str)
    {
        var total = $('#total').val().replace(".", "").replace(".", "");
        var bayar = str.replace(".", "").replace(".", "");
        var kembali = bayar-total;

        $('#kembali').val(convertToRupiah(kembali));

        if (kembali >= 0) {
            $('#selesai').removeAttr("disabled");
        }else{
            $('#selesai').attr("disabled","disabled");
        };

        if (total == '0') {
            $('#selesai').attr("disabled","disabled");
        };
    }

</script>
</body>

</html>