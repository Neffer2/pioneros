<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/cronograma.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/ranking.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/premios.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">

    <title>@yield('title')</title>
</head>

<body>
    @yield('content')
    {{-- @livewire('menu-component') --}}
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {


        const navbarToggle = document.querySelector('.navbar-toggle');
        const navbarPanel = document.querySelector('.navbar-panel');
        const navbarIcon = document.querySelector('.navbar-icon');

        if (!navbarToggle) {
            return;
        }

        navbarToggle.addEventListener('click', function() {
            navbarPanel.classList.toggle('active');
            navbarIcon.classList.toggle('active');

            const spans = navbarIcon.querySelectorAll('span');
            if (navbarPanel.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(8px, 8px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -7px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });

        // Solo en móvil: Cerrar menú al hacer clic fuera
        if (window.innerWidth <= 768) {
            document.addEventListener('click', function(event) {
                if (!navbarPanel.contains(event.target) && !navbarToggle.contains(event.target)) {
                    navbarPanel.classList.remove('active');
                    const spans = navbarIcon.querySelectorAll('span');
                    spans[0].style.transform = 'none';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = 'none';
                }
            });
        }
    });
</script>

</html>
