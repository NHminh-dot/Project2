<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('admin.role.view_all')}}"><i class="far fa-id-badge"></i>Role</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.user.view_all')}}"><i class="far fa-user"></i>User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.topic.view_all')}}"><i class="fas fa-stream"></i>Topic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.category.view_all')}}"><i class="far fa-sticky-note"></i>Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" {{-- data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2" --}} href="{{route('admin.post.view_all')}}"><i class="far fa-clipboard"></i>Post</a>
                                {{-- <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                            <a class="nav-link" href="{{route('admin.post.list_post_confirm')}}">List Post Confirm</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.comment.view_all')}}"><i class="fa fa-fw fa-rocket"></i>Comment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.tag.view_all')}}"><i class="fa fa-fw fa-tag"></i>Tag</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.post_confirm.view_all')}}"><i class="fa fa-fw fa-tag"></i>Post Tag</a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>