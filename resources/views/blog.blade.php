<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Boolean</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .container{
                width: 84%;
                height: 100%;
                margin: 0 auto;
            }
            .d-flex{
                display: flex;
            }
            .j_center{
                justify-content: center;
            }
            .j_around{
                justify-content: space-around;
            }
            .t_center{
                text-align: center;
            }
            .main-height {
                height: 64vh;
            }
            /* SEZIONE NAVBAR */
            nav{
                height: 70px;
                align-items: center;
            }
            nav a{
                font-size: 16px;
                color: #333338;
                text-decoration: none;
            }
            nav a:not(:last-child){
                margin-right: 70px;    
            }
            nav a.active,
            nav a:hover{
                color: #FC7523FC;
                font-weight: 600; 
                border-bottom: 3px solid #FC7523FC;       
            }
            /* CHIUSURA HEADER */
            main{
                padding: 30px 0;
            }
        </style>
    </head>
    <body>
        <header id="site_header">
            <div class="d-flex j_center">
                <h1>LARAVEL-BOOLEAN</h1>
            </div>
            <!-- Navbar -->
            <nav  class="d-flex j_center">
            <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
                <a href="{{ route('blog') }}" class="{{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">Blog</a>
                <a href="{{ route('about') }}" class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a>
            </nav>
            <!-- /nav -->
        </header>
        <main>
            <h2  class="t_center">Blog</h2>
            <div class="container">
                <h3>Posts</h3>
                @foreach($posts as $post)
                    <div>
                        <h4>{{$post->title}}</h4>
                        <p>{{$post->body}}</p>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>
