<?php
require_once '../../../tabs.php';
?>
<!DOCTYPE html>
<html>

<head>

    <title>jqGrid PHP Demo</title>
    <script src="../../../js/jquery-1.7.min.js" type="text/javascript"></script>
    <script src="../../../js/i18n/grid.locale-en.js" type="text/javascript"></script>
    <script>
        $(function() {
            $("#tabs").tabs();
        });
    </script>

    <script type="text/ecmascript" src="../../../js/jquery.jqGrid.min.js"></script>
    <script type="text/ecmascript" src="../../../js/trirand/jquery.jqGrid.min.js"></script>

    <script src="../../../js/jquery-ui-custom.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="../../../themes/bootstrap/css/bootstrap.min.css">
    <!-- The link to the CSS that the grid needs -->
    <link rel="stylesheet" type="text/css" media="screen" href="../../../themes/trirand/ui.jqgrid-bootstrap.css" />

    <script>
        $.jgrid.defaults.width = 780;
        $.jgrid.defaults.responsive = true;
        $.jgrid.defaults.styleUI = 'Bootstrap';
    </script>
    <script src="../../../themes/bootstrap/js/bootstrap.min.js"></script>


    <style type="text/css">
        .myAltRowClass {
            background-color: #DDDDDC;
            background-image: none;
        }

        /*.myAltRowClass { background: #DDDDDC; }*/
    </style>
    <link rel="stylesheet" type="text/css" href="../../../themes/redmond/jquery-ui.css">
</head>

<body>
    <div>
        <?php include("population.php"); ?>
    </div>
    <!-- -->
</body>

</html>