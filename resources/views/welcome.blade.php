<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tech Challenge Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body  background="{{asset('cover.jpg')}}">
        <div style="color :black"  class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <strong> Tech Challenge Dashboard
                </div>
                <div class="card-deck"><div class="card bg-transparent" style="width: 18rem;">
                        <img style="width:50%;height:50%;margin-left: auto;
                        margin-right: auto;
                        display: block;" class="card-img-top" src="{{asset('developer.png')}}" alt="Card image cap">
                        <div class="card-body">
                         
    
                          <a href="#" class="btn btn-primary">Developer Area</a>
                        </div>
                      
                    
                </div>
                <div class="card bg-transparent" style="width: 18rem;">
                        <img style="width:50%;height:50%;margin-left: auto;
                        margin-right: auto;
                        display: block;" class="card-img-top" src="{{asset('developer.png')}}" alt="Card image cap">
                        <div class="card-body">
                         
    
                          <a href="#" class="btn btn-primary">Organizer Area</a>
                        </div>
                      
                    
                </div>
                <div class="card bg-transparent" style="width: 18rem;">
                        <img style="width:40%;height:40%;margin-left: auto;
                        margin-right: auto;
                        display: block;" class="card-img-top" src="{{asset('developer.png')}}" alt="Card image cap">
                        <div class="card-body">
                         
    
                          <a href="#" class="btn btn-primary">Admin Area</a>
                        </div>
                      
                    
                </div>
             </div>

                
            </div>
               
            </div>
        </div>
    </body>
</html>
