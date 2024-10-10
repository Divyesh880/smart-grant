<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Batch Processing | Smart Grant ChatTool</title>
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
                <h1 class="site_title pe-2">Batch Processing Tool</h1>
                <img src="assets/images/Batch_Processing_orange.png" alt="Batch Processing" title="Batch Processing" class="title_icon">
            </div>
            <h5 class="mt-2">Upload a CSV or Excel file with questions, or paste your comma-separated questions below. The tool will generate responses for each.</h5>
        </div>

        <hr>

        <div class="mb-4">
            <h5 class="mt-4">Or paste your comma-separated questions here</h5>
            <textarea rows="6" class="site_textarea"></textarea>
        </div>

        <div class="mb-4">
            <h5 class="mt-4">Upload your CSV or Excel file</h5>
            <div id="drop-area">
                <img id="download-icon" src="assets/images/upload.png" alt="Upload Icon">
                <h2>Drag and Drop File Here</h2>
                <input type="file" id="fileElem" multiple accept=".csv, .xls, .xlsx" style="display:none;">
                <label for="fileElem" id="fileLabel" class="select_file_text">or <span>browse file</span> from your device</label><br>
                <span class="text-secondary limit_text">Limit 200MB per file - CSV, XLSX</span>
            </div>
            <div id="file-list"></div>
        </div>

        <div>
            <button type="submit" class="btn site_btn textbox_btn">Submit</button>
        </div>

    </div>
</div>

<script>
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('fileElem');
    const fileList = document.getElementById('file-list');

    dropArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        dropArea.classList.add('hover');
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('hover');
    });

    dropArea.addEventListener('drop', (event) => {
        event.preventDefault();
        dropArea.classList.remove('hover');
        const files = event.dataTransfer.files;
        handleFiles(files);
    });

    fileInput.addEventListener('change', (event) => {
        const files = event.target.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        fileList.innerHTML = ''; // Clear previous file names
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const fileItem = document.createElement('div');
            fileItem.className = 'file-item';
            fileItem.textContent = file.name; // Show only the file name
            fileList.appendChild(fileItem);
        }
    }
</script>

<script src="assets/js/script.js"></script>

</body>
</html>
