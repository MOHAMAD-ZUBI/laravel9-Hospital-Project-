<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('assets')}}/admin/img/find_user.png" class="user-image img-responsive"/>

            <li class ="nav-item">
                <a href="/admin" class="nav-link"><i class="nav-icon fas fa-home text-danger"></i>Dashboard</a>
            </li>


            <li>
                <a href="/admin/category"><i class="fa fa-calendar-check-o"></i> Appointments<span class="fa arrow"></span></a>
                <ul class="treeview" role="menu">
                    <li ><a href="index.html"><i class="fa fa-calendar-minus-o"></i>  Active Appointments</a></li>
                    <li> <a href="index2.html"><i class="fa fa-calendar-plus-o"></i>  Old Appointments</a></li>
                </ul>
            </li>


            <li class ="nav-item">
                <a href="/admin/category" class="nav-link"><i class="nav-icon fas fa-th"></i>Categories</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/comment" class="nav-link"><i class="fa-solid fa-reply text-red-800"></i>Comments</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/faq" class="nav-link"><i class="fa-solid fa-square-envelope text-blue-400"></i>FAQ</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/Messages" class="nav-link"><i class="fa-solid fa-message text-indigo-50"></i>Messages</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/social" class="nav-link"><i class="fa-solid fa-hashtag"></i>Social</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/user" class="nav-link"><i class="nav-icon fa fa-user"></i>Users</a>
            </li>
            <li class="nav-item">
                <a href="/admin/setting" class="nav-link">
                    <i class="fa-solid fa-sliders"></i>
                    Settings
                </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
            <li  >
                <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
            </li>
        </ul>

    </div>

</nav>

<!-- /. NAV SIDE  -->
