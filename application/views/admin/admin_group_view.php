<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 25-Sep-18
 * Time: 7:04 PM
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
                    <div class="card">
                        <div class="text-left mt-2 mx-3">
                            <a href="<?=CTRL?>Admin/admin_cat_view/<?php echo $this->uri->segment('4'); ?>">
                                <div class="btn btn-info">
                                    Back
                                </div>
                            </a>
                        </div>
                        <?php
                        foreach ($catdata as $var) {
                            ?>
                            <h4 style="text-align: center; color: red;"><?php echo $var['name']; ?></h4>
                            <?php
                        }
                        ?>
                        <div class="card-body">

                            <form method="post" action="<?=CTRL?>Admin/total_group_var/<?php echo $this->uri->segment('3'); ?>/<?php echo $this->uri->segment('4'); ?>">
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" style="font-weight: bold;">Total Variability of Group</label>
                                    <?php
                                    foreach ($groupdata as $var) {
                                        ?>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="cono1" placeholder="Total Variability"
                                                   name="total_var" value="<?php echo $var['group_reliability']; ?>">
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <div class="col-sm-3"><button type="submit" class="btn btn-primary">Change</button></div>
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6"><h6 id="error" style="color: red; text-align: center;"></h6></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Groups List </h4>

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Min</th>
                                        <th>Max</th>
                                        <th>Loading</th>
                                        <th>Change</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($groupdata as $val) {
                                        $param=$val['parameters'];
                                        $parm=explode(",",$param);
                                        foreach ($parm as $n){
                                            foreach ($paramdata as $var2){
                                                if($var2['para_group_id']==$n){
                                        ?>
                                        <tr>
                                            <td><?php echo $var2['name']; ?></td>
                                            <td><?php echo $var2['type']; ?></td>
                                            <td><?php echo $var2['min']; ?></td>
                                            <td><?php echo $var2['max']; ?></td>
                                            <form method="post" action="<?=CTRL?>Admin/set_param_var/<?php echo $var2['para_group_id']; ?>/<?php echo $this->uri->segment('3'); ?>/<?php echo $this->uri->segment('4'); ?>">
                                                <?php
                                                $flag = 0;
                                                foreach($distdata as $var3) {
                                                    if ($var3['para_group_id'] == $n) {
                                                        $flag = 1;
                                                        ?>
                                                        <td><input type="text" class="form-control" id="cono1"
                                                                   placeholder="Loading" size="5" name="loading"
                                                                   value="<?php echo $var3['loading']; ?>"></td>
                                                        <?php
                                                    }
                                                }
                                                if($flag==0){
                                                        ?>
                                                        <td><input type="text" class="form-control" id="cono1" placeholder="Loading" size="5" name="loading" value="not set yet"></td>
                                                        <?php
                                                }
                                                ?>
                                            <td><button type="submit" class="btn btn-success">Set Loading</button></td>
                                            </form>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        }
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
<script>
    $(document).ready(function(){
        if(window.location.hash) {
            $("#error").html("Total Variability of a category cannot exceed 100");
        }
    });
</script>
</body>

</html>

