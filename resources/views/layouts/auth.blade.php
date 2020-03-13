@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



  
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        @notifyCss
        <style>
            @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            #team {
                background: #eee !important;
            }
            
            .btn-primary:hover,
            .btn-primary:focus {
                background-color: #108d6f;
                border-color: #108d6f;
                box-shadow: none;
                outline: none;
            }
            
            .btn-primary {
                color: #fff;
                background-color: #007b5e;
                border-color: #007b5e;
            }
            
            section {
                padding: 60px 0;
            }
            
            section .section-title {
                text-align: center;
                color: #007b5e;
                margin-bottom: 50px;
                text-transform: uppercase;
            }
            
            #team .card {
                border: none;
                background: #ffffff;
            }
            
            .image-flip:hover .backside,
            .image-flip.hover .backside {
                -webkit-transform: rotateY(0deg);
                -moz-transform: rotateY(0deg);
                -o-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                transform: rotateY(0deg);
                border-radius: .25rem;
            }
            
            .image-flip:hover .frontside,
            .image-flip.hover .frontside {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg);
            }
            
            .mainflip {
                -webkit-transition: 1s;
                -webkit-transform-style: preserve-3d;
                -ms-transition: 1s;
                -moz-transition: 1s;
                -moz-transform: perspective(1000px);
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                transition: 1s;
                transform-style: preserve-3d;
                position: relative;
            }
            
            .frontside {
                position: relative;
                -webkit-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                z-index: 2;
                margin-bottom: 30px;
            }
            
            .backside {
                position: absolute;
                top: 0;
                left: 0;
                background: white;
                -webkit-transform: rotateY(-180deg);
                -moz-transform: rotateY(-180deg);
                -o-transform: rotateY(-180deg);
                -ms-transform: rotateY(-180deg);
                transform: rotateY(-180deg);
                -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            }
            
            .frontside,
            .backside {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-transition: 1s;
                -webkit-transform-style: preserve-3d;
                -moz-transition: 1s;
                -moz-transform-style: preserve-3d;
                -o-transition: 1s;
                -o-transform-style: preserve-3d;
                -ms-transition: 1s;
                -ms-transform-style: preserve-3d;
                transition: 1s;
                transform-style: preserve-3d;
            }
            
            .frontside .card,
            .backside .card {
                min-height: 312px;
            }
            
            .backside .card a {
                font-size: 18px;
                color: #007b5e !important;
            }
            
            .frontside .card .card-title,
            .backside .card .card-title {
                color: #007b5e !important;
            }
            
            .frontside .card .card-body img {
                width: 120px;
                height: 120px;
                border-radius: 50%;
            }
            
            
            </style>
            

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi There <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                    @include('notify::messages')
                    @notifyJs
                @yield('content')
            </main>
        </div>
    </body>
    </html>
