<html>
    <head>
            <title>My E-Learning @yield('title')</title>
                <link rel="stylesheet" href="{{ asset('css.css')}}">
    </head>
    <style>
    
    </style>
    <body>
            <header>
                <h2>LOGO+HEADER</h2>
            </header>
            <main>
                <div class="left">
                    <ul class="list-unstyled">
                            <li><a href="{{ route('trang-chu')}}">Trang chủ</a></li>
                            <li><a href="{{route('ds-giang-vien')}}">Giang vien</a></li>
                    </ul>
                </div>
                <div class="right">
               @yield('main-content')
                </div>
            </main>
            <footer>
                <h2>footer</h2>
            </footer>
    </body>
 
</html>