<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 23-Oct-18
 * Time: 12:33 AM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Talent Identification</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=THEME?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=THEME?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=THEME?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=THEME?>css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=THEME?>css/themes/all-themes.css" rel="stylesheet" />
    <style>
        .card {
            background: #fff;
            min-height: 50px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            margin-bottom: 30px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            -ms-border-radius: 2px;
            border-radius: 2px;
        }
        .card .header {
            color: #555;
            padding: 20px;
            position: relative;
            border-bottom: 1px solid rgba(204, 204, 204, 0.35);
        }
        .card .body {
            font-size: 14px;
            color: #555;
            padding: 20px;
        }
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }
        .table tbody tr td, .table tbody tr th {
            padding: 10px;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding-left: 46px;
        }
    </style>
</head>


<body style="background-color:#fff;">


<div class="header">
    <h2 style="text-align:center;">
        Student Report

    </h2>

    <form id="form_validation" method="POST" action="<?php echo base_url()."index.php/"?>Reports/ExportCSVFile" target="_blank">
        <!-- <input type="hidden" name="data" value="<?php print_r($data)?>">-->
        <button name="export" style="float:right;">csv_report</button>
    </form>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header" style="background-color:#ef4e24;">

            <h2 style="color:#fff;text-align:center;">

               




            </h2>
        </div>

        <div class="body table-responsive">
            <!--	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a name" style="float:right;margin-bottom:1%;">-->
            <table class="table table" id="myTable">
                <thead>

                <th><b>Sr. No.</b></th>
                <!--	<th>OPD Registration Date</th>-->

                <th>Name</th>

                <th><b>Type</b></th>
                <th><b>How to Measure</b></th>

                </thead>


                <tbody>
                <?php

                $sr=1;
                //while($data[$i])
                //for($i=0;$i<sizeof($data);$i++) {

                if(isset($data))
                {
                    foreach($data as $val) {
                       
                        ?>


                        <tr>

                            <td> <?php print_r($sr); $sr++; ?> </td>

                            <!--	<td> <?php /* print_r($data[$i]['Registration_Date_Time']); */?> </td>-->


                            <td> <?php print_r($val['name']);?> </td>

                            <td> <?php print_r($val['type']);;?> </td>
                            <td> <?php print_r($val['how_to']);?> </td>
                        </tr>
                    <?php }
                } else { ?>

                    <div class="header" style="background-color:#ef4e24;">

                        <h2 style="color:#fff;text-align:center;">

                            No Record Found


                        </h2>
                    </div>

                <?php } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>
</div>




</div>


<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                 <div class="header" style="background-color:#ef4e24;">
                    <h2 style="color:#fff;text-align:center;">
                    2018-03-23 03:15:49pm

                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table">
                        <thead>
                            <tr>
                              <th>OPD No.</th>
                                     <th>Patient First Name</th>
                                     <th>Middle Name</th>
                                     <th>Last Name</th>
                                    <th>age</th>
                                    <th>gender</th>
                                    <th>dob</th>
                                    <th>address</th>
                                    <th>Problem</th>
                                    <th>Diagnostics</th>
                                    <th>Amount</th>
                            </tr>

                        </thead>
                        <tbody>


                            <tr>

                                <td>No Records to show</td>
                            </tr>


                   </tbody>
                    </table>
                <p style="text-align:right;">	Total Amount:</p>
                </div>
            </div>
        </div>-->
</div>




</div>

<script>
    function myFunction() {
        //alert("disha");
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>



<!-- Jquery Core Js -->
<script src="<?=THEME?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?=THEME?>plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?=THEME?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?=THEME?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?=THEME?>plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?=THEME?>plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?=THEME?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="<?=THEME?>js/admin.js"></script>


<!-- Demo Js -->
<script src="<?=THEME?>js/demo.js"></script>
</body>

</html>
