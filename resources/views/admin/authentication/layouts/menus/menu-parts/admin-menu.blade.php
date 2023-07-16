@include('admin.authentication.layouts.menus.menu-parts.busines-menu');

<li class="header nav-small-cap">ADMINISTRATION</li>
<li>
    <a href="{{ route('admin.category.index') }}">
        <i class="ti-layout-grid2"></i>
        <span>Categories</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.town.index') }}">
        <i class="fa fa-bank"></i>
        <span>Towns</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.letters.show') }}">

        <i class="fas fa-file-alt"></i>
        <span>Letters</span>
    </a>
</li>
