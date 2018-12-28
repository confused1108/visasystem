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
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
</head>


<body style="background-color:#fff;">


<div class="header">
    <h2 style="text-align:center;">
       Report

    </h2>


</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <?php
        if($type=='genetic') {
            ?>
            <div class="container">
<!--                <br>-->
<!--                <br>-->
<!--                <h4 style="text-align: center;">--><?php //echo $name; ?><!--</h4>-->
                <br>
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                    <th>Score</th>
                    <th>Male</th>
                    <th>Female</th>
                    </thead>
                    <tbody>
                    <?php
                    for($j=0;$j<$num;$j++) {
                        ?>
                        <tr>
                            <td style="font-weight: bold;">Name</td>
                            <td><?php echo $one[$j][0]['name']; ?></td>
                            <td></td>
                        </tr>
                        <?php
                        for ($i = 0; $i < 22; $i++) {
                            ?>
                            <tr>
                                <td><?php echo $one[$j][$i]['score']; ?></td>
                                <td><?php echo $one[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $two[$j][$i]['lower_limit']; ?></td>
                            </tr>
                            <?php
                        }
                        echo "<tr><td></td><td></td><td></td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <?php
        }
        else{
            ?>
            <div class="container">
                <br>
                <table class="table table-striped table-bordered" id="example1">
                    <thead>
                    <th>Score</th>
                    <th>Male (8-9 Years)</th>
                    <th>Female (8-9 Years)</th>
                    <th>Male (10-11 Years)</th>
                    <th>Female (10-11 Years)</th>
                    <th>Male (12-13 Years)</th>
                    <th>Female (12-13 Years)</th>
                    <th>Male (14-16 Years)</th>
                    <th>Male (14-16 Years)</th>
                    </thead>
                    <tbody>
                    <?php
                    for($j=0;$j<$num1;$j++) {
                        ?>
                        <tr>
                            <td style="font-weight: bold;">Name</td>
                            <td><?php echo $one[$j][0]['name']; ?></td>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                        <?php
                        for ($i = 0; $i < 22; $i++) {
                            ?>
                            <tr>
                                <td><?php echo $one[$j][$i]['score']; ?></td>
                                <td><?php echo $one[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $two[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $three[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $four[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $five[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $six[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $seven[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $eight[$j][$i]['lower_limit']; ?></td>
                            </tr>
                            <?php
                        }
                        echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered" id="example2">
                    <thead>
                    <th>Score</th>
                    <th>Male</th>
                    <th>Female</th>
                    </thead>
                    <tbody>
                    <?php
                    for($j=0;$j<$num2;$j++) {
                        ?>
                        <tr>
                            <td style="font-weight: bold;">Name</td>
                            <td><?php echo $nine[$j][0]['name']; ?></td>
                            <td></td>
                        </tr>
                        <?php
                        for ($i = 0; $i < 22; $i++) {
                            ?>
                            <tr>
                                <td><?php echo $nine[$j][$i]['score']; ?></td>
                                <td><?php echo $nine[$j][$i]['lower_limit']; ?></td>
                                <td><?php echo $ten[$j][$i]['lower_limit']; ?></td>
                            </tr>
                            <?php
                        }
                        echo "<tr><td></td><td></td><td></td></tr>";
                    }
                    ?>
                    </tbody>
                </table>

            </div>
            <?php
        }
        ?>
    </div>
</div>
</div>




</div>
</div>




</div>

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
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "paging":   false,
            "searching":false,
            "ordering":false,
            "info":false,
            "scrollX": true,
            lengthChange: false,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
        $('#example1').DataTable( {
            "paging":   false,
            "searching":false,
            "ordering":false,
            "info":false,
            "scrollX": true,
            lengthChange: false,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
        $('#example2').DataTable( {
            "paging":   false,
            "searching":false,
            "ordering":false,
            "info":false,
            "scrollX": true,
            lengthChange: false,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>
</body>

</html>
