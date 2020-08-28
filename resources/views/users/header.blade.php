

    <head>
        <title>Header</title>
    </head>
    <link href="{{asset('css/users/header.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="header">
            <div class="header--logo">
                <div class="logo">
                    <a href="{{route('reddit')}}">
                        <img src="{{asset('storage/LogoWibu.jpg')}}" alt="Logo"/>
                    </a>
                </div>
                <div class="header--web">
                    <button>
                        <a href="">Topic</a>
                    </button>
                    <button>
                        <a href="">Filter</a>
                    </button>
                </div>
                <div class="header--search_bar">
                    <form action="/" method="post">
                        <input type="search" name="" me="search_bar" placeholder="Search..." />
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="header--user">
                    <button>
                        <a href="">Sign Up</a>
                    </button>
                    <button>Login</button>
                </div>
            </div>
        </div>

<script src="https://kit.fontawesome.com/yourcode.js"></script>

