<header class="main-header">
    <!-- Logo -->

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="ti-align-left"></i>
            </a>

            <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
                <i class="mdi mdi-crop-free"></i>
            </a>

        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
                        <img src='{{ asset('assets/images/Apropos/vane1.jpg') }}' class="user-image rounded-circle"
                            alt="User Image">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <!-- User image -->
                        <li class="user-header bg-img" data-overlay="3">
                            <div class="flexbox align-self-center">
                                <img src='{{ asset('assets/images/Apropos/vane1.jpg') }}'
                                    class="float-left rounded-circle" alt="User Image">
                                <h4 class="user-name align-self-center">
                                    <span>Vanella Dzikang</span>
                                    <small>vanelladzikang1@gmail.com</small>
                                </h4>
                            </div>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="p-10"><a href="{{ route('admin.profile.show') }}"
                                    class="btn btn-sm btn-rounded btn-success">View Profile</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- full Screen -->
                <li class="search-bar">
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                    </div>
                </li>
                <!-- Messages -->
                {{-- @include('admin.authentication.layouts.menus.pop-up.message')
                <!-- Notifications -->
                @include('admin.authentication.layouts.menus.pop-up.notification')

                <!-- User Account-->
                @include('admin.authentication.layouts.menus.pop-up.profile') --}}


            </ul>
        </div>
    </nav>
</header>
