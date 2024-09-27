{{--
<header id="header" class="header bg-color">
    <div class="container">
        <div class="row">
            <div class="header-wrap">
                <div id="logo" class="logo">
                    <a href="{{route('home')}}" title="">
                        <img class="logo-img" src="{{url('public/web/assets/images/swagat.png')}}" alt="logo Finance Business" />
                    </a>
                </div>
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div>
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li class="{{ Request::segment(1) == 'home' ? 'active' : '' }}">
                                <a href="{{route('home')}}" title="">HOME</a>
                            </li>
                            <li class="{{ Request::segment(1) == 'about' ? 'active' : '' }}">
                                <a href="{{route('about')}}" title="">ABOUT</a>
                            </li>
                            <li class="{{ Request::segment(1) == 'product' ? 'active' : ''}}">
                                <a href="#" title="">PRODUCTS</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('product.kraft-paper')}}" title="">Kraft Paper</a></li>
                                    <li><a href="{{route('product.duplex-board')}}" title="">Duplex Board</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('enquiry')}}" title="">ENQUIRY</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}" title="">CONTACT US</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header> --}}

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div id="logo" class="logo">
            <a href="{{route('home')}}" title="">
                <img class="logo-img" src="{{url('public/web/assets/images/swagat.png')}}" alt="logo Finance Business" />
            </a>
        </div>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="btn-menu">
            <span></span>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                <li class="nav-item {{ Request::segment(1) == 'home' ? 'active' : '' }}">
                    <a class="nav-link click-scroll" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item {{ Request::segment(1) == 'about' ? 'active' : '' }}">
                    <a class="nav-link click-scroll" href="{{route('about')}}">About</a>
                </li>

                <li class="nav-item {{ Request::segment(1) == 'product' ? 'active' : ''}}">
                    <a class="nav-link click-scroll" href="#" title="">PRODUCTS</a>
                    <ul class="sub-menu">
                        <li><a class="nav-link click-scroll" href="{{route('product.kraft-paper')}}" title="">Kraft Paper</a></li>
                        <li><a class="nav-link click-scroll" href="{{route('product.duplex-board')}}" title="">Duplex Board</a></li>
                    </ul>
                </li>
                <li class="nav-item {{ Request::segment(1) == 'enquiry' ? 'active' : ''}}">
                    <a class="nav-link click-scroll" href="{{route('enquiry')}}" title="">ENQUIRY</a>
                </li>
                <li class="nav-item {{ Request::segment(1) == 'contact' ? 'active' : ''}}">
                    <a class="nav-link click-scroll" href="{{route('contact')}}" title="">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
