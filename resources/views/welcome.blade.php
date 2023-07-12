<!DOCTYPE html>
@include('menu.bootstrap')
    <body class="antialiased">
        <header>
            @if (Route::has('login'))
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" style="margin: 0 15px;" class="btn btn-primary">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
            <div class="welcome-container">
                <div class="welcome-text">
                    <h1>Bem-vindo ao Sistema</h1>
                    <p>Desfrute de todas as funcionalidades incríveis que o nosso sistema oferece.</p>
                </div>
            </div>
    </body>
    <style>
        body {
            background: linear-gradient(135deg, #5e72e4, #825ee4);
            margin: 0;
            padding: 0;
        }

        .welcome-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .welcome-text {
            max-width: 600px;
            margin: 0 auto;
        }

        .welcome-text h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .welcome-text p {
            font-size: 1.5rem;
        }

        .welcome-text a {
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</html>
