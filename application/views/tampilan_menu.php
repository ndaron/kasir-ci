<!DOCTYPE html>
<html >
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
		
  
		<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
		
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


                        <ul class="nav pull-right">

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
                                <li class="active"><a href="<?php echo site_url('person'); ?>">Data Pelayan
                                </a></li>
                                <li><a href="<?php echo site_url('menu'); ?>"><i class=""></i>Daftar Menu </a>
                                </li>
								<li class=><a href="index.html"><i class=""></i>Laporan Penjualan
                                </a></li>
                                <li class=><a href="index.html"><i class=""></i>Stock
                                    </a></li>

                            </ul>
                            <!--/.widget-nav-->
                            
                            

                            <!--/.widget-nav-->
                         
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                          
                            <div class="module">
                                <div class="module-head">
                                    <h3>Rumah Makan Den Bagus</h3>
                                </div>
								
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 500px">
										
										<button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Tambah Menu</button>
											<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
											<br />
											<br />
											<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th>Menu</th>
														<th>tipe</th>
														<th>harga</th>
														<th style="width:125px;">Action</th>
													</tr>
												</thead>
											   
											</table>
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
      
        <!--/.wrapper-->
       
        <script src="<?php echo base_url('assets/tampilan/scripts/jquery-1.9.1.min.js')?>"></script>
        <script src="<?php echo base_url('assets/tampilan/scripts/jquery-ui-1.10.1.custom.min.js')?>"></script>
        <script src="<?php echo base_url('assets/tampilan/scripts/flot/jquery.flot.js')?>"></script>
        <script src="<?php echo base_url('assets/tampilan/scripts/flot/jquery.flot.resize.js')?>"></script>
        <script src="<?php echo base_url('assets/tampilan/scripts/datatables/jquery.dataTables.js')?>"></script>
        <script src="<?php echo base_url('assets/tampilan/scripts/common.js')?>"></script>
		

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
<!-- Bootstrap modal -->

<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Menu</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="kd_menu"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Menu</label>
                            <div class="col-md-9">
                                <input name="menu" placeholder="Menu" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">tipe</label>
                            <div class="col-md-9">
                                <select name="tipe" class="form-control">
                                    <option value="">--tipe--</option>
                                    <option value="makanan">makanan</option>
                                    <option value="minuman">minuman</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">harga</label>
                            <div class="col-md-9">
                                <input name="harga" placeholder="harga" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                      
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
     

<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('menu/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

});



function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}

function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('menu/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="kd_menu"]').val(data.kd_menu);
            $('[name="menu"]').val(data.menu);
            $('[name="tipe"]').val(data.tipe);
            $('[name="harga"]').val(data.harga);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit menu'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('menu/ajax_add')?>";
    } else {
        url = "<?php echo site_url('menu/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('menu/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>

 
    </body>
</html>