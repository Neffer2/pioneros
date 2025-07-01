<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}?v={{ time() }}">
    <title>Iniciar Sesión - Pioneros</title>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1 class="login-title">Iniciar sesión</h1>
            @if (session('status'))
                <div>{{ session('status') }}</div>
            @endif

            <form class="form-login-container" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-email">
                    <label for="email">Correo electrónico:</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-password">
                    <label for="password">Contraseña:</label>
                    <input id="password" type="password" name="password" required>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-treatment">
                    <label>
                        <input type="checkbox" name="remember" required>
                        Tratamiento de datos personales
                    </label>
                </div>

                <div class="form-submit">
                    <button type="submit">Ingresar</button>
                    
                    @if (Route::has('password.request'))
                        {{-- <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a> --}}
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>
</html>
