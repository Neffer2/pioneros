    <html lang='es'>

    <head>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Calendario Personalizado</title>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/locales/es.global.min.js'></script>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 20px;
            }

            #calendar {
                max-width: 1200px;
                margin: 0 auto;
                background: white;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }

            /* Personalizar colores del header */
            .fc-toolbar-title {
                color: #2c3e50 !important;
                font-weight: bold !important;
            }

            .fc-button-primary {
                background-color: #3498db !important;
                border-color: #3498db !important;
            }

            .fc-button-primary:hover {
                background-color: #2980b9 !important;
                border-color: #2980b9 !important;
            }

            /* Personalizar días de la semana */
            .fc-col-header-cell {
                background-color: #ecf0f1 !important;
                font-weight: bold;
            }

            /* Personalizar días del mes */
            .fc-daygrid-day:hover {
                background-color: #f8f9fa !important;
            }

            /* Personalizar el día actual */
            .fc-day-today {
                background-color: #e8f5e8 !important;
            }

            /* Personalizar eventos */
            .fc-event {
                border-radius: 5px !important;
                border: none !important;
                padding: 2px 5px !important;
            }

            /* Diferentes colores para tipos de eventos */
            .evento-trabajo {
                background-color: #e74c3c !important;
                color: white !important;
            }

            .evento-personal {
                background-color: #9b59b6 !important;
                color: white !important;
            }

            .evento-reunion {
                background-color: #f39c12 !important;
                color: white !important;
            }
        </style>
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
                    contentHeight: 600,

                    // CONFIGURACIÓN DE DÍAS
                    weekends: true, // Mostrar fines de semana
                    dayMaxEvents: 3, // Máximo 3 eventos por día antes de mostrar "+más"
                    moreLinkText: 'más eventos',

                    // EVENTOS DE EJEMPLO
                    events: [
                        {
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
                            '\nDescripción: ' + (info.event.extendedProps.description || 'Sin descripción'));
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
                    dayHeaderFormat: { weekday: 'long' },

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
        <a href="{{ route('dashboard') }}">Volver</a>
        <div id='calendar'></div>
    </body>

    </html>
