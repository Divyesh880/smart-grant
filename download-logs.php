<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Download Logs | Smart Grant ChatTool</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Bootstrap 5.3.3-->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'sidebar.php';?>

<div id="main_container">

    <?php include 'header.php';?>

    <div class="content_body">

        <div class="my-4">
            <div class="d-flex align-items-center">
                <h1 class="site_title pe-2">Download Logs</h1>
                <img src="assets/images/Download_orange.png" alt="Download Logs" title="Download Logs" class="title_icon">
            </div>
            <h4 class="mt-2">Below is a table showing who downloaded the files and when</h4>
        </div>

        <hr>

        <div class="table_functions_btn">
            <img src="assets/images/fullscreen_orange.png" id="fullscreenBtn" alt="Fullsreen View" title="Fullsreen View">
            <img src="assets/images/print_orange.png" id="printBtn" alt="Print or Download Table" title="Print or Download Table">
        </div>

        <div class="table-responsive" id="tableContainer">
            <table class="table table-bordered table_font">
                <thead>
                    <tr class="purple_bg_color">
                        <td class="text-nowrap">User</td>
                        <td class="text-nowrap">Date</td>
                        <td class="text-nowrap">Time</td>
                        <td class="text-nowrap">Timestamp</td>
                        <td class="text-nowrap">Filename</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                        <td>Oliver Smith</td>
                        <td>02-09-2024</td>
                        <td>00:25:32</td>
                        <td>202406_429</td>
                        <td>Responses_202406_429.csv</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Amelia Jones</td>
                        <td>12-09-2024</td>
                        <td>00:25:32</td>
                        <td>202406_429</td>
                        <td>Responses_202406_429.csv</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>William Brown</td>
                        <td>23-09-2024</td>
                        <td>00:25:32</td>
                        <td>202406_429</td>
                        <td>Responses_202406_429.csv</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Isla Johnson</td>
                        <td>28-09-2024</td>
                        <td>00:25:32</td>
                        <td>202406_429</td>
                        <td>Responses_202406_429.csv</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>James Taylor</td>
                        <td>06-10-2024</td>
                        <td>00:25:32</td>
                        <td>202406_429</td>
                        <td>Responses_202406_429.csv</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Sophia Williams</td>
                        <td>14-10-2024</td>
                        <td>00:25:32</td>
                        <td>202406_429</td>
                        <td>Responses_202406_429.csv</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Henry Davis</td>
                        <td>18-10-2024</td>
                        <td>00:25:32</td>
                        <td>202406_429</td>
                        <td>Responses_202406_429.csv</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script src="assets/js/script.js"></script>

</body>
</html>
