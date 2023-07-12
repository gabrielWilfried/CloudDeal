<div class="breadcumb-area bg-img-4 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2></h2>
                    <ul>
                        @if (Request::is('clouddeal'))
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <span>/</span>
                        @elseif (Request::is('clouddeal/allAds'))
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <span>
                                <li><a href="{{ route('dashboard.index') }}">BestAds</a></li>
                            </span>
                        @elseif (Request::is('clouddeal/about'))
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <span>
                                <li><a href="{{ route('about') }}">About</a></li>
                            </span>
                        @elseif (Request::is('clouddeal/contact'))
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <span>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </span>
                        @elseif (str_contains(Request::path(), 'clouddeal/allAds/ad-detail'))
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <span>
                                <li><a href="#">Ad-detail</a></li>
                            </span>
                        @elseif (Request::is('chat'))
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <span>
                                <li><a href="#">Chat</a></li>
                            </span>
                        @endif

                        {{-- <li>
                            <a href="{{ route('home') }}">Home</a>
                            @if (!Request::is('clouddeal') && !Request::is('clouddeal/'))
                            @endif
                        </li>
                        @if (!Request::is('clouddeal') && !Request::is('clouddeal/'))
                            <li>
                                <a href="{{ Request::is('clouddeal/about') ? route('about') : '#' }}">
                                    @if (Request::is('clouddeal/about'))
                                        About
                                    @endif
                                </a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ Request::is('clouddeal/allAds') ? route('dashboard.index') : '#' }}">
                                @if (Request::is('clouddeal/allAds'))
                                    Best Ads
                                @endif
                            </a>
                        </li>
                        <li>
                            <a href="{{ Request::is('clouddeal/contact') ? route('contact') : '#' }}">
                                @if (Request::is('clouddeal/contact'))
                                    Contact
                                @endif
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

