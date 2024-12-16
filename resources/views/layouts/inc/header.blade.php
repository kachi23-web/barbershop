<header class="header-center transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo-center">
                            <a href="index">
                                <img class="logo-main" src="{{asset('images/logo.png')}}" alt="" >
                                <img class="logo-mobile" src="images/logo-mobile.png" alt="" >
                            </a>
                        </div>
                        <!-- logo close -->
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index">
                                            <img class="logo-main" src="{{asset('images/logo.png')}}" alt="" >
                                            <img class="logo-mobile" src="images/logo-mobile.png" alt="" >
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu" class="s2">
                                    <li><a class="menu-item" href="{{('/')}}">Home</a>
                                        
                                    </li>
                                    <li><a class="menu-item" href="{{('services')}}">Services</a></li>
                                    <li><a class="menu-item" href="{{('about')}}">About</a>
                                    <ul>
                                            <li><a class="menu-item" href="{{('about')}}">About Us</a></li>
                                            <li><a class="menu-item" href="{{('team')}}">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{url('book')}}">Book Now</a></li>
                                    <li><a class="menu-item" href="{{('blog')}}">Blog</a></li>
                                    <li><a class="menu-item" href="{{('contact')}}">Contact</a></li>
                                    <li><a class="menu-item" href="{{('gallery')}}">Gallery</a></li>
                                    <li><a class="menu-item" href="{{('academy')}}">masterCutz Academy</a>
                                        
                                    
                            </div>
                            <!-- <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <span id="menu-btn"></span>
                                </div>
                            </div> -->

                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="btn-main"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn-main"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn-main"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif        
                        
                        <a href="book.html" class="btn-main">Login</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>