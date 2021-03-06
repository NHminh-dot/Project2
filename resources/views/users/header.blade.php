   <header>
        <div class="header js-header js-dropdown">
            <div class="container">
                <div class="header__logo">
                    <a href="{{route('reddit')}}">
                        <img src="{{asset('storage/LogoWibu.jpg')}}" alt="logo" height="50px">
                    </a>
                </div>
                <div class="header__search">
                    <form>
                        <label>
                            <i class="icon-Search js-header-search-btn-open"></i>
                            <input type="search" name="search" placeholder="Search all forums" class="form-control">
                        </label>
                    </form>
                        {{-- <div class="header__search-btn">
                            <button style="background-color: white;" >
                                Search
                            </button>
                        </div> --}}
                </div>
                <div class="header__user">
                    @if (Session::has('user_id'))
                        <div class="header__user">
                            <div class="header__user-btn" data-dropdown-btn="user">
                                <img class="user-avatar" src="{{ asset('storage/' . Session::get('picture')) }}" alt="avatar">
                                <span>{{Session::get('username')}}
                                </span>
                                <i class="icon-Arrow_Below"></i>

                            </div>
                            <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                                <div>
                                    <div class="dropdown__icons">
                                        <a href="{{route('logout')}}"><i class="icon-Logout"></i>Logout</a>
                                    </div>
                                    {{-- <div class="dropdown__icons">
                                        <a href="{{ route('profile',['id' => Session::get('user_id')]) }}"><i class="icon-User"></i>Profile</a>
                                    </div> --}}
                                </div>
                            </nav>
                        </div>
                    @else
                    <div class="header__menu">
                        <div class="header__menu-btn">
                            <a href="{{route('login')}}">Login</a>
                        </div>
                    </div>
                    <div class="header__user">
                        <div class="header__user-btn">
                            <a href="{{route('sign_up')}}">Sign Up</a>
                        </div>
                    </div>
                    @endif
                    {{-- <div class="header__user-btn" data-dropdown-btn="user">
                        <img src="{{asset('fonts/icons/avatars/A.svg')}}" alt="avatar">
                        azyrusmax<i class="icon-Arrow_Below"></i>
                    </div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                        <div>
                            <div class="dropdown__icons">
                                <a href="#"><i class="icon-Bookmark"></i></a>
                                <a href="#"><i class="icon-Message"></i></a>
                                <a href="#"><i class="icon-Preferences"></i></a>
                                <a href="#"><i class="icon-Logout"></i></a>
                            </div>
                        </div>
                        <div>
                            <ul class="dropdown__catalog">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Topics</a></li>
                                <li><a href="#">Likes</a></li>                            
                            </ul>
                        </div>
                    </nav> --}}
                </div>
            </div>
            <div class="header__offset-btn">
                <a href="{{route('write_post')}}"><img src="{{asset('fonts/icons/main/New_Topic.svg')}}" alt="New Topic"></a>
            </div>
        </div>
    </header>