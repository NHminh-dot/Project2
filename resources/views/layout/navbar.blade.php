<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{route('welcome')}}">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            {{-- @foreach ($user as $user)    
                            @endforeach --}}
                            {{-- <a href="{{ route('user.view_self_info',['id' => $user->id]) }}">
                                Thông tin cá nhân
                            </a> --}}
                            <a class="nav-link nav-user-img" href="{{ route('logout') }}" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Đăng xuất
                            </a>         
                        </li>
                    </ul>
                </div>
            </nav>
        </div>