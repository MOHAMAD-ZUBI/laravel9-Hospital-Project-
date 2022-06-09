<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('assets')}}/admin/img/find_user.png" class="user-image img-responsive"/>
                <div class="info">
                    <a href="#" class="nav-link">{{Auth::user()->name}}</a>
                </div>
            </li>
            <li class ="nav-item">
                <a href="/admin" class="nav-link"><lord-icon
                        src="https://cdn.lordicon.com/gmzxduhd.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon> Dashboard</a>
            </li>


            <li>
                <a href="#"><lord-icon
                        src="https://cdn.lordicon.com/kbtmbyzy.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon> Appointments <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Active Appointments</a>
                    </li>
                    <li>
                        <a href="#">Old Appointments</a>
                    </li>

                </ul>
            </li>


            <li class ="nav-item">
                <a href="/admin/category" class="nav-link"><lord-icon
                        src="https://cdn.lordicon.com/jvucoldz.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>Categories</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/policlinic" class="nav-link">
                    <lord-icon
                        src="https://cdn.lordicon.com/hdiorcun.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>Policlinics</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/comment" class="nav-link"><lord-icon
                        src="https://cdn.lordicon.com/zpxybbhl.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>Comments</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/faq" class="nav-link"><lord-icon
                        src="https://cdn.lordicon.com/tvyxmjyo.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>FAQ</a>
            </li>
            <li class ="nav-item">
                <a href="{{route('admin.message.index')}}" class="nav-link"><lord-icon
                        src="https://cdn.lordicon.com/rhvddzym.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>Messages</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/social" class="nav-link"><lord-icon
                        src="https://cdn.lordicon.com/udwhdpod.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>Social</a>
            </li>
            <li class ="nav-item">
                <a href="/admin/user" class="nav-link"><lord-icon
                        src="https://cdn.lordicon.com/eszyyflr.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>Users</a>
            </li>
            <li class="nav-item">
                <a href="/admin/setting" class="nav-link">
                    <lord-icon
                        src="https://cdn.lordicon.com/sbiheqdr.json"
                        trigger="loop"
                        colors="primary:#e4e4e4,secondary:#ee6d66"
                        style="width:40px;height:40px">
                    </lord-icon>
                    Settings
                </a>
            </li>



            <li  >
                <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
            </li>
        </ul>

    </div>

</nav>

<!-- /. NAV SIDE  -->
