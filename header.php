<div class="top_header">
    <div>
        <span onclick="toggleNav()">
            <i onclick="iconChange(this)" class="sidebar_toggle_btn fa fa-bars"></i>
            <!-- <i class="fa">&#xf0c9;</i> -->
        </span>
    </div>
    <div class="dropdown_box">
        <span>John Thompson</span>
        <img src="assets/images/header/profile_orange.png" alt="Profile" class="dropdown_image"
            onclick="toggleDropdown()">
        <div class="d-inline-flex"><a href="login.html" class="login_btn">Login</a></div>
        <div class="dropdown_content" id="profile_dropdown">
            <a href="#"><i class="fa-solid fa-user"></i> &nbsp; Profile</a>
            <a href="#"><i class="fa-solid fa-gear"></i> &nbsp; Settings</a>
            <a href="#"><i class="fa-solid fa-power-off"></i> &nbsp; Logout</a>
        </div>
    </div>
</div>