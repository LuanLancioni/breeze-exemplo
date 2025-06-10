<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
        .navbar {
            background-color: rgba(255, 7, 7, 0.63);
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            width: 70px;
            height: 70px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        body {
            background-color: rgb(255, 255, 255);
        }

        .footer-container {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand">
                        <img src="{{ asset('storage/logoetec.png') }}" alt="Logo" class="d-inline-block align-text-bottom">
                    </a>
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('cursos') }}">Cursos</a>
                    <a class="nav-link active" href="{{ route('departamentos') }}">Departamentos</a>
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>
                </div>
            </div>
        </div>
    </nav>

    <x-guest-layout>
        <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
            <div style="width: 100%; max-width: 400px; text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div style="margin-bottom: 10px;">
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <!-- Email Address -->
                    <div style="margin-bottom: 10px;">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div style="margin-bottom: 10px;">
                        <x-input-label for="password" :value="__('Senha')" />
                        <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Confirm Password -->
                    <div style="margin-bottom: 10px;">
                        <x-input-label for="password_confirmation" :value="__('Confirmar senha')" />
                        <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" />
                    </div>

                    <div>
                        <x-primary-button style="margin-left: 10px;">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>

                    <div style="margin-top: 20px;">
                        <a href="{{ route('login') }}" style="color: black;">{{ __('Já está registrado?') }}</a>
                    </div>

                </form>
            </div>
        </div>
    </x-guest-layout>
    <footer class="footer-container">
        <div class="footer-content">
            <img src="{{ asset('storage/Footer.png') }}" alt="Logo ou Imagem" class="footer-image">
        </div>
    </footer>
</body>