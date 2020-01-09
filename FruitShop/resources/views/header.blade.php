<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/mainstyles/myfile.css')}}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL :: to('/') }}"><i class="fa fa-home"></i>Home<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL :: to('/') }} ">About</a>
                </li>
                @if(Session :: get('user_name') === 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL :: to('/admin/all-products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL :: to('/admin/all-announcement')}}">Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL :: to('/admin/all-category')}}">Categories</a>
                </li>
                @elseif(Session :: get('user_name'))

                <li class="nav-item">
                    <a class="nav-link" href="{{URL :: to('/products')}}">Products</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{URL :: to('/login')}}">Products</a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav">
                @if(Session :: get('user_name') == null)
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL :: to('/signup')}}"><i class="fa fa-user-plus"></i>Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL :: to('/login') }}"><i class="fa fa-lock"></i>Login</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         {{ Session :: get('user_name') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ URL :: to('/edit-profile') }}">Edit Profile</a>
                        <a class="dropdown-item" href="{{ URL :: to('/logout') }}">Logout</a>
                        
                    </div>
                </li>
                @endif

               
                <li class="nav-item">
                    @if(Session :: get('user_name') == null)
                    <a class="nav-link" href="{{ URL :: to('/login') }}"><i class="fa fa-envelope-open"></i>Contact Us</a>
                    @elseif(Session :: get('user_name') !== 'admin')
                    <a class="nav-link" href="{{ URL :: to('/contact') }}"><i class="fa fa-envelope-open"></i>Contact Us</a>
                    @endif 
                </li> 
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>