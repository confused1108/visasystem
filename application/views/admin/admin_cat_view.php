<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 22-Sep-18
 * Time: 10:28 PM
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
	
	 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
var app = angular.module('sfapp', []);
app.controller('sfCtrl', function($scope,$http,$window) {
  // alert("disha");
   $scope.myFunc =function() {
		//alert("hello");
	var limit =$scope.itemPerPage;
	var offset=limit*($scope.currentPage-1);
		
	$scope.details=[];
	$scope.subdetails = [];
	$scope.hastrue=true;
	
	var xsrf = $.param({limit: limit, offset:offset});
	
	
	$http({
	url:'<?php  echo base_url()."index.php/User/get_profile/"?>',
	method: "POST",
			data: xsrf,
			headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
	}).then(function(response) {
                  $scope.data = response.data.data1;
				//alert(JSON.stringify($scope.data));
				$scope.count_unread_msg();  
				
				
				 //$rootScope.$emit("count_unread_msg", {});
					$scope.hastrue=false;
					
				}).error(function (data, status, headers, config) {
					$scope.hastrue=false;
				});
		
      };

	  
});
</script>
	
<style>
.col-form-label {
    padding-top: 0px;
    padding-bottom: 0px;
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}
</style>	
</head>

<body onload="myFunction858()">
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
				<div class="col-md-2">
				</div>
				<div class="col-md-7">
				  <?php
                            foreach ($catdata as $var) {
                                ?>
                                <h4 style="text-align:center; color: #666;font-size:27px;margin-left:20px;"><?php echo $var['name']; ?></h4>
                                <?php
                            }
                            ?>
				</div>
				<div class="col-md-3">
				<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=CTRL?>Admin/admin_cat">Sports</a></li>
                        <li class="breadcrumb-item active">Parameters</li>
                    </ol>
							
					</div>
			    </div>
                <div class="col-md-12">
                    <h4 id="assessment" style="color: red; text-align: center"></h4>
                </div>
                    <div class="card">
                        <div class="card-body">
                            
                          
                                    



<!-- creating for genetic field -->
<div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Select</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <form class="form-horizontal" method="post" action="<?=CTRL?>Admin/select_show/<?php echo $this->uri->segment('3'); ?>">
                                                            <div class="card-body" id="addfieldin">
                                                                <div class="deletehere">
                                                                    
                                                                    <div class="form-group row">
                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Type</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type" id="sample_1">
                                                                                <option>Select</option>
                                                                                <option value="genetic">Genetic</option>
                                                                                <option value="specific">Specific</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row">
                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Age</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="age">
                                                                                <option value="0">Select</option>
                                                                                <option value="1">8-9 Years</option>
                                                                                <option value="2">10-11 Years</option>
                                                                                <option value="3">12-13 Years</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender">
                                                                                <option>Select</option>
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>

                                                                            </select>
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
                            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document " style="margin-right:38%;">
                                    <div class="modal-content" style="width:930px;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Parameter</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="padding:0px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <?php echo form_open_multipart(CTRL.'Admin/add_new_param_1/'.$this->uri->segment('3') , 'class="form-horizontal"');?>
                                                        <div class="card-body" id="addfieldin">
                                                            <div class="deletehere">
                                                                <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                    <label for="userName" class="col-sm-2 text-left control-label col-form-label">Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="userName" placeholder="Name" name="name">
                                                                    </div>
                                                                </div>

                                                                <input type="hidden"   name="type" value="genetic">
                                                                <!-- <div class="form-group row">
                                                                    <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Age</label>
                                                                    <div class="col-sm-4">
                                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="age">
                                                                            <option>Select</option>
                                                                            <option value="1">8-9 Years</option>
                                                                            <option value="2">10-11 Years</option>
                                                                            <option value="3">12-13 Years</option>
                                                                        </select>
                                                                    </div>

                                                                    <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Gender</label>
                                                                    <div class="col-sm-4">
                                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender">
                                                                            <option>Select</option>
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>

                                                                        </select>
                                                                    </div>
                                                                </div> -->
                                                                <div class="form-group row" style="margin-bottom: 0.25rem;">
                                                                    <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="    line-height: 0.5;"><b>Male</b>
                                                                        <div class="form-group row">
                                                                            <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;padding-bottom: 0px;"><i>Low</i>
                                                                            </label>
                                                                            <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>High</i>
                                                                            </label>
                                                                        </div>
                                                                    </label>

                                                                    <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="    line-height: 0.5;"><b>Female</b>
                                                                        <div class="form-group row">
                                                                            <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Low</i>
                                                                            </label>
                                                                            <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>High</i>
                                                                            </label>
                                                                        </div>


                                                                    </label>

                                                                </div>

                                                                <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                    <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;"><sub> </sub></label>
                                                                    <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                        <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                    </div>
                                                                    <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                        <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                    </div>

                                                                    <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;padding-left: 38px;"><sub> </sub></label>
                                                                    <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                        <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                    </div>
                                                                    <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                        <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;" >
                                                                    <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Which one is better performance?</label>
                                                                    <div class="col-sm-4 ">

                                                                        <input   name="priority" required="" type="radio" value="value_1">
                                                                        <label for="customControlValidation1">Low</label>


                                                                        <input   name="priority" required="" type="radio" value="value_2" style="margin-left:15%;">
                                                                        <label for="customControlValidation2   ">High</label>


                                                                    </div>

                                                                    <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Measuring Unit</label>
                                                                    <div class="col-sm-4">
                                                                        <!-- <input type="text" class="form-control" id="cono1" placeholder="Measuring Unit" name="unit"> -->
                                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type_parameter">
                                                                            <option>Select</option>
                                                                            <option value="cm">Centimeter</option>
                                                                            <option value="meter">Meter</option>
                                                                            <option value="km">KiloMeter</option>
                                                                            <option value="kg">Kilogram</option>
                                                                            <option value="s">Seconds</option>
                                                                            <option value="gm">Grams</option>
                                                                            <option value="no">Number</option>
                                                                            <option value="Kg/m2">Kg/m2</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                    <label for="cono1" class="col-sm-12 text-left control-label col-form-label">How To Measure?</label>
                                                                    <br>
                                                                    <!-- <label for="cono1" class="col-sm-2 text-left control-label col-form-label">How to Measure</label>-->
                                                                    <div class="col-sm-12">
                                                                            <textarea type="text" class="ckeditor form-control" placeholder="How to Measure" name="how_to">
                                                                            </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                    <label for="cono1" class="col-sm-12 text-left control-label col-form-label">Upload Video</label>
                                                                    <!-- <label for="cono1" class="col-sm-2 text-left control-label col-form-label">How to Measure</label>-->
                                                                    <div class="col-sm-12">
                                                                        <input type="file" id="" name="how_vid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6"><button type="submit" class="btn btn-primary">Submit</button></div>
                                                        </div>
                                                         
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- creating for specific field -->
                            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document " style="margin-right:38%;">
                                    <div class="modal-content" style="width:930px;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Parameter</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="padding:0px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <?php echo form_open_multipart(CTRL.'Admin/add_new_param/'.$this->uri->segment('3') , 'class="form-horizontal"');?>
<!--                                                        <form class="form-horizontal" method="post" action="--><?//=CTRL?><!--Admin/add_new_param/--><?php //echo $this->uri->segment('3'); ?><!--">-->
                                                            <div class="card-body" id="addfieldin">
                                                                <div class="deletehere">
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                        <label for="userName" class="col-sm-2 text-left control-label col-form-label">Name</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="userName" placeholder="Name" name="name">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <input type="hidden"   name="type" value="specific">
                                                                    <!-- <div class="form-group row">
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Age</label>
                                                                        <div class="col-sm-4">
                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="age">
                                                                                <option>Select</option>
                                                                                <option value="1">8-9 Years</option>
                                                                                <option value="2">10-11 Years</option>
                                                                                <option value="3">12-13 Years</option>
                                                                            </select>
                                                                        </div>
                                                                   
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Gender</label>
                                                                        <div class="col-sm-4">
                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender">
                                                                                <option>Select</option>
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>

                                                                            </select>
                                                                        </div>
                                                                    </div> -->
																	 <div class="form-group row" style="margin-bottom: 0.25rem;">
                                                                        <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="    line-height: 0.5;"><b>Male</b>
																		 <div class="form-group row">
																		  <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;padding-bottom: 0px;"><i>Low</i>
																		  </label>
																		  <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>High</i>
																		  </label>
																		 </div>
																		</label>
                                                                      
                                                                        <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="    line-height: 0.5;"><b>Female</b>
																		 <div class="form-group row">
																		  <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Low</i>
																		  </label>
																		  <label for="cono1" class="col-md-6 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>High</i>
																		  </label>
																		 </div>
																		
																		
																		</label>
                                                                       
                                                                    </div>
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;">
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;"><sub>(8-9) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
																		 <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>
                                                                   
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;padding-left: 38px;"><sub>(8-9) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
																		 <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;">
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;"><sub>(10-11) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
																		 <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>
                                                                   
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;padding-left: 38px;"><sub>(10-11) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
																		 <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;">
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;"><sub>(12-13) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
																		 <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>
                                                                   
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;padding-left: 38px;"><sub>(12-13) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
																		 <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;"><sub>(14-16) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>

                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label" style="max-width: 11.66667%;padding-left: 38px;"><sub>(14-16) yrs</sub></label>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="min[]">
                                                                        </div>
                                                                        <div class="col-sm-2" style="flex: 0 0 17.66667%; max-width: 17.66667%;">
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="max[]">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;" >
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Which one is better performance?</label>
                                                                        <div class="col-sm-4 ">
                                                                           
                                                                            <input   name="priority" required="" type="radio" value="value_1">
                                                                            <label for="customControlValidation1">Low</label>
                                                                            
                                                                           
                                                                            <input   name="priority" required="" type="radio" value="value_2" style="margin-left:15%;">
                                                                            <label for="customControlValidation2   ">High</label>
                                                                            
                                                                           
                                                                        </div>
                                                                  
                                                                        <label for="cono1" class="col-sm-2 text-left control-label col-form-label">Measuring Unit</label>
                                                                        <div class="col-sm-4">
                                                                            <!-- <input type="text" class="form-control" id="cono1" placeholder="Measuring Unit" name="unit"> -->
                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type_parameter">
                                                                                <option>Select</option>
                                                                                <option value="cm">Centimeter</option>
                                                                                <option value="meter">Meter</option>
                                                                                <option value="km">KiloMeter</option>
                                                                                <option value="kg">Kilogram</option>
                                                                                <option value="s">Seconds</option>
                                                                                <option value="gm">Grams</option>
                                                                                <option value="no">Number</option>
                                                                                <option value="Kg/m2">Kg/m2</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="form-group row">
                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Priority</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="priority">
                                                                                <option>Select</option>
                                                                                <option value="low">Low</option>
                                                                                <option value="high">High</option>

                                                                            </select>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
																	 <label for="cono1" class="col-sm-12 text-left control-label col-form-label">How To Measure?</label>
																	 <br>
                                                                       <!-- <label for="cono1" class="col-sm-2 text-left control-label col-form-label">How to Measure</label>-->
                                                                        <div class="col-sm-12">
                                                                            <textarea type="text" class="ckeditor form-control " id="" placeholder="How to Measure" name="how_to">
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
																	
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
																	 <label for="cono1" class="col-sm-12 text-left control-label col-form-label">Upload Video</label>
                                                                       <!-- <label for="cono1" class="col-sm-2 text-left control-label col-form-label">How to Measure</label>-->
                                                                        <div class="col-sm-12">
                                                                            <input type="file" id="" name="how_vid">
                                                                        </div>
                                                                    </div>
                                                                </div>
																<div class="col-sm-6"><button type="submit" class="btn btn-primary">Submit</button></div>
                                                            </div>


                                                          

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="Modal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document " style="margin-right:38%;">
                                    <div class="modal-content" style="width:930px;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add BMI</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="padding:0px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <?php echo form_open_multipart(CTRL.'Admin/add_new_bmi/'.$this->uri->segment('3') , 'class="form-horizontal"');?>

                                                            <div class="card-body" id="addfieldin">
                                                                <div class="deletehere">

                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;">
                                                                        <label for="cono1" class="col-md-12 text-left control-label col-form-label" style="    line-height: 0.5;"><b>Male</b>
                                                                            <div class="form-group row">
                                                                                <label for="cono1" class="col-md-4 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Lean</i>
                                                                                </label>
                                                                                <label for="cono1" class="col-md-4 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Fit</i>
                                                                                </label>
                                                                                <label for="cono1" class="col-md-4 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Obese</i>
                                                                                </label>
                                                                            </div>
                                                                        </label>

                                                                        <label for="cono1" class="col-md-12 text-left control-label col-form-label" style="    line-height: 0.5;"><b>Female</b>
                                                                            <div class="form-group row">
                                                                                <label for="cono1" class="col-md-4 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Lean</i>
                                                                                </label>
                                                                                <label for="cono1" class="col-md-4 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Fit</i>
                                                                                </label>
                                                                                <label for="cono1" class="col-md-4 text-left control-label col-form-label" style="padding-left: 26%;    padding-bottom: 0px;"><i>Obese</i>
                                                                                </label>
                                                                            </div>


                                                                        </label>

                                                                    </div>
                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;">
                                                                        <div class="col-sm-4" >
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="low[]">
                                                                        </div>
                                                                        <div class="col-sm-4" >
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="med[]">
                                                                        </div>
                                                                        <div class="col-sm-4" >
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="high[]">
                                                                        </div>
                                                                        <div class="col-sm-4" >
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="low[]">
                                                                        </div>
                                                                        <div class="col-sm-4" >
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="med[]">
                                                                        </div>
                                                                        <div class="col-sm-4" >
                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Value" name="high[]">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                        <label for="cono1" class="col-sm-12 text-left control-label col-form-label">How To Measure?</label>
                                                                        <br>
                                                                        <!-- <label for="cono1" class="col-sm-2 text-left control-label col-form-label">How to Measure</label>-->
                                                                        <div class="col-sm-12">
                                                                            <textarea type="text" class="ckeditor form-control " id="" placeholder="How to Measure" name="how_to">
                                                                            </textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row" style="margin-bottom: 0.25rem;margin-bottom: 30px;">
                                                                        <label for="cono1" class="col-sm-12 text-left control-label col-form-label">Upload Video</label>
                                                                        <!-- <label for="cono1" class="col-sm-2 text-left control-label col-form-label">How to Measure</label>-->
                                                                        <div class="col-sm-12">
                                                                            <input type="file" id="" name="how_vid">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6"><button type="submit" class="btn btn-primary">Submit</button></div>
                                                            </div>




                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                li>.active {
                                    background-color: #2255a4;
                                    color: white;
                                    padding: 1rem;

                                }
                            </style>
							  <ul class="nav nav-pills pb-4">
                                
                                <li ><a data-toggle="pill" id="home1" href="#home" class="" onclick="myFunction78('genetic')">Genetic</a></li>
                                <li><a data-toggle="pill" id="menu11" href="#menu1" class="" style=" margin-left: 25px;" onclick="myFunction78('static')">Specific </a></li>
                                  <li><a data-toggle="pill" id="menu21" href="#menu2" class="" style=" margin-left: 25px;" onclick="myFunction78('bmi')">BMI </a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane">
								<div class="row" style="margin-top:-4%;width:50%;margin-left:77%;">
							<!--<div class="col-md-3">
                           <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type_parameter">
                                                                                <option>ALL</option>
                                                                                <option value="cm">Male</option>
                                                                                <option value="meter">Female</option>
                                                                              
                                                                            </select>
																			</div>
																			<div class="col-md-3">
																			  <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type_parameter">
                                                                                <option>All</option>
                                                                                <option value="cm">8-9 Years</option>
                                                                                <option value="meter">10-11 Years</option>
                                                                                <option value="km">12-13 Years</option>
                                                                              

                                                                            </select>
							</div>-->
                          <div class="col-md-6">
                                    <span class="mr-4 mb-2" style="float: right;width:90px;">
                                    <a href="#"  data-toggle="modal" data-target="#Modal1">
                                        <div class="btn btn-info">
                                           <i class="fa fa-plus"></i>
                                        </div>
                                    </a>
									<a href="#" data-toggle="modal" data-target="#Modal4" style="float: right;">
                                        <div class="btn btn-info">
                                            <i class="fa fa-filter"></i>
                                        </div>
                                    </a>
                                    </span>
								</div>
								</div>
                                    
                                  <br>  
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                
                                                <th>Low</th>
                                                <th>High</th>
                                                <th>Gender</th>
                                                <th>Age Group</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($paramdata as $val) {
                                                if ($val['type'] == 'genetic') {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $val['name']; ?></td>
                                                       
                                                        <td><?php echo $val['min']; ?> <?php echo $val['unit']; ?></td>
                                                        <td><?php echo $val['max']; ?> <?php echo $val['unit']; ?></td>
                                                        <td><?php echo $val['gender']; ?></td>
                                                        <td><?php if($val['age']==1)
                                                                echo "8-9 Years";
                                                            elseif($val['age']==2)
                                                                echo "10-11 Years";
                                                            elseif($val['age']==3)
                                                                echo "12-13 Years";
                                                            elseif($val['age']==4)
                                                                echo "14-16 Years";
                                                            else
                                                                echo "No age";
                                                            ?></td>
                                                        <td>
                                                            <a href="#"  data-toggle="modal" data-target="#Modal_<?php echo $val['param_id']; ?>">
                                                               <i class="fa fa-edit" style="color:#607d8b;"></i>
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
                                                                                        <?php echo form_open_multipart(CTRL.'Admin/update_param/'.$val['param_id'].'/'.$this->uri->segment('3') , 'class="form-horizontal"');?>

<!--                                                                                        <form class="form-horizontal" method="post" action="--><?//=CTRL?><!--Admin/update_param/--><?php //echo $val['param_id']; ?><!--/--><?php //echo $this->uri->segment('3'); ?><!--">-->
                                                                                            <div class="card-body" id="addfieldin">
                                                                                                <div class="deletehere">
                                                                                                    <div class="form-group row">
                                                                                                        <label for="userName" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="text" class="form-control" id="userName" placeholder="Name" name="name" value="<?php echo $val['name']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <input name="type" value="genetic" type="hidden">
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Low</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Minimum value" name="min" value="<?php echo $val['min']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">High</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" step=".01" class="form-control" id="cono1" placeholder="Maximum value" name="max" value="<?php echo $val['max']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Which one is better performance?</label>
                                                                                                        <div class="col-sm-9">

                                                                                                            <input   name="priority" required="" type="radio" value="value_1" <?php if($val['priority']=="value_1"){?>checked="checked" <?php } ?> >
                                                                                                            <label for="customControlValidation1" style="width:54%;">Low</label>
                                                                                                            <input   name="priority" required="" type="radio" value="value_2" <?php if($val['priority']!="value_1"){?>checked="checked" <?php } ?>>
                                                                                                            <label for="customControlValidation2   ">High</label>


                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Measuring Unit</label>
                                                                                                        <div class="col-sm-9">
                                                                                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="unit">
                                                                                                        <option value="<?php echo $val['unit']; ?>"><?php echo $val['unit']; ?></option>
                                                                                                        <option value="cm">Centimeter</option>
                                                                                                        <option value="meter">Meter</option>
                                                                                                        <option value="km">KiloMeter</option>
                                                                                                        <option value="kg">Kilogram</option>
                                                                                                        <option value="s">Seconds</option>
                                                                                                        <option value="gm">Grams</option>
                                                                                                        <option value="no">Number</option>
                                                                                                        <option value="Kg/m2">Kg/m2</option>

                                                                                                    </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="" class="col-sm-3 text-right control-label col-form-label">How to Measure</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <textarea type="text" class="ckeditor form-control" id=" " placeholder="How to Measure" name="how_to" >
                                                                                                                <?php echo $val['how_to']; ?>
                                                                                                            </textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="" class="col-sm-3 text-right control-label col-form-label">Upload Video</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="file"  name="how_vid">
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

                                                    
&nbsp;&nbsp;                                                            <a href="<?= CTRL ?>Admin/view_norms/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-eye" style="color:#607d8b;"></i></a>
                                                        &nbsp;&nbsp;
                                                       
                                                            <?php if($val['active']==0){ ?>
                                                            <a href="<?= CTRL ?>Admin/activate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-check" title="Activate" style="color:#607d8b;"></i> </a>
                                                            <?php }else{ ?>
                                                            <a href="<?= CTRL ?>Admin/deactivate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-ban" title="Deactivate" style="color:#607d8b;"></i></a>
                                                            <?php } ?>
                                                        &nbsp;&nbsp;
                                                            <a href="<?= CTRL ?>Admin/delete_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-trash" title="Delete" style="color:#ff0000a6;"></i></a>
															&nbsp;&nbsp;
                                                            <a href="<?=CTRL?>Admin/print_group_1/<?php echo $val['name']; ?>/<?php echo $val['cat_id']; ?>" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>

                                                            <!--                                                            <a href="--><?//= URL ?><!--parameter1.php?id=--><?php //echo $val['param_id']; ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
															
															&nbsp;&nbsp;
<!--                                                            <a href="--><?//= URL ?><!--asdf.php?pram_id=--><?php //echo $val['param_id']; ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
														
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane">
                                    <div class="row" style="margin-top:-4%;width:50%;margin-left:50%;">
							<div class="col-md-6">
                            
							</div>
                          <div class="col-md-6">
                                    <span class="mr-4 mb-2" style="float: right;width:90px;">
									<a href="#"  data-toggle="modal" data-target="#Modal4" style="float: right;">
                                        <div class="btn btn-info">
                                            <i class="fa fa-filter"></i>
                                        </div>
                                    </a>
                                    <a href="#"  data-toggle="modal" data-target="#Modal2">
                                        <div class="btn btn-info">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </a>
                                    </span>
								</div>
							</div>
                               <br>    
								   <div class="table-responsive">
                                        <table id="zero_config1" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                
                                                <th>Low</th>
                                                <th>High</th>
                                                <th>Gender</th>
                                                <th>Age Group</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $k=0;
                                            foreach ($paramdata as $val) {
                                                if ($val['type'] == 'specific' && $val['name']!='BMI') {
                                                    if($k%8==0) {
                                                        $j=$k;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $val['name']; ?></td>

                                                            <td><?php echo $val['min']; ?><?php echo $val['unit']; ?></td>
                                                            <td><?php echo $val['max']; ?><?php echo $val['unit']; ?></td>
                                                            <td><?php echo $val['gender']; ?></td>
                                                            <td><?php if ($val['age'] == 1)
                                                                    echo "8-9 Years";
                                                                elseif ($val['age'] == 2)
                                                                    echo "10-11 Years";
                                                                elseif ($val['age'] == 3)
                                                                    echo "12-13 Years";
                                                                elseif ($val['age'] == 4)
                                                                    echo "14-16 Years";
                                                                else
                                                                    echo "NA";
                                                                ?></td>
                                                            <td>
                                                                <a href="#" data-toggle="modal"
                                                                   data-target="#Modal_<?php echo $val['param_id']; ?>">
                                                                    <i class="fa fa-edit" style="color:607d8b;"></i>
                                                                </a>
                                                                <div class="modal fade"
                                                                     id="Modal_<?php echo $val['param_id']; ?>"
                                                                     tabindex="-1" role="dialog"
                                                                     aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true ">
                                                                    <div class="modal-dialog" role="document ">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Update
                                                                                    Parameter</h5>

                                                                                <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                    <span aria-hidden="true ">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="card">
                                                                                            <?php echo form_open_multipart(CTRL . 'Admin/update_param/' . $val['param_id'] . '/' . $this->uri->segment('3'), 'class="form-horizontal"'); ?>
                                                                                            <!--                                                                                        <form class="form-horizontal" method="post" action="-->
                                                                                            <?//=CTRL
                                                                                            ?><!--Admin/update_param/-->
                                                                                            <?php //echo $val['param_id'];
                                                                                            ?><!--/-->
                                                                                            <?php //echo $this->uri->segment('3');
                                                                                            ?><!--">-->
                                                                                            <div class="card-body"
                                                                                                 id="addfieldin">
                                                                                                <div class="deletehere">
                                                                                                    <div class="form-group row">
                                                                                                        <label for="userName"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">Name</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="text"
                                                                                                                   class="form-control"
                                                                                                                   id="userName"
                                                                                                                   placeholder="Name"
                                                                                                                   name="name"
                                                                                                                   value="<?php echo $val['name']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <input name="type"
                                                                                                           value="specific"
                                                                                                           hidden>
                                                                                                    <!--                                                                                                    <div class="form-group row">-->
                                                                                                    <!--                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Type</label>-->
                                                                                                    <!--                                                                                                        <div class="col-sm-9">-->
                                                                                                    <!--                                                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type">-->
                                                                                                    <!--                                                                                                                <option value="-->
                                                                                                    <?php //echo $val['type'];
                                                                                                    ?><!--">-->
                                                                                                    <?php //echo $val['type'];
                                                                                                    ?><!--</option>-->
                                                                                                    <!--                                                                                                                <option value="genetic">Genetic</option>-->
                                                                                                    <!--                                                                                                                <option value="specific">Specific</option>-->
                                                                                                    <!--                                                                                                            </select>-->
                                                                                                    <!--                                                                                                        </div>-->
                                                                                                    <!--                                                                                                    </div>-->
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">Low</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" step=".01"
                                                                                                                   class="form-control"
                                                                                                                   id="cono1"
                                                                                                                   placeholder="Minimum value"
                                                                                                                   name="min"
                                                                                                                   value="<?php echo $val['min']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">High</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" step=".01"
                                                                                                                   class="form-control"
                                                                                                                   id="cono1"
                                                                                                                   placeholder="Maximum value"
                                                                                                                   name="max"
                                                                                                                   value="<?php echo $val['max']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-left control-label col-form-label">Which
                                                                                                            one is
                                                                                                            better
                                                                                                            performance?</label>
                                                                                                        <div class="col-sm-9">

                                                                                                            <input name="priority"
                                                                                                                   required=""
                                                                                                                   type="radio"
                                                                                                                   value="value_1"
                                                                                                                   <?php if ($val['priority'] == "value_1"){ ?>checked="checked" <?php } ?> >
                                                                                                            <label for="customControlValidation1"
                                                                                                                   style="width:54%;">Low</label>
                                                                                                            <input name="priority"
                                                                                                                   required=""
                                                                                                                   type="radio"
                                                                                                                   value="value_2"
                                                                                                                   <?php if ($val['priority'] != "value_1"){ ?>checked="checked" <?php } ?>>
                                                                                                            <label for="customControlValidation2   ">High</label>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-left control-label col-form-label">Measuring
                                                                                                            Unit</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <select class="select2 form-control custom-select"
                                                                                                                    style="width: 100%; height:36px;"
                                                                                                                    name="unit">
                                                                                                                <option value="<?php echo $val['unit']; ?>"><?php echo $val['unit']; ?></option>

                                                                                                                <option value="cm">
                                                                                                                    Centimeter
                                                                                                                </option>
                                                                                                                <option value="meter">
                                                                                                                    Meter
                                                                                                                </option>
                                                                                                                <option value="km">
                                                                                                                    KiloMeter
                                                                                                                </option>
                                                                                                                <option value="kg">
                                                                                                                    Kilogram
                                                                                                                </option>
                                                                                                                <option value="s">
                                                                                                                    Seconds
                                                                                                                </option>
                                                                                                                <option value="gm">
                                                                                                                    Grams
                                                                                                                </option>
                                                                                                                <option value="no">
                                                                                                                    Number
                                                                                                                </option>
                                                                                                                <option value="Kg/m2">
                                                                                                                    Kg/m2
                                                                                                                </option>

                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">How
                                                                                                            to
                                                                                                            Measure</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <textarea type="text" class="ckeditor form-control" id="" placeholder="How to Measure" name="how_to" >
                                                                                                                <?php echo $val['how_to']; ?>
                                                                                                            </textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for=""
                                                                                                               class="col-sm-3 text-right control-label col-form-label">Upload
                                                                                                            Video</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="file"
                                                                                                                   name="how_vid">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="border-top">
                                                                                                <div class="card-body row">
                                                                                                    <div class="col-sm-6">
                                                                                                        <button type="submit"
                                                                                                                class="btn btn-primary">
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
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

                                                                &nbsp;&nbsp;
                                                                <a href="<?= CTRL ?>Admin/view_norms/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                            class="fa fa-eye" style="color:#607d8b"></i></a>
                                                                &nbsp;&nbsp;
                                                                <?php if ($val['active'] == 0) { ?>
                                                                    <a href="<?= CTRL ?>Admin/activate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                                class="fa fa-check" title="Activate"
                                                                                style="color:#607d8b;"></i></a>
                                                                <?php } else { ?>
                                                                    <a href="<?= CTRL ?>Admin/deactivate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                                class="fa fa-ban" title="Deactivate"
                                                                                style="color:#607d8b;"></i></a>
                                                                <?php } ?>
                                                                &nbsp;&nbsp;
                                                                <a href="<?= CTRL ?>Admin/delete_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                            class="fa fa-trash" title="Delete"
                                                                            style="color:#ff0000a6;"></i></a>
                                                                &nbsp;&nbsp;
                                                                <!--                                                            <a href="-->
                                                                <?//= URL
                                                                ?><!--parameter1.php?id=-->
                                                                <?php //echo $val['param_id'];
                                                                ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
                                                                <!--															-->
                                                                <!--															&nbsp;&nbsp;-->
                                                                <!--                                                            <a href="-->
                                                                <?//= URL
                                                                ?><!--asdf.php?pram_id=-->
                                                                <?php //echo $val['param_id'];
                                                                ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
                                                                <!--															-->
                                                                <!--															&nbsp;&nbsp;-->
                                                                <a href="<?= CTRL ?>Admin/print_group/<?php echo $val['para_group_id']; ?>"
                                                                   target="_blank"><i class="fa fa-print" title="Delete"
                                                                                      style="color:#ff0000a6;"></i></a>
                                                                &ensp;
                                                                <i id="spec_<?php echo $j;?>" class="fa fa-caret-down" title="Toggle"
                                                                                                      style="color:rgba(51,95,255,0.65); font-size: 20px;">


                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $k++;
                                                    }
                                                    else{
                                                        ?>
                                                        <tr class="tog_spec_<?php echo $j;?>" style="display: none;">
                                                            <td><?php echo $val['name']; ?></td>

                                                            <td><?php echo $val['min']; ?><?php echo $val['unit']; ?></td>
                                                            <td><?php echo $val['max']; ?><?php echo $val['unit']; ?></td>
                                                            <td><?php echo $val['gender']; ?></td>
                                                            <td><?php if ($val['age'] == 1)
                                                                    echo "8-9 Years";
                                                                elseif ($val['age'] == 2)
                                                                    echo "10-11 Years";
                                                                elseif ($val['age'] == 3)
                                                                    echo "12-13 Years";
                                                                elseif ($val['age'] == 4)
                                                                    echo "14-16 Years";
                                                                else
                                                                    echo "NA";
                                                                ?></td>
                                                            <td>
                                                                <a href="#" data-toggle="modal"
                                                                   data-target="#Modal_<?php echo $val['param_id']; ?>">
                                                                    <i class="fa fa-edit" style="color:607d8b;"></i>
                                                                </a>
                                                                <div class="modal fade"
                                                                     id="Modal_<?php echo $val['param_id']; ?>"
                                                                     tabindex="-1" role="dialog"
                                                                     aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true ">
                                                                    <div class="modal-dialog" role="document ">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Update
                                                                                    Parameter</h5>

                                                                                <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                    <span aria-hidden="true ">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="card">
                                                                                            <?php echo form_open_multipart(CTRL . 'Admin/update_param/' . $val['param_id'] . '/' . $this->uri->segment('3'), 'class="form-horizontal"'); ?>
                                                                                            <!--                                                                                        <form class="form-horizontal" method="post" action="-->
                                                                                            <?//=CTRL
                                                                                            ?><!--Admin/update_param/-->
                                                                                            <?php //echo $val['param_id'];
                                                                                            ?><!--/-->
                                                                                            <?php //echo $this->uri->segment('3');
                                                                                            ?><!--">-->
                                                                                            <div class="card-body"
                                                                                                 id="addfieldin">
                                                                                                <div class="deletehere">
                                                                                                    <div class="form-group row">
                                                                                                        <label for="userName"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">Name</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="text"
                                                                                                                   class="form-control"
                                                                                                                   id="userName"
                                                                                                                   placeholder="Name"
                                                                                                                   name="name"
                                                                                                                   value="<?php echo $val['name']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <input name="type"
                                                                                                           value="specific"
                                                                                                           hidden>
                                                                                                    <!--                                                                                                    <div class="form-group row">-->
                                                                                                    <!--                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Type</label>-->
                                                                                                    <!--                                                                                                        <div class="col-sm-9">-->
                                                                                                    <!--                                                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type">-->
                                                                                                    <!--                                                                                                                <option value="-->
                                                                                                    <?php //echo $val['type'];
                                                                                                    ?><!--">-->
                                                                                                    <?php //echo $val['type'];
                                                                                                    ?><!--</option>-->
                                                                                                    <!--                                                                                                                <option value="genetic">Genetic</option>-->
                                                                                                    <!--                                                                                                                <option value="specific">Specific</option>-->
                                                                                                    <!--                                                                                                            </select>-->
                                                                                                    <!--                                                                                                        </div>-->
                                                                                                    <!--                                                                                                    </div>-->
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">Low</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" step=".01"
                                                                                                                   class="form-control"
                                                                                                                   id="cono1"
                                                                                                                   placeholder="Minimum value"
                                                                                                                   name="min"
                                                                                                                   value="<?php echo $val['min']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">High</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" step=".01"
                                                                                                                   class="form-control"
                                                                                                                   id="cono1"
                                                                                                                   placeholder="Maximum value"
                                                                                                                   name="max"
                                                                                                                   value="<?php echo $val['max']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-left control-label col-form-label">Which
                                                                                                            one is
                                                                                                            better
                                                                                                            performance?</label>
                                                                                                        <div class="col-sm-9">

                                                                                                            <input name="priority"
                                                                                                                   required=""
                                                                                                                   type="radio"
                                                                                                                   value="value_1"
                                                                                                                   <?php if ($val['priority'] == "value_1"){ ?>checked="checked" <?php } ?> >
                                                                                                            <label for="customControlValidation1"
                                                                                                                   style="width:54%;">Low</label>
                                                                                                            <input name="priority"
                                                                                                                   required=""
                                                                                                                   type="radio"
                                                                                                                   value="value_2"
                                                                                                                   <?php if ($val['priority'] != "value_1"){ ?>checked="checked" <?php } ?>>
                                                                                                            <label for="customControlValidation2   ">High</label>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-left control-label col-form-label">Measuring
                                                                                                            Unit</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <select class="select2 form-control custom-select"
                                                                                                                    style="width: 100%; height:36px;"
                                                                                                                    name="unit">
                                                                                                                <option value="<?php echo $val['unit']; ?>">
                                                                                                                    <?php echo $val['unit']; ?>
                                                                                                                </option>
                                                                                                                <option value="cm">
                                                                                                                    Centimeter
                                                                                                                </option>
                                                                                                                <option value="meter">
                                                                                                                    Meter
                                                                                                                </option>
                                                                                                                <option value="km">
                                                                                                                    KiloMeter
                                                                                                                </option>
                                                                                                                <option value="kg">
                                                                                                                    Kilogram
                                                                                                                </option>
                                                                                                                <option value="s">
                                                                                                                    Seconds
                                                                                                                </option>
                                                                                                                <option value="gm">
                                                                                                                    Grams
                                                                                                                </option>
                                                                                                                <option value="no">
                                                                                                                    Number
                                                                                                                </option>
                                                                                                                <option value="Kg/m2">
                                                                                                                    Kg/m2
                                                                                                                </option>

                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1"
                                                                                                               class="col-sm-3 text-right control-label col-form-label">How
                                                                                                            to
                                                                                                            Measure</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <textarea
                                                                                                                    type="text"
                                                                                                                    class="ckeditor form-control"
                                                                                                                    id=""
                                                                                                                    placeholder="How to Measure"
                                                                                                                    name="how_to"
                                                                                                                    >
                                                                                                                <?php echo $val['how_to']; ?>
                                                                                                            </textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for=""
                                                                                                               class="col-sm-3 text-right control-label col-form-label">Upload
                                                                                                            Video</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="file"
                                                                                                                   name="how_vid">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="border-top">
                                                                                                <div class="card-body row">
                                                                                                    <div class="col-sm-6">
                                                                                                        <button type="submit"
                                                                                                                class="btn btn-primary">
                                                                                                            Submit
                                                                                                        </button>
                                                                                                    </div>
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

                                                                &nbsp;&nbsp;
                                                                <a href="<?= CTRL ?>Admin/view_norms/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                            class="fa fa-eye" style="color:#607d8b"></i></a>
                                                                &nbsp;&nbsp;
                                                                <?php if ($val['active'] == 0) { ?>
                                                                    <a href="<?= CTRL ?>Admin/activate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                                class="fa fa-check" title="Activate"
                                                                                style="color:#607d8b;"></i></a>
                                                                <?php } else { ?>
                                                                    <a href="<?= CTRL ?>Admin/deactivate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                                class="fa fa-ban" title="Deactivate"
                                                                                style="color:#607d8b;"></i></a>
                                                                <?php } ?>
                                                                &nbsp;&nbsp;
                                                                <a href="<?= CTRL ?>Admin/delete_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i
                                                                            class="fa fa-trash" title="Delete"
                                                                            style="color:#ff0000a6;"></i></a>
                                                                &nbsp;&nbsp;
                                                                <!--                                                            <a href="-->
                                                                <?//= URL
                                                                ?><!--parameter1.php?id=-->
                                                                <?php //echo $val['param_id'];
                                                                ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
                                                                <!--															-->
                                                                <!--															&nbsp;&nbsp;-->
                                                                <!--                                                            <a href="-->
                                                                <?//= URL
                                                                ?><!--asdf.php?pram_id=-->
                                                                <?php //echo $val['param_id'];
                                                                ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
                                                                <!--															-->
                                                                <!--															&nbsp;&nbsp;-->
                                                                <a href="<?= CTRL ?>Admin/print_group/<?php echo $val['para_group_id']; ?>"
                                                                   target="_blank"><i class="fa fa-print" title="Delete"
                                                                                      style="color:#ff0000a6;"></i></a>


                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $k++;
                                                    }
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane">
                                    <div class="row" style="margin-top:-4%;width:50%;margin-left:50%;">
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">
                                    <span class="mr-4 mb-2" style="float: right;width:90px;">
                                    <a href="#"  data-toggle="modal" data-target="#Modal9">
                                        <?php
                                        $flag=0;
                                        foreach ($paramdata as $val) {
                                            if ($val['type'] == 'specific' && $val['name'] == 'BMI') {
                                                $flag = 1;
                                                break;
                                            }
                                        }
                                        if($flag==0) {
                                            ?>
                                            <div class="btn btn-info">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                            <?php
                                        }
                                        ?>
                                    </a>
                                    </span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table id="zero_config4" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>

                                                <th>Low</th>
                                                <th>High</th>
                                                <th>Gender</th>
                                                <th>Age Group</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($paramdata as $val) {
                                                if ($val['type'] == 'specific' && $val['name']=='BMI') {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $val['name']; ?></td>

                                                        <td><?php echo $val['min']; ?> <?php echo $val['unit']; ?></td>
                                                        <td><?php echo $val['max']; ?> <?php echo $val['unit']; ?></td>
                                                        <td><?php echo $val['gender']; ?></td>
                                                        <td><?php
                                                                echo "NA";
                                                            ?></td>
                                                        <td>
                                                            <a href="#"  data-toggle="modal" data-target="#Modal_<?php echo $val['param_id']; ?>">
                                                                <i class="fa fa-edit" style="color:607d8b;"></i>
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
                                                                                        <?php echo form_open_multipart(CTRL.'Admin/update_param_bmi/'.$val['param_id'].'/'.$this->uri->segment('3') , 'class="form-horizontal"');?>

                                                                                        <!--                                                                                        <form class="form-horizontal" method="post" action="--><?//=CTRL?><!--Admin/update_param_bmi/--><?php //echo $val['param_id']; ?><!--/--><?php //echo $this->uri->segment('3'); ?><!--">-->
                                                                                            <div class="card-body" id="addfieldin">
                                                                                                <div class="deletehere">
<!--                                                                                                    <div class="form-group row">-->
<!--                                                                                                        <label for="userName" class="col-sm-3 text-right control-label col-form-label">Name</label>-->
<!--                                                                                                        <div class="col-sm-9">-->
                                                                                                            <input hidden type="text" class="form-control" id="userName" placeholder="Name" name="name" value="<?php echo $val['name']; ?>">
<!--                                                                                                        </div>-->
<!--                                                                                                    </div>-->
<!--                                                                                                    <div class="form-group row">-->
<!--                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Type</label>-->
<!--                                                                                                        <div class="col-sm-9">-->
<!--                                                                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type">-->
<!--                                                                                                                <option value="--><?php //echo $val['type']; ?><!--">--><?php //echo $val['type']; ?><!--</option>-->
<!--                                                                                                                <option value="genetic">Genetic</option>-->
<!--                                                                                                                <option value="specific">Specific</option>-->
<!--                                                                                                            </select>-->
<!--                                                                                                        </div>-->
<!--                                                                                                    </div>-->
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Lean</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" class="form-control" id="cono1" placeholder="Minimum value" name="low" value="<?php echo $val['min']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Fit</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" class="form-control" id="cono1" placeholder="Minimum value" name="med" value="<?php echo ($val['max']-$val['min'])/2; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Obese</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="number" class="form-control" id="cono1" placeholder="Maximum value" name="high" value="<?php echo $val['max']; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">How to Measure</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <textarea type="text" class="ckeditor form-control" id="" name="how_to" >
                                                                                                                <?php echo $val['how_to']; ?>
                                                                                                            </textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <label for="" class="col-sm-3 text-right control-label col-form-label">Upload Video</label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="file"  name="how_vid">
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

                                                            &nbsp;&nbsp;
                                                            <a href="<?= CTRL ?>Admin/view_norms/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-eye" style="color:#607d8b"></i></a>
                                                            &nbsp;&nbsp;
                                                            <?php if($val['active']==0){ ?>
                                                                <a href="<?= CTRL ?>Admin/activate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-check" title="Activate" style="color:#607d8b;"></i></a>
                                                            <?php }else{ ?>
                                                                <a href="<?= CTRL ?>Admin/deactivate_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-ban" title="Deactivate" style="color:#607d8b;"></i></a>
                                                            <?php } ?>
                                                            &nbsp;&nbsp;
                                                            <a href="<?= CTRL ?>Admin/delete_param/<?php echo $val['param_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-trash" title="Delete" style="color:#ff0000a6;"></i></a>
                                                            &nbsp;&nbsp;
<!--                                                            <a href="--><?//= URL ?><!--parameter1.php?id=--><?php //echo $val['param_id']; ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
<!---->
<!--                                                            &nbsp;&nbsp;-->
<!--                                                            <a href="--><?//= URL ?><!--asdf.php?pram_id=--><?php //echo $val['param_id']; ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
<!---->
<!--                                                            &nbsp;&nbsp;-->
<!--                                                            <a href="--><?//= URL ?><!--new.php?group_id=--><?php //echo $val['para_group_id']; ?><!--" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>-->
                                                            <a href="<?=CTRL?>Admin/print_group_2/<?php echo $val['cat_id']; ?>" target="_blank"><i class="fa fa-print" title="Delete" style="color:#ff0000a6;"></i></a>


                                                        </td>
                                                    </tr>
                                                    <?php
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="<?=CTRL?>Admin/total_var/<?php echo $this->uri->segment('3'); ?>">
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" style="font-weight: bold;">Total Variability of Sport</label>
                                    <?php
                                    foreach ($vardata as $var) {
                                        ?>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="cono1" placeholder="Total Variability"
                                                   name="total_var" value="<?php echo $var['total_var']; ?>">
                                        </div>
                                        <?php
                                    }
                                    ?>
<!--                                    <div class="col-sm-3"><button type="submit" class="btn btn-primary">Change</button></div>-->
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
                            <div class="text-right my-2 mx-3">
                                <a href="#"  data-toggle="modal" data-target="#Modal5">
                                    <div class="btn btn-info">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Group</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <form class="form-horizontal" method="post" action="<?=CTRL?>Admin/add_new_group/<?php echo $this->uri->segment('3'); ?>">
                                                            <div class="card-body" id="addfieldin">
                                                                <div class="deletehere">
                                                                    <div class="form-group row">
                                                                        <label for="userName" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="userName" placeholder="Name" name="name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Parameters</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="select2 form-control custom-select" required style="width: 100%; height:100px;" name="param[]" size="10" multiple>
                                                                                <?php
                                                                                foreach($paramdata1 as $val) {
                                                                                    ?>
                                                                                    <option value="<?php echo $val['para_group_id']; ?>"><?php echo $val['name']; ?></option>
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Group Variability </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="cono1" placeholder="Group Variability " name="group_reliability" required>
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
                            <h4 class="card-title" id="d_groups">Group List </h4>

                            <div class="table-responsive">
                                <h5 id="error" style="color:red; text-align: center;"></h5>
                                <table id="zero_config3" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Variability</th>
                                        <th>Parameters</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($groupdata as $val) {
                                        ?>
                                        <tr>
                                            <td><?php echo $val['name']; ?></td>
                                            <td><?php echo $val['group_reliability']; ?></td>
                                            <td>
                                                <table class="table table-striped table-bordered">
                                            <?php
                                            $count=0;
                                            foreach ($coldata as $var) {
                                                if ($val['group_id'] == $var['group_id']) {
                                                    $count++;
                                                ?>
                                                    <tr>
                                                <td><?php echo $var['name']; ?></td>
                                                <td><?php echo $var['loading']; ?></td>
                                                    </tr>
                                                <?php
                                            }}
                                            if($count==0) {

                                                ?>
                                                <tr>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                                </table>
                                            </td>
                                            <td><a href="<?=CTRL?>Admin/view_group/<?php echo $val['group_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-eye" style="color:#607d8b;"></i></a>
                                            &nbsp;&nbsp;<a href="<?=CTRL?>Admin/delete_group/<?php echo $val['group_id']; ?>/<?php echo $this->uri->segment('3'); ?>"><i class="fa fa-trash" style="color:#ff0000a6;"></i></a></td>

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
    $('#zero_config1').DataTable(
        "paging":   false
    );
    $('#zero_config3').DataTable();
    $('#zero_config4').DataTable();
    $("#addfield").click(function(){


        $("#addfieldin").append('<div class="deletehere"><div class="form-group row"><label for="userName" class="col-sm-3 text-right control-label col-form-label">Group ID</label><div class="col-sm-9"><input type="text" class="form-control" id="userName" placeholder="Group ID"></div></div> <div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Variable</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Physical Variable Name"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Minimum</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Minimum value of Field"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Maximum</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Maximum value of Field"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">Loading</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="Loading Factor"></div></div><div class="form-group row"><label for="cono1" class="col-sm-3 text-right control-label col-form-label">How</label><div class="col-sm-9"><input type="text" class="form-control" id="cono1" placeholder="How to Measure"></div></div><div class="form-group row"><div for="" class="col-sm-6 "></div><div class="col-sm-6 text-right"><div class=" btn btn-warning" id="removebtn">Delete</div></div></div></div>');


    });

    $("body").on("click","#removebtn",function(e){
        $(this).parents('.deletehere').remove();
    });
</script>
<script>
//     $(document).ready(function(){
//     $('#sample_1').on('change',function(){
//         var selection = $(this).val();
        
//         alert(selection);
//         });
// });
</script>
<script>
    $(document).ready(function(){
        if(window.location.hash) {
            var type = window.location.hash.substr(1);
            if(type=="error"){
                $("#error").html("Total variability of a sport cannot exceed 100");
            }
            if(type=="para"){
                $("#error").html("One paramater can be used in one group only");
            }
            if(type=="param"){
                $("#assessment").html("This name is already used for the parameter of same type");
            }
            if(type=="assessment"){
                $("#assessment").html("The Parameter is already used in some Assessment. Hence, cannot be deleted");
            }
        }
    });
</script>
<script>
    $(document).ready(function(){
    $(function() {
        var lastTab = localStorage.getItem('lastTab');
        $('.container, .tab-content').removeClass('hidden');
        if (lastTab) {
            $('[data-target="' + lastTab + '"]').tab('show');
        }
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            localStorage.setItem('lastTab', $(this).data('target'));
        });
    });
    });
</script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( '#how_to_1' );
    </script>
<script>
    CKEDITOR.replace( '#check789' );
</script>
<script>
    $(document).ready(function(){
        <?php
        for($i=0;$i<$k;$i=$i+8){
        ?>
            $("#spec_<?php echo $i;?>").click(function(){
                $(".tog_spec_<?php echo $i;?>").toggle();
            });
        <?php
        }
        ?>

    });
</script>
<script>
    function myFunction78(pl) {
        if(pl=='static'){
            localStorage.setItem("type", "static");
        }
        else if(pl=='genetic'){
            localStorage.setItem("type", "genetic");
        }
        else{
            localStorage.setItem("type", "bmi");
        }
    }
    function myFunction858(){
        if(localStorage.getItem("type")=='bmi'){
            document.getElementById("menu21").classList.add('active', 'btn-active');
            document.getElementById("menu2").classList.add('show', 'active');
            document.getElementById("menu1").classList.add('fade');
            document.getElementById("home").classList.add('fade');
        }
        else if(localStorage.getItem("type")=='static')
        {
            document.getElementById("menu11").classList.add('active', 'btn-active');
            document.getElementById("menu1").classList.add('show', 'active');
            document.getElementById("menu2").classList.add('fade');
            document.getElementById("home").classList.add('fade');
        }
        else
        {
            document.getElementById("home1").classList.add('active', 'btn-active');
            document.getElementById("home").classList.add('show', 'active');
            document.getElementById("menu2").classList.add('fade');
            document.getElementById("menu1").classList.add('fade');
        }
    }
</script>
</body>

</html>
