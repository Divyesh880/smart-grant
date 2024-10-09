let isNavOpen = window.innerWidth > 768; 
let dropdownVisible = false; 

function toggleNav() {
    if (isNavOpen) {
        closeNav();
    } else {
        openNav();
    }
}

function openNav() {
    document.getElementById("sidebar").style.width = "350px";
    document.getElementById("main_container").style.marginLeft = window.innerWidth <= 768 ? "70px" : "350px"; 
    isNavOpen = true;
    document.getElementById("sidebar").classList.remove('collapsed');
    document.getElementById("sidebar").classList.add('open_collapsed');
}

function closeNav() {
    document.getElementById("sidebar").style.width = "70px"; 
    document.getElementById("main_container").style.marginLeft = window.innerWidth <= 768 ? "70px" : "70px"; 
    isNavOpen = false;
    document.getElementById("sidebar").classList.add('collapsed');
    document.getElementById("sidebar").classList.remove('open_collapsed');
}

function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash'); // Change icon to closed eye
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye'); // Change icon to open eye
    }
}

// Automatically open the sidebar when the page loads if wider than 768px
window.onload = function() {
    if (isNavOpen) {
        openNav();
    }
};

// Optional: Update the sidebar state on window resize
window.onresize = function() {
    if (window.innerWidth > 768 && !isNavOpen) {
        openNav();
    } else if (window.innerWidth <= 768 && isNavOpen) {
        closeNav();
    }
};

function toggleDropdown() {
    document.getElementById("profile_dropdown").classList.toggle("dropdown_show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropdown_image')) {
        const dropdowns = document.getElementsByClassName("dropdown_content");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('dropdown_show')) {
                openDropdown.classList.remove('dropdown_show');
            }
        }
    }
}

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

// Table Print and Fullscreen
const fullscreenBtn = document.getElementById('fullscreenBtn');
const printBtn = document.getElementById('printBtn');
const tableContainer = document.getElementById('tableContainer');

fullscreenBtn.addEventListener('click', () => {
    if (tableContainer.requestFullscreen) {
        tableContainer.requestFullscreen();
    } else if (tableContainer.mozRequestFullScreen) { // Firefox
        tableContainer.mozRequestFullScreen();
    } else if (tableContainer.webkitRequestFullscreen) { // Chrome, Safari, and Opera
        tableContainer.webkitRequestFullscreen();
    } else if (tableContainer.msRequestFullscreen) { // IE/Edge
        tableContainer.msRequestFullscreen();
    }
});

printBtn.addEventListener('click', () => {
    window.print(); // Directly print the current page
});

document.addEventListener('fullscreenchange', () => {
    if (document.fullscreenElement) {
        tableContainer.style.padding = "15px"; 
        tableContainer.style.backgroundColor = "#ffffff"; // Keep table background white
    } else {
        tableContainer.style.padding = "";
        tableContainer.style.backgroundColor = ""; // Reset to default
    }
});

// Get the current URL
const currentPath = window.location.pathname.split('/').pop();

// Select all sidebar links
const sidebarLinks = document.querySelectorAll('.sidebar_link');

// Loop through each link to set the active class
sidebarLinks.forEach(link => {
    const linkPath = link.getAttribute('href');
    if (linkPath === currentPath) {
        link.classList.add('active');
    }
});

