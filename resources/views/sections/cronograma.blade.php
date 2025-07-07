    <html lang='es'>

    <head>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Calendario Personalizado</title>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/locales/es.global.min.js'></script>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="{{ asset('css/cronograma.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/cronograma.css') }}?v={{ time() }}">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    // CONFIGURACIÓN BÁSICA
                    initialView: 'dayGridMonth',
                    locale: 'es', // Idioma español
                    firstDay: 1, // Lunes como primer día de la semana

                    // CONFIGURACIÓN DEL HEADER
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                    },

                    // CONFIGURACIÓN DE BOTONES
                    buttonText: {
                        today: 'Hoy',
                        month: 'Mes',
                        week: 'Semana',
                        day: 'Día',
                        list: 'Lista'
                    },

                    // ALTURA DEL CALENDARIO
                    height: 'auto',
                    contentHeight: 400,

                    // CONFIGURACIÓN DE DÍAS
                    weekends: true, // Mostrar fines de semana
                    dayMaxEvents: 3, // Máximo 3 eventos por día antes de mostrar "+más"
                    moreLinkText: 'más eventos',

                    // EVENTOS DE EJEMPLO
                    events: [{
                            title: 'Reunión de equipo',
                            start: '2025-06-27T10:00:00',
                            end: '2025-06-27T11:30:00',
                            className: 'evento-reunion',
                            description: 'Reunión semanal del equipo de desarrollo'
                        },
                        {
                            title: 'Proyecto Laravel',
                            start: '2025-06-28',
                            end: '2025-06-30',
                            className: 'evento-trabajo',
                            description: 'Desarrollo del sistema de pioneros'
                        },
                        {
                            title: 'Cita médica',
                            start: '2025-06-29T15:00:00',
                            className: 'evento-personal',
                            description: 'Consulta médica anual'
                        }
                    ],

                    // EVENTOS DE INTERACCIÓN
                    eventClick: function(info) {
                        alert('Evento: ' + info.event.title +
                            '\nFecha: ' + info.event.start.toLocaleDateString('es-ES') +
                            '\nDescripción: ' + (info.event.extendedProps.description ||
                                'Sin descripción'));
                    },

                    dateClick: function(info) {
                        var title = prompt('Ingresa el título del evento:');
                        if (title) {
                            calendar.addEvent({
                                title: title,
                                start: info.date,
                                allDay: true,
                                className: 'evento-personal'
                            });
                        }
                    },

                    // CONFIGURACIÓN DE ARRASTRAR Y SOLTAR
                    editable: true,
                    droppable: true,

                    eventDrop: function(info) {
                        alert('Evento "' + info.event.title + '" movido a ' +
                            info.event.start.toLocaleDateString('es-ES'));
                    },

                    // CONFIGURACIÓN DE VISTA
                    dayHeaderFormat: {
                        weekday: 'long'
                    },

                    // CONFIGURACIÓN DE TIEMPO
                    slotMinTime: '08:00:00',
                    slotMaxTime: '20:00:00',
                    slotDuration: '00:30:00',

                    // CONFIGURACIÓN DE NAVEGACIÓN
                    navLinks: true, // Permite hacer clic en días/semanas para navegar

                    // CONFIGURACIÓN DE SELECCIÓN
                    selectable: true,
                    selectMirror: true,

                    select: function(info) {
                        var title = prompt('Nuevo evento:');
                        if (title) {
                            calendar.addEvent({
                                title: title,
                                start: info.start,
                                end: info.end,
                                className: 'evento-trabajo'
                            });
                        }
                        calendar.unselect();
                    }
                });

                calendar.render();
            });
        </script>
    </head>

    <body>
        <div class="cronograma-container">
            <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
            <a class="back-button" href="{{ route('dashboard') }}">
                <i class="fa fa-arrow-left" aria-hidden="true" style="margin-right:8px;"></i> REGRESAR
            </a>
            <div class="cronograma-info">
                <div class="cronograma-left-container">
                    <div id='calendar'></div>

                </div>

                <div class="cronograma-right-container">
                    <h2>CRONOGRAMA</h2>
                    <ul class="eventos-importantes">
                        <li>Evento virtual: 1 de julio</li>
                        <li>Inicio: 1ra semana julio</li>
                        <li>Período evaluación</li>
                        <li>1er trimestre: 1 de julio al</li>
                        <li>19 de septiembre</li>
                    </ul>
                </div>
            </div>
            <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">

        </div>
    </body>

    </html>
