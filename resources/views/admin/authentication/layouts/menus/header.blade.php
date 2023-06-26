<header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo -->
        <div class="logo-mini">
            <span class="light-logo"><img src="../images/logo-dark.png" alt="logo"></span>
            <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
        </div>
        <!-- logo-->
        <div class="logo-lg">
            <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
            <span class="dark-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
        </div>
    </a>
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
                <!-- full Screen -->
                <li class="search-bar">
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                    </div>
                </li>
                <!-- Messages -->
                @include('authentication.layouts.menus.pop-up.message')
                <!-- Notifications -->
                @include('authentication.layouts.menus.pop-up.notification')

                <!-- User Account-->
                @include('authentication.layouts.menus.pop-up.profile')


                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar" title="Setting"><i
                            class="fa fa-cog fa-spin"></i></a>
                </li>

            </ul>
        </div>
    </nav>
</header>
