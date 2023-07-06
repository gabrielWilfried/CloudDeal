<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ route('admin.home') }}">
                    <!-- logo for regular state and mobile devices -->
                    <h3><b>Cloud Deal</b>Admin</h3>
                </a>
            </div>
            <div class="profile-pic">
                <img src="../images/user5-128x128.jpg" alt="user">
                <div class="profile-info">
                    <h4>John Doe</h4>
                    <div class="list-icons-item dropdown">
                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><span
                                class="badge badge-ring fill badge-primary mr-2"></span>Online</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Update data</a>
                            <a href="#" class="dropdown-item">Detailed log</a>
                            <a href="#" class="dropdown-item">Statistics</a>
                            <a href="#" class="dropdown-item">Clear list</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- sidebar menu-->
        @include('admin.authentication.layouts.menus.menu')
    </section>
</aside>
