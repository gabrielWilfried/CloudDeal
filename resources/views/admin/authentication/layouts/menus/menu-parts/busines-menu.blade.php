<link href="{{ asset('assets/css/message.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<li class="header nav-small-cap">BUSINESS</li>
<li>
    <a href="{{ route('admin.ads.index') }}">
        <i class="ti-layout-grid4"></i>
        <span>My Ads</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.payments.index') }}">
        <i class="fa fa-money"></i>
        <span>Payments</span></a>
</li>
<li>
    <a href="{{ route('admin.messages.index') }}">404

        <span class="badge-container">
            <i class="fa fa-envelope envelope-icon"></i>
            @if ($unreadMessageCount > 0)
                <span class="badge">{{ $unreadMessageCount }}</span>
            @endif
        </span>
        <span class="messages-text">Messages</span>
    </a>
</li>

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
    <a href="{{ route('admin.payments.index') }}">
        <i class="fa fa-money"></i>
        <span>Payments</span></a>
</li>
