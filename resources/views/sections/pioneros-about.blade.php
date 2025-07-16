@extends('layouts.main')
@section('title', '¿Que es p1oneros?')
@section('content')
    <div class="about-container">
        <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
        <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">

        <div class="about-tabs">
            <button class="about-tab active" data-tab="general">General</button>
            <button class="about-tab" data-tab="mecanica">Mecánica</button>
            <button class="about-tab" data-tab="productos">Productos</button>
            <button class="about-tab" data-tab="kpis">KPIs</button>
            <button class="about-tab" data-tab="criterio">Criterio de desempate</button>
        </div>

        <div class="about-info">
            <div class="about-content" id="about-general">
                <h2>¿Qué es P1oneros?</h2>
                <p>
                    Una iniciativa de Mobil Industria para reconocer el trabajo, las acciones y los resultados obtenidos por
                    los Agentes Comerciales con la venta y uso de productos de la categoría Flagship en los equipos y/o
                    vehículos de sus Clientes B2B, durante el segundo semestre del 2025 hasta el primer semestre del 2026.
                </p>
            </div>
            <div class="about-content" id="about-mecanica" style="display:none;">
                <h2>Mecánica de participación</h2>
                <p>
                    • Cada uno de los AC debe inscribir a los Asesores Comerciales B2B, Ingenieros de Lubricación y
                    Directores
                    Comerciales que participarán en la actividad, a través del formato que enviaremos en el evento de
                    lanzamiento. Cierre de inscripciones: 25 de julio de 2025.
                </p>
                <p>
                    • Desde el 1 de agosto de 2025 hasta el 30 de junio de 2026, los AC deberán subir a Vision los reportes
                    de
                    ventas en productos de la categoría Flagship pertenecientes al segmento B2B en las líneas de negocio CVL
                    e Industria; para cumplir con los criterios de evaluación (KPIs) de la actividad.
                </p>
                <p>
                    • A la par, deben reportar el mayor número de beneficios generados a sus Clientes B2B con los productos
                    participantes, realizando el debido proceso de generación de POPs y HiPOPs (entrega y recepción por
                    cliente de pruebas de desempeño con autorización firmada de generación de HiPOPs), durante el período de
                    evaluación*.
                </p>
            </div>
            <div class="about-content" id="about-productos" style="display:none;">
                <h2>Productos participantes</h2>
                <p>
                    Base oficial el listado completo de productos de la categoría Flagship pertenecientes al segmento
                    B2B en las líneas de negocio CVL e Industria.
                </p>
                <p>
                    Este conjunto de productos representa el universo sobre el cual se realizarán los análisis
                    correspondientes a indicadores como profundidad de portafolio, crecimiento, penetración, mezcla de
                    ventas (mix), y activaciones POP e HiPOP.
                </p>
                <p>
                    Dicho listado incluye productos de origen importado y nacional, clasificados según su tipo de
                    lubricante (transmisiones, industrial, grasas, engranajes, hidráulico, aviación, etc.), formato de
                    empaque (tambor, balde, unidad, cuartos).
                </p>
                <button class="criterio-btn" id="btn-criterio">Productos <span>&#8250;</span></button>
            </div>

            <div class="about-content" id="about-productos-lista" style="display:none;">
                <h1>Productos</h1>
            </div>

            <div class="about-content" id="about-criterio" style="display:none;">
                <h2>Criterio de desempate</h2>
                <p>Valores que generan valor en el producto foco (agosto 2025 - junio 2026):</p>
                <div class="criterio-productos">
                    <img src="{{ asset('assets/productos-icon.png') }}" alt="Icono de productos foco">
                    <h3>Productos foco para desempate</h3>
                </div>
                <div class="criterio-productos-list">
                    <ul>
                        <li>Mobil DTE 800</li>
                        <li>Mobil DTE 900</li>
                        <li>Mobil DTE 10 Excel</li>
                        <li>Mobil DTE 20 Ultra</li>
                        <li>Mobil DTE 700</li>
                        <li>Mobil DTE 732 M</li>
                        <li>Mobil DTE 746</li>
                        <li>Mobil DTE 932 GT</li>
                        <li>Mobil DTE 932</li>
                        <li>Mobil DTE 936</li>
                    </ul>
                    <ul>
                        <li>Mobilgear 600 XP 220</li>
                        <li>Mobilgear 600 XP 320</li>
                        <li>Mobilgear 600 XP 460</li>
                        <li>Mobilgear SHC XMP 150</li>
                        <li>Mobilgear SHC XMP 220</li>
                        <li>Mobilgear SHC XMP 320</li>
                        <li>Mobilgear SHC XMP 460</li>
                        <li>Mobilith SHC 100</li>
                        <li>Mobilith SHC 220</li>
                        <li>Mobilith SHC 460</li>
                    </ul>
                    <ul>
                        <li>Mobilith SHC 1500</li>
                        <li>Mobilith SHC 2200</li>
                        <li>Mobilith SHC 4600</li>
                        <li>Mobilith SHC 6800</li>
                        <li>Mobilith SHC PM 220</li>
                        <li>Mobilith SHC PM 460</li>
                        <li>Mobilith SHC PM 1000</li>
                        <li>Mobilith SHC PM 1500</li>
                        <li>Mobilith SHC PM 2200</li>
                        <li>Mobilith SHC PM 4600</li>
                    </ul>
                </div>
                <button class="criterio-btn" id="btn-productos">Productos participantes <span style="font-size:1.3em;vertical-align:middle;">&#8250;</span></button>
            </div>
            <div class="about-content" id="about-kpis" style="display:none;">
                <div class="kpi-header-row">
                    <h2>KPIs</h2>
                    <p>
                        A través de un sistema de puntuación evaluaremos el desempeño de los AC durante la actividad, clasificando sus resultados de mayor a menor, a través de 6 rangos (1 para el resultado general y 5 por indicador clave o KPI):
                    </p>
                </div>
                <div class="kpi-table-container">
                    <table class="kpi-table">
                        <thead>
                            <tr>
                                <th>KPI</th>
                                <th>Descripción</th>
                                <th>Puntaje máx.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>Crecimiento % en Flagship</b></td>
                                <td>Porcentaje (%) de crecimiento de productos Flagship en comparación con el período de evaluación anterior.</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td><b>Crecimiento absoluto en galones</b></td>
                                <td>Crecimiento del volumen en galones de productos Flagship vs. el período anterior.</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><b>Penetración Flagship vs. portafolio total</b></td>
                                <td>Relación entre el número de familias de la categoría Flagship vendidos y el número total de SKUs vendidos.</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td><b>Mix Flagship</b></td>
                                <td>Mayor mix de Flagship vs. total galonaje. Porcentaje (%) del volumen de ventas de Flagship sobre el volumen total de ventas en el período del concurso.</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td><b>POPs &amp; HiPOPs Flagship</b></td>
                                <td>Número de casos de éxito (POPs y HiPOPs) que demuestren los beneficios generados en los Clientes B2B con productos Flagship durante el período de evaluación.</td>
                                <td>30</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">Matriz total</td>
                                <td>100</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        @livewire('footer-component')
    </div>
    <script>
        // Tabs principales
        document.querySelectorAll('.about-tab').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.about-tab').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const tab = this.getAttribute('data-tab');
                document.querySelectorAll('.about-content').forEach(c => c.style.display = 'none');
                document.getElementById('about-' + tab).style.display = 'flex';
            });
        });
        // Botón para mostrar lista de productos
        document.getElementById('btn-criterio').addEventListener('click', function() {
            document.querySelectorAll('.about-content').forEach(c => c.style.display = 'none');
            document.getElementById('about-productos-lista').style.display = 'flex';
        });
        // Botón para volver a productos participantes
        document.getElementById('btn-productos').addEventListener('click', function() {
            // Cambiar la vista al contenido de productos
            document.querySelectorAll('.about-content').forEach(c => c.style.display = 'none');
            document.getElementById('about-productos').style.display = 'flex';
            
            // Actualizar el estado activo en los botones del menú
            document.querySelectorAll('.about-tab').forEach(b => b.classList.remove('active'));
            document.querySelector('.about-tab[data-tab="productos"]').classList.add('active');
        });
    </script>
@endsection
