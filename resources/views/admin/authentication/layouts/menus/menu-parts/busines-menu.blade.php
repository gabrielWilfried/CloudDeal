<link href="{{ asset('assets/css/message.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<li class="header nav-small-cap">BUSINESS</li>
<li>
    <a href="{{ route('admin.home') }}">
        <i class="fa fa-bars"></i>
        <span>Dashboard</span>
    </a>
</li>
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
    <a href="{{ route('admin.messages.index') }}">

        <span class="badge-container">
            <i class="fa fa-envelope envelope-icon"></i>
            @if ($unreadMessageCount > 0)
                <span class="badge">{{ $unreadMessageCount }}</span>
            @endif
        </span>
        <span class="messages-text">Messages</span>
    </a>
</li>
