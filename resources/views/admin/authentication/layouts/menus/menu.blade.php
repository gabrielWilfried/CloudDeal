<ul class="sidebar-menu" data-widget="tree">
    @include('admin.authentication.layouts.menus.menu-parts.busines-menu')

    <li>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="ti-power-off"></i>
            <span>Log Out</span>
        </a>

        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
            @csrf
            <input type="submit">
        </form>
    </li>
</ul>
