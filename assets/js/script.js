// Sidebar Active Script Start
const currentPath = window.location.pathname.split('/').pop();

const sidebarLinks = document.querySelectorAll('.sidebar_link');

sidebarLinks.forEach(link => {
    const linkPath = link.getAttribute('href');
    if (linkPath === currentPath) {
        link.classList.add('active');
    }
});
// Sidebar Active Script End

// Dropdown Open and Close Script Start
function toggleDropdown() {
    document.getElementById("profile_dropdown").classList.toggle("dropdown_show");
}

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
// Dropdown Open and Close Script End

// Sidebar Open and Close for Big and Small Screen Script Start

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
    document.getElementById("main_container").style.marginLeft = "70px"; 
    isNavOpen = false;
    document.getElementById("sidebar").classList.add('collapsed');
    document.getElementById("sidebar").classList.remove('open_collapsed');
}

window.onload = function() {
    if (isNavOpen) {
        openNav();
    } else {
        closeNav();
    }
};

window.onresize = function() {
    if (window.innerWidth > 768 && !isNavOpen) {
        openNav();
    } else if (window.innerWidth <= 768 && isNavOpen) {
        closeNav();
    }
};

document.getElementById('toggleButton').addEventListener('click', toggleNav);

// // Sidebar Open and Close for Big and Small Screen Script End
// Sidebar Collapsed(Close) by Default for Big and Small Screen Script Start

// let isNavOpen = false;

// document.getElementById("sidebar").classList.add('collapsed');
// document.getElementById("main_container").style.marginLeft = "70px";

// function toggleNav() {
//     if (isNavOpen) {
//         closeNav();
//     } else {
//         openNav();
//     }
// }

// function openNav() {
//     document.getElementById("sidebar").style.width = "350px";
//     document.getElementById("main_container").style.marginLeft = "350px";
//     isNavOpen = true;
//     document.getElementById("sidebar").classList.remove('collapsed');
//     document.getElementById("sidebar").classList.add('open_collapsed');
// }

// function closeNav() {
//     document.getElementById("sidebar").style.width = "70px";
//     document.getElementById("main_container").style.marginLeft = "70px";
//     isNavOpen = false;
//     document.getElementById("sidebar").classList.add('collapsed');
//     document.getElementById("sidebar").classList.remove('open_collapsed');
// }

// window.onresize = function() {
//     if (window.innerWidth > 768 && !isNavOpen) {
//         openNav();
//     } else if (window.innerWidth <= 768 && isNavOpen) {
//         closeNav();
//     }
// };

// document.getElementById('toggleButton').addEventListener('click', toggleNav);
// // Sidebar Collapsed(Close) by Default for Big and Small Screen Script End

// Sidebar Toggle Icon Change on Click Script Start
// function iconChange(element) {
//     if (element.classList.contains("fa-bars")) {
//         element.classList.remove("fa-bars");
//         element.classList.add("fa-list-ul");
//     } else {
//         element.classList.remove("fa-list-ul");
//         element.classList.add("fa-bars");
//     }
// }
// Sidebar Toggle Icon Change on Click Script End
