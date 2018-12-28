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
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->

            <div class="row">



                <div class="col-12">


                    <div class="card">
                        <div class="card-body">
                            
                           
                            

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Low</th>
                                        <th>High</th>  
                                        <th>Action</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($select as $val) {
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $val['name']; ?></td>
                                            
                                            <td><?php echo $val['min']; ?> <?php echo $val['unit']; ?></td>
                                            <td><?php echo $val['max']; ?> <?php echo $val['unit']; ?></td>
                                            <td>
                                                            <a href="#"  data-toggle="modal" data-target="#Modal_<?php echo $val['param_id']; ?>">
                                                                <div class="btn btn-info">
                                                                    Edit
                                                                </div>
                                                            </a>
                                                            <div class="modal fade" id="Modal_<?php echo $val['param_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                                                <div class="modal-dialog" role="document ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update Parameter</h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true ">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="card">
                                                                                        <form class="form-horizontal" method="post" action="<?=CTRL?>Admin/update_param_select/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>/<?php echo $val['type']; ?>/<?php echo $val['age']; ?>/<?php echo $val['gender']; ?>">
                                                                                            <div class="card-body" id="addfieldin">
                                                                                                <div class="deletehere">
                                                                                                    <div class="form-group row">
                                                                                                        <label for="userName" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="text" class="form-control" id="userName" placeholder="Name" name="name" value="<?php echo $val['name']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Type</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type">
                                                                                                                <option value="<?php echo $val['type']; ?>"><?php echo $val['type']; ?></option>
                                                                                                                <option value="genetic">Genetic</option>
                                                                                                                <option value="specific">Specific</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Minimum</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" class="form-control" id="cono1" placeholder="Minimum value" name="min" value="<?php echo $val['min']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Maximum</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" class="form-control" id="cono1" placeholder="Maximum value" name="max" value="<?php echo $val['max']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="" class="col-sm-3 text-right control-label col-form-label">How to Measure</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <textare type="text" class="ckeditor form-control" id=" " placeholder="How to Measure" name="how_to" value="<?php echo $val['how_to']; ?>">
                                                                                                            </textare>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="border-top">
                                                                                                <div class="card-body row">
                                                                                                    <div class="col-sm-6"><button type="submit" class="btn btn-primary">Submit</button></div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 

                                                        </td>
                                                         <td> 
                                                            <a href="<?= CTRL ?>Admin/view_norms/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><span
                                                                        class="btn btn-success">View Norms</span></a>
                                                        </td>
                                                        <td>
                                                            <?php if($val['active']==0){ ?>
                                                            <a href="<?= CTRL ?>Admin/activate_param_select/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>/<?php echo $val['type']; ?>/<?php echo $val['age']; ?>/<?php echo $val['gender']; ?>"><span
                                                                        class="btn btn-info">Activate</span></a>
                                                            <?php }else{ ?>
                                                            <a href="<?= CTRL ?>Admin/deactivate_param_select/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>/<?php echo $val['type']; ?>/<?php echo $val['age']; ?>/<?php echo $val['gender']; ?>"><span
                                                                        class="btn btn-info">Deactivate</span></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?= CTRL ?>Admin/delete_param_select/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>/<?php echo $val['type']; ?>/<?php echo $val['age']; ?>/<?php echo $val['gender']; ?>"><span
                                                                        class="btn btn-danger">Delete</span></a>
                                                        </td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    </tfoot>
                                </table>
                                
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
</script>

</body>

</html>
