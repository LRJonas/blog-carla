<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Meu Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
    <header class="header">
        <h1 class="header__title">Meu Blog</h1>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="{{ route('posts.index') }}">Posts</a></li>
                <li class="nav__item"><a class="nav__link" href="{{ route('posts.create') }}">Create Post</a></li>
                @auth
                    <li class="nav__item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav__link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                @else
                    <li class="nav__item"><a class="nav__link" href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <p class="footer__text">&copy; 2024 Meu Blog. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
