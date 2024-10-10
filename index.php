<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Smart Grant ChatTool | Dashboard</title>
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

        <div class="mt-4">
            <div class="d-flex align-items-center">
                <h1 class="site_title pe-2">Smart Grant ChatTool</h1>
                <img src="assets/images/Dashboard-color.png" alt="Dashboard" title="Dashboard" class="title_icon">
            </div>
            <h3 class="mt-2">Powered by : OpenAI-Retriver</h3>
        </div>

        <hr>

        <div class="mt-5">
            <div class="card_box">
                <div class="dashboard_cards card_color1">
                    <!-- <i class="fa-solid fa-database"></i> -->
                    <img src="assets/images/Total Data.png" alt="Data" title="Data" class="card_icon">
                    <h3>10,000 +</h3>
                    <p>Total Data</p>
                </div>
                <div class="dashboard_cards card_color2">
                    <!-- <i class="fa-solid fa-users-line"></i> -->
                    <img src="assets/images/Profiles.png" alt="Profiles" title="Profiles" class="card_icon">
                    <h3>4500 +</h3>
                    <p>Profiles</p>
                </div>
                <div class="dashboard_cards card_color3">
                    <!-- <i class="fa-solid fa-hand-holding-dollar"></i> -->
                    <img src="assets/images/Revenue.png" alt="Revenue" title="Revenue" class="card_icon">
                    <h3>7,00,000 +</h3>
                    <p>Revenue</p>
                </div>
                <div class="dashboard_cards card_color4">
                    <!-- <i class="fa-solid fa-people-group"></i> -->
                    <img src="assets/images/Visitors.png" alt="Visitors" title="Visitors" class="card_icon">
                    <h3>5,000 +</h3>
                    <p>Visitors</p>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="assets/js/script.js"></script>

</body>
</html>
