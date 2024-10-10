<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Login | Smart Grant ChatTool</title>
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
                <h1 class="site_title pe-2">Welcome To Smart Grant</h1>
            </div>
        </div>

        <div class="login_box">
            <div class="box_text">
                <h2 class="text-center box_title">Login</h2>
                <p class="text-center">Login with your Username and Password</p>
            </div>
            <form>
                <div class="mb-3">
                    <label for="username" class="fs-5 text-body-secondary">Username</label>
                    <input type="text" id="username" placeholder="Username" class="site_textbox" required>
                </div>
                <div class="mb-4 position-relative">
                    <label for="password" class="fs-5 text-body-secondary">Password</label>
                    <input type="password" id="password" placeholder="Password" class="site_textbox" required>
                    <span id="togglePassword" class="eye-icon" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye" id="eyeIcon"></i>
                    </span>
                </div>
                <button type="submit" class="btn site_btn textbox_btn mt-2">Login</button>
            </form>
        </div>

    </div>
</div>

<script src="assets/js/script.js"></script>

</body>
</html>
