<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 30-Oct-18
 * Time: 9:57 AM
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
    <link rel="stylesheet" type="text/css" href="<?=THEME?>assets/extra-libs/multicheck/multicheck.css">
    <link href="<?=THEME?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?=THEME?>dist/css/style.min.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=THEME?>css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br>
    <br>
    <h4 style="text-align: center;"><?php echo $name; ?></h4>
    <br>
    <table class="table table-striped table-bordered" id="example">
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
        for($j=0;$j<$num;$j++) {
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
<script src="<?=THEME?>assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="<?=THEME?>assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>

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
        var table = $('#example').DataTable( {
            "paging":   false,
            "ordering":false,
            lengthChange: false,
            buttons: [ 'excel' ]
        } );

        table.buttons().container()
            .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
    } );
</script>
</body>
</html>

