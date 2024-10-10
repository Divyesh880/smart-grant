<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Ask A Question | Smart Grant ChatTool</title>
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
                <h1 class="site_title pe-2">Ask A Question</h1>
                <img src="assets/images/Ask_Question_orange.png" alt="Question" title="Question" class="title_icon">
            </div>
        </div>

        <hr>

        <div class="mb-4">
            <div class="py-2">
                <div>
                    <label class="fs-5 text-body-secondary taxtbox_label">You:</label>
                </div>
                <div class="text_box_wrap">
                    <input type="text" placeholder="Type Your Question" class="site_textbox">
                    <button type="button" class="btn site_btn textbox_btn">Send</button>
                </div>
            </div>
        </div>

        <div class="table_functions_btn">
            <img src="assets/images/fullscreen_orange.png" id="fullscreenBtn" alt="Fullsreen View" title="Fullsreen View">
            <img src="assets/images/print_orange.png" id="printBtn" alt="Print or Download Table" title="Print or Download Table">
        </div>

        <div class="table-responsive" id="tableContainer">
            <table class="table table-bordered table_font">
                <thead>
                    <tr class="purple_bg_color">
                        <td class="text-nowrap">Model</td>
                        <td class="text-nowrap">Output</td>
                        <td class="text-nowrap">Input Token</td>
                        <td class="text-nowrap">Cost</td>
                        <td class="text-nowrap">Response Time (sec)</td>
                        <td class="text-nowrap">Document Source</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                        <td>Model</td>
                        <td>Output</td>
                        <td>Input Token</td>
                        <td>Cost</td>
                        <td>Response Time (sec)</td>
                        <td>Document Source</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Model</td>
                        <td>Output</td>
                        <td>Input Token</td>
                        <td>Cost</td>
                        <td>Response Time (sec)</td>
                        <td>Document Source</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Model</td>
                        <td>Output</td>
                        <td>Input Token</td>
                        <td>Cost</td>
                        <td>Response Time (sec)</td>
                        <td>Document Source</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script src="assets/js/script.js"></script>

</body>
</html>
