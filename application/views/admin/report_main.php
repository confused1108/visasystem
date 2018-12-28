<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 22-Sep-18
 * Time: 10:16 PM
 */
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=THEME?>assets/images/favicon.png">
    <title>Talent System</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?=THEME?>assets/extra-libs/multicheck/multicheck.css">
    <link href="<?=THEME?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?=THEME?>dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?=THEME?>assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?=THEME?>assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                   
                </a>
                
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    
                    
                </ul>
                
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
<?php include "includes/aside.php"; ?>

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-6 col-lg-6 col-xlg-3">
                    <div class="card card-hover" style="width:90%;margin-left:5%;">
                        <!-- <a type="button"  data-toggle="modal" data-target="#Modal1">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h6 class="text-white">    Detecting Sporting Talent </h6>
                        </div>
                        </a> -->

                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#Modal1" >
<!--                            <a href="--><?//=CTRL?><!--Admin/report_main_limit" style="text-decoration: none; color: white;">-->
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-chart-areaspline"></i>
                            </h1>Print Limits
<!--                            </a>-->
                        </button>


                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xlg-3">
                    <div class="card card-hover" style="width:90%;margin-left:5%;">
                        <!-- <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                            <h6 class="text-white">Detecting Talents in Different Sports</h6>
                        </div> -->
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#Modal2">
<!--                            <a href="--><?//=CTRL?><!--Admin/report_main_norms" style="text-decoration: none; color: white;">-->
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-receipt"></i>
                            </h1>Print Norms
<!--                        </a>-->
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xlg-3">
                    <div class="card card-hover" style="width:90%;margin-left:5%;">
                        <!-- <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                            <h6 class="text-white">Detecting Talents in Different Sports</h6>
                        </div> -->
                        <button type="button" class="btn btn-danger btn-lg" >
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-receipt"></i>
                            </h1>Print Data File
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xlg-3">
                    <div class="card card-hover" style="width:90%;margin-left:5%;">
                        <!-- <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                            <h6 class="text-white">Detecting Talents in Different Sports</h6>
                        </div> -->
                        
                        <button type="button" class="btn btn-success btn-lg" >
                            <a href="<?=CTRL?>Admin/report_main_howto" style="text-decoration: none; color: white;">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-chart-areaspline"></i>
                            </h1>Print of testing procedure gamewise.
                        </a>
                        </button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xlg-3">
                    <div class="card card-hover" style="width:95%;margin-left:2.5%;">
                        <!-- <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                            <h6 class="text-white">Detecting Talents in Different Sports</h6>
                        </div> -->

                        <button type="button" class="btn btn-info btn-lg   " data-toggle="modal" data-target="#Modal3">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-chart-areaspline"></i>
                            </h1>Number of Students giving performance more than extreme limits in each sport variable and in each category.
                        </button>
                    </div>
                </div>
                            
                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>

        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?=CTRL?>Admin/report_main_limit" target="_blank">
                            <div class="form-group row" data-select2-id="12">
                                <h6 style="text-align: center;">Select Sports (mandatory)</h6>
                                <div class="col-md-12" data-select2-id="11">
                                    <select name="category" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <?php
                                            foreach ($catdata as $val) {
                                                    ?>
                                                    <option value="<?php echo $val['cat_id']; ?>"><?php echo $val['name']; ?></option>
                                                    <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <h6 style="text-align: center;">Select Type (not mandatory)</h6>
                                <div class="col-md-12" data-select2-id="11">
                                    <select name="type" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="none">---Select---</option>
                                            <option value="genetic">Genetic</option>
                                            <option value="specific">Specific</option>
                                            <option value="none">Both</option>
                                    </select>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?=CTRL?>Admin/report_main_norms" target="_blank">
                            <div class="form-group row" data-select2-id="12">
                                <h6 style="text-align: center;">Select Sports (mandatory)</h6>
                                <div class="col-md-12" data-select2-id="11">
                                    <select name="category" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <?php
                                        foreach ($catdata as $val) {
                                            ?>
                                            <option value="<?php echo $val['cat_id']; ?>"><?php echo $val['name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <h6 style="text-align: center;">Select Type (mandatory)</h6>
                                <div class="col-md-12" data-select2-id="11">
                                    <select name="type" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="none">---Select---</option>
                                        <option value="genetic">Genetic</option>
                                        <option value="specific">Specific</option>
                                        <option value="none">Both</option>
                                    </select>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

		
		   <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding-left:30px;padding-right:30px;">
                        <form method="post" action="<?=CTRL?>Admin/report_sports" target="_blank">
                            <div class="form-group row" data-select2-id="12">
                                <h6 style="text-align: center;">Select Sports (mandatory)</h6>
                                <div class="col-md-12" data-select2-id="11">
                                    <select name="category" class="form-control" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <?php
                                            foreach ($catdata as $val) {
                                                    ?>
                                                    <option value="<?php echo $val['cat_id']; ?>"><?php echo $val['name']; ?></option>
                                                    <?php
                                            }
                                        ?>
                                    </select>
                                </div>
								<br/><br/>
                                <h6 style="text-align: center;">Select Type (not mandatory)</h6>
                                <div class="col-md-12" data-select2-id="11">
								 <select name="type" class="form-control" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    
                                            <option value="none">---Select---</option>
                                            <option value="genetic">Genetic</option>
                                            <option value="specific">Specific</option>
                                            <option value="none">Both</option>
                                    </select>
                                </div>
								<br/><br/>
							<div class="row" style="width:100%;margin-top:4%;">
							<div class="col-md-4">
							<h6 style="text-align: left;">Sort by:</h6>
							</div>
							<div class="col-md-4">
							Date : <input type="radio" name="radio" value="timestamp" checked>
							</div>
							<div class="col-md-4">
							Score : <input type="radio" name="radio" value="overall_score">
							</div>
</div>							

<div class="row" style="width:100%;margin-top:4%;">
							<div class="col-md-4">
							<h6 style="text-align: left;">Select Order:</h6>
							</div>
							<div class="col-md-8">
							<select class="form-control" name="order">
							<option value="ASC">Ascending</option>
							<option value="DESC">Descending</option>
							</select>
							</div>
							
</div>							
							
    <div class="row">
        <div class='col-sm-6'>
		<label class="m-t-15">Start Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="start_date">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
        </div>
		 <div class='col-sm-6'>
		<label class="m-t-15">End Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control mydatepicker" id="datepicker" placeholder="mm/dd/yyyy" name="end_date">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
        </div>
		</div>
                          
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer> -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->



<script src="<?=THEME?>assets/libs/jquery/dist/jquery.min.js"></script>

 
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=THEME?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=THEME?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?=THEME?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?=THEME?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?=THEME?>dist/js/waves.js"></script>
<script src="<?=THEME?>dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?=THEME?>dist/js/jquery.minicolors.min.js"></script>
<script src="<?=THEME?>dist/js/select2.min.js"></script>
<!--Menu sidebar -->
<script src="<?=THEME?>dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?=THEME?>dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="<?=THEME?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?=THEME?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?=THEME?>assets/extra-libs/DataTables/datatables.min.js"></script>
   <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>

</body>

</html>
