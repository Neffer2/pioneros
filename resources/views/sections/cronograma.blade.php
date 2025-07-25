    <html lang='es'>

    <head>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Calendario Personalizado</title>

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="{{ asset('css/cronograma.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}?v={{ time() }}">
        <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/cronograma.css') }}?v={{ time() }}">
        <script>
            // Datos del cronograma - esto puede venir de la base de datos
            const cronogramaData = [{
                    descripcion: 'Evento de lanzamiento',
                    fechas: {
                        'jul-2025': 21
                    }
                },
                {
                    descripcion: 'Inscripciones AC',
                    fechas: {
                        'jul-2025': '21-25'
                    },
                    clase: 'rojo'
                },
                {
                    descripcion: 'Inicio actividad',
                    fechas: {
                        'ago-2025': 1
                    }
                },
                {
                    descripcion: 'Fases de la actividad',
                    fechas: {
                        'ago-2025': '1ra bandera (1 agosto al 31 diciembre)',
                        'ene-2026': '2da bandera (15 enero al 30 junio)'
                    },
                    clase: 'rojo-span',
                    colspan: {
                        'ago-2025': 5,
                        'ene-2026': 6
                    }
                },
                {
                    descripcion: 'Corte 1ra bandera',
                    fechas: {
                        'dic-2025': 31
                    }
                },
                {
                    descripcion: 'Calificación resultados',
                    fechas: {
                        'ene-2026': '2 - 16',
                        'ago-2026': '1 - 17'
                    },
                    clase: 'rojo'
                },
                {
                    descripcion: 'Resultados preliminares',
                    fechas: {
                        'ene-2026': 20
                    }
                },
                {
                    descripcion: 'Cierre actividad',
                    fechas: {
                        'jun-2026': 30
                    }
                },
                {
                    descripcion: 'Evento de premiación',
                    fechas: {
                        'ago-2026': 10
                    },
                    clase: 'azul'
                }
            ];

            // Función para generar la tabla dinámicamente
            function generarTablaCronograma() {
                const tabla = document.getElementById('cronograma-table');
                const tbody = tabla.querySelector('tbody');

                cronogramaData.forEach(item => {
                    const fila = document.createElement('tr');

                    // Celda de descripción
                    const celdaDesc = document.createElement('td');
                    celdaDesc.textContent = item.descripcion;
                    celdaDesc.className = 'descripcion-cell';
                    fila.appendChild(celdaDesc);

                    // Celdas de meses
                    const meses = ['jul-2025', 'ago-2025', 'sep-2025', 'oct-2025', 'nov-2025', 'dic-2025',
                        'ene-2026', 'feb-2026', 'mar-2026', 'abr-2026', 'may-2026', 'jun-2026', 'jul-2026',
                        'ago-2026'
                    ];

                    let skipCells = 0;

                    meses.forEach(mes => {
                        if (skipCells > 0) {
                            skipCells--;
                            return;
                        }

                        const celda = document.createElement('td');

                        if (item.fechas[mes]) {
                            celda.textContent = item.fechas[mes];

                            if (item.clase) {
                                celda.className = item.clase;
                            }

                            if (item.colspan && item.colspan[mes]) {
                                celda.colSpan = item.colspan[mes];
                                skipCells = item.colspan[mes] - 1;
                            }
                        }

                        fila.appendChild(celda);
                    });

                    tbody.appendChild(fila);
                });
            }

            // Ejecutar cuando el DOM esté listo
            document.addEventListener('DOMContentLoaded', function() {
                generarTablaCronograma();
            });
        </script>
    </head>

    <body>
        <div class="cronograma-container">
            <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
            <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">
            {{-- <a class="back-button" href="{{ route('dashboard') }}">
                <i class="fa fa-arrow-left" id="icono-regresar" aria-hidden="true"></i> Regresar
            </a> --}}
            <div class="cronograma-info">
                <div class="cronograma-top-container">
                    <h2>Cronograma</h2>
                    <p>• Período de evaluación: 11 meses (1 de agosto 2025 - 30 de junio 2026) •</p>
                </div>
                <div class="cronograma-calendar-container">
                    <div class="cronograma-table-container">
                        <table id="cronograma-table" class="cronograma-table">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="descripcion-header">Descripción</th>
                                    <th colspan="6" class="year-header">2025</th>
                                    <th colspan="8" class="year-header">2026</th>
                                </tr>
                                <tr>
                                    <th class="month-header">Jul</th>
                                    <th class="month-header">Ago</th>
                                    <th class="month-header">Sep</th>
                                    <th class="month-header">Oct</th>
                                    <th class="month-header">Nov</th>
                                    <th class="month-header">Dic</th>
                                    <th class="month-header">Ene</th>
                                    <th class="month-header">Feb</th>
                                    <th class="month-header">Mar</th>
                                    <th class="month-header">Abr</th>
                                    <th class="month-header">May</th>
                                    <th class="month-header">Jun</th>
                                    <th class="month-header">Jul</th>
                                    <th class="month-header">Ago</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Las filas se generarán dinámicamente con JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <livewire:menu-component />

        </div>
        <livewire:footer-component />
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
    </body>

    </html>
