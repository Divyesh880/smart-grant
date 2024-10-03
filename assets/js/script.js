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
