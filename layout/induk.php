<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="DMS" />

    <title>e-ISO MBPP</title>

    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="../images/MBPP_2.png">
    <!-- Pignose Calender -->
    <link href="../plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <?php
    // include('loader.php') 
    ?>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">



        <?php
        include('navbar.php');
        ?>

        <?php
        include('sidebar.php');
        ?>



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <?php include $content; ?>


                <!-- #/ container -->
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Hak Cipta Terpelihara Majlis Bandaraya Pulau Pinang &#169; 2023</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="../plugins/common/common.min.js"></script>
        <script src="../js/custom.min.js"></script>
        <script src="../js/settings.js"></script>
        <script src="../js/gleek.js"></script>
        <script src="../js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="../plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="../plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="../plugins/d3v3/index.js"></script>
        <script src="../plugins/topojson/topojson.min.js"></script>
        <script src="../plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="../plugins/raphael/raphael.min.js"></script>
        <script src="../plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="../plugins/moment/moment.min.js"></script>
        <script src="../plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="../plugins/chartist/js/chartist.min.js"></script>
        <script src="../plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



        <script src="../js/dashboard/dashboard-1.js"></script>

</body>

</html>