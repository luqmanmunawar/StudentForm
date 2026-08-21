      <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">



             <li class="nav-item">
                <a class="nav-link" href="{{ route('role.permissions') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Roles & Permissions</span></a>
            </li>

  <li class="nav-item">
                <a class="nav-link" href="{{ route('user.records') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>User Records</span></a>
            </li>

  <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Profile Settings</span></a>
            </li>





    <div id="collapseUserManagement"
         class="collapse"
         aria-labelledby="headingUserManagement"
         data-parent="#accordionSidebar">

        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">
                Manage Users
            </h6>

            <a class="collapse-item" href="#">
                <i class="fas fa-user-tag fa-sm mr-2 text-gray-400"></i>
                Roles
            </a>

            <a class="collapse-item" href="#">
                <i class="fas fa-key fa-sm mr-2 text-gray-400"></i>
                Permissions
            </a>

            <a class="collapse-item" href="#">
                <i class="fas fa-user-check fa-sm mr-2 text-gray-400"></i>
                Role Assignment
            </a>

        </div>

    </div>

</li>


<!-- Nav Item - Settings -->
<li class="nav-item">

    <a class="nav-link collapsed"
       href="#"
       data-toggle="collapse"
       data-target="#collapseSettings"
       aria-expanded="false"
       aria-controls="collapseSettings">

        <i class="fas fa-fw fa-users"></i>
        <span>Settings</span>
    </a>

    <div id="collapseSettings"
         class="collapse"
         aria-labelledby="headingSettings"
         data-parent="#accordionSidebar">

        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">
                Account Settings
            </h6>

            <a class="collapse-item" href="">
                <i class="fas fa-user-tag fa-sm mr-2 text-gray-400"></i>
                Change Password
            </a>

            <a class="collapse-item" href="#">
                <i class="fas fa-key fa-sm mr-2 text-gray-400"></i>
                Update Profile
            </a>

            <a class="collapse-item" href="#">
                <i class="fas fa-user-check fa-sm mr-2 text-gray-400"></i>
                Delete Dashboard
            </a>

        </div>

    </div>

</li>



                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

  
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('theme-2/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->
