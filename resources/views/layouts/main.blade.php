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
    @livewire('menu-component')
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Document loaded and ready');
        
        const navbarToggle = document.querySelector('.navbar-toggle');
        const navbarClose = document.querySelector('.navbar-close');
        const navbarPanel = document.querySelector('.navbar-panel');
        const navbarIcon = document.querySelector('.navbar-icon');

        // Toggle del menú con hamburguesa
        navbarToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            openMenu();
        });

        // Cerrar menú con botón X
        navbarClose.addEventListener('click', function(e) {
            e.stopPropagation();
            closeMenu();
        });

        // Prevenir que el panel se cierre al hacer clic dentro de él
        navbarPanel.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Cerrar menú al hacer clic fuera de él
        document.addEventListener('click', function(e) {
            if (navbarPanel.classList.contains('active') && 
                !navbarPanel.contains(e.target) && 
                !navbarToggle.contains(e.target)) {
                closeMenu();
            }
        });

        // Función para abrir menú
        function openMenu() {
            navbarPanel.classList.add('active');
            navbarToggle.classList.add('hidden'); // Ocultar hamburguesa
            document.body.style.overflow = 'hidden'; // Prevenir scroll
        }

        // Función para cerrar menú
        function closeMenu() {
            navbarPanel.classList.remove('active');
            navbarToggle.classList.remove('hidden'); // Mostrar hamburguesa
            document.body.style.overflow = ''; // Restaurar scroll
        }

        // Cerrar menú con tecla Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navbarPanel.classList.contains('active')) {
                closeMenu();
            }
        });

        // Cerrar menú al hacer clic en un enlace (excepto si abre en nueva pestaña)
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                // Si no es un enlace que abre en nueva pestaña, cerrar menú
                if (!this.hasAttribute('target')) {
                    setTimeout(closeMenu, 100);
                }
            });
        });

        // Responsive: Ajustar comportamiento según el tamaño de pantalla
        function handleResize() {
            if (window.innerWidth > 768) {
                // En desktop, mantener el menú siempre visible si está abierto
                if (navbarPanel.classList.contains('active')) {
                    document.body.style.overflow = '';
                }
            }
        }

        window.addEventListener('resize', handleResize);
    });
</script>

</html>
