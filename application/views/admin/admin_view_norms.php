<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 26-Sep-18
 * Time: 7:14 AM
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

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-12">
				<div class="row" style="height:37px;">
				<div class="col-md-3">
				</div>
				<div class="col-md-5">
				 <!--<h4 style="text-align: center;">
                    <?php
                    foreach($catdata as $val){
                        echo $val ['name'];
                    }
                    ?>&nbsp;&nbsp;
                    <?php
                    foreach($paradata as $val){
                        echo $val ['name'];
                    }
                    ?></h4>-->
                
               <h4 style="text-align:center;">Norms List</h4>
				</div>
				<div class="col-md-4">
				<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=CTRL?>Admin/admin_cat">Sports</a></li>
                        <li class="breadcrumb-item active"><a href="<?=CTRL?>Admin/admin_cat_view/<?php echo $this->uri->segment('4'); ?>"><?php echo $catdata[0]['name'];?></a></li>
                        <li class="breadcrumb-item active"><?php echo $paradata[0]['name'];?></li>
                    </ol>
							
					</div>
				</div>
				
                    <div class="card">
                        
                        <div class="text-right mt-2 mx-3">
                            <a href="link/to/your/download/file" download="sample.xl">
                                <div class="btn btn-info" style="margin-right:2%;">
                                    <i class="fa fa-download"></i>
                                </div>
                            </a>
                        </div>

                        <div class="card-body">
                           

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Performance Value</th>
<!--                                        <th>Area covered by the performance</th>-->
<!--                                        <th>Area below the performance</th>-->
<!--                                        <th>Lower Limit</th>-->
<!--                                        <th>Upper limit</th>-->
<!--                                        <th>Ordinate at lower limit</th>-->
<!--                                        <th>Ordinate at upper limit</th>-->
<!--                                        <th>Scale</th>-->
<!--                                        <th>Linear Transformation</th>-->
<!--                                        <th>Cumulative score</th>-->
                                        <th>Scale value</th>
<!--                                        <th>Grade limits</th>-->
                                    </tr>
                                    </thead>    
                                    <tbody>
                                    <?php

                                    // require_once 'includes/Classes/PHPExcel.php';
                                    // require_once 'includes/Classes/PHPExcel/IOFactory.php';
                                    // $objPHPExcel = PHPExcel_IOFactory::load("myfile.xlsx");
                                    // $objPHPExcel->setActiveSheetIndex(0);
                                    
                                    // //echo $row;
                                    // $objPHPExcel->getActiveSheet()->SetCellValue('A3', $normdata[3]['lower_limit']);
                                    // $objPHPExcel->getActiveSheet()->SetCellValue('A4', $normdata[3]['lower_limit']);
                                    // $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
                                    // $objWriter->save('myfile.xlsx');
                                    
                                    foreach ($normdata as $val) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $val['lower_limit']; ?></td>
<!--                                                        <td></td>-->
<!--                                                        <td></td>-->
<!--                                                        <td></td>-->
<!--                                                        <td>--><?php //echo $val['upper_limit']; ?><!--</td>-->
<!--                                                        <td></td>-->
<!--                                                        <td></td>-->
<!--                                                        <td></td>-->
<!--                                                        <td></td>-->
                                                        <td><?php echo $val['score']; ?></td>
<!--                                                        <td></td>-->
<!--                                                        <td></td>-->
                                                    </tr>
                                                    <?php

                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=THEME?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=THEME?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=THEME?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?=THEME?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?=THEME?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?=THEME?>dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?=THEME?>dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?=THEME?>dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="<?=THEME?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?=THEME?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?=THEME?>assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    $("#addfield").click(function(){


        $("#addfieldin").append('<div class="deletehere"><div class="form-group row"><label for="userName" class="col-sm-3 text-right control-label col-form-label">Group ID</label><div class="col-sm-9"><input type="text" class="form-control" id="userName" placeholder="Group ID"></div></div> <div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Variable</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Physical Variable Name"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Minimum</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Minimum value of Field"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Maximum</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Maximum value of Field"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Loading</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Loading Factor"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">How</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="How to Measure"></div></div><div class="form-group row"><div for="" class="col-sm-6 "></div><div class="col-sm-6 text-right"><div class=" btn btn-warning" id="removebtn">Delete</div></div></div></div>');


    });

    $("body").on("click","#removebtn",function(e){
        $(this).parents('.deletehere').remove();
    });
</script>

</body>

</html>


