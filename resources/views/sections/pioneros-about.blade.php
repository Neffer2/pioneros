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
                    Una iniciativa de Mobilᵗʰ Industria para reconocer el trabajo, las acciones y los resultados obtenidos del
                    equipo de ventas B2B con la venta y uso de productos Flagship.
                </p>
            </div>
            <div class="about-content" id="about-mecanica" style="display:none;">
                <h2>Mecánica de participación</h2>
                <div class="mecanica-grid">
                    <div class="mecanica-item">
                        <div class="mecanica-number">1.</div>
                        <div class="mecanica-icon">
                            <img src="{{ asset('assets/mecanica-uno.png') }}" alt="Inscripción">
                        </div>
                        <div class="mecanica-text">
                            <p>Inscribir a los equipos participantes:</p>
                            <p>Asesores B2B, Ingenieros Lubricación y Directores Comerciales</p>
                            <p class="mecanica-note">Cierre: 25 de julio de 2025.</p>
                        </div>
                    </div>
                    <div class="mecanica-item">
                        <div class="mecanica-number">2.</div>
                        <div class="mecanica-icon">
                            <img src="{{ asset('assets/mecanica-dos.png') }}" alt="Ventas">
                        </div>
                        <div class="mecanica-text">
                            <p>Venta por valor en productos flagship</p>
                            <p>cumpliendo con los KPIs durante el</p>
                            <p>período de evaluación.</p>
                        </div>
                    </div>
                    <div class="mecanica-item">
                        <div class="mecanica-number">3.</div>
                        <div class="mecanica-icon">
                            <img src="{{ asset('assets/mecanica-tres.png') }}" alt="Reportes">
                        </div>
                        <div class="mecanica-text">
                            <p>Reportar el mayor número de</p>
                            <p>beneficios a Clientes B2B con la</p>
                            <p>generación de POPs y HiPOPs*.</p>
                        </div>
                    </div>
                </div>
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
                <button class="criterio-btn" id="btn-criterio">Lista de productos <span>&#8250;</span></button>
            </div>

            <div class="about-content" id="about-productos-lista" style="display:none;">
                <div class="productos-header">
                    <h2>Productos participantes</h2>
                </div>
                <div class="productos-container">
                    <div class="productos-column">
                        <ul>
                            <li>Synturion 6</li>
                            <li>Mobilᵗʰ Delvac 1 Transmission Fluid Mbt 75W-90</li>
                            <li>Mobilᵗʰ Delvac 1 Transmission Fluid V30</li>
                            <li>Mobilᵗʰ Delvac 1 Transmission Fluid 50</li>
                            <li>Mobilᵗʰ Delvac 1 Gear Oil 80W-140</li>
                            <li>Mobilᵗʰ Delvac 1 Gear Oil 75W-90</li>
                            <li>Mobilᵗʰ Delvac 1 Atf</li>
                            <li>Mobilᵗʰ Delvac 1 Le 5W30</li>
                            <li>Pyrolube 830</li>
                            <li>Mobiltempᵗʰ Shc 32</li>
                            <li>Mobiltempᵗʰ Shc 100</li>
                            <li>Mobilitᵗʰ Shc Pm 460</li>
                            <li>Mobilitᵗʰ Shc 460</li>
                            <li>Mobilitᵗʰ Shc 220</li>
                            <li>Mobilitᵗʰ Shc 1500</li>
                        </ul>
                    </div>
                    <div class="productos-column">
                        <ul>
                            <li>Mobilitᵗʰ Shc 100</li>
                            <li>Mobilitᵗʰ Shc 007</li>
                            <li>Mobilᵗʰ Shc Polyrex 462</li>
                            <li>Mobilᵗʰ Shc Polyrex 222</li>
                            <li>Mobilᵗʰ Shc Pm 220</li>
                            <li>Mobilgearᵗʰ Shc Xmp 320</li>
                            <li>Mobilgearᵗʰ Shc Xmp 460</li>
                            <li>Mobilᵗʰ Shc Gear 6800</li>
                            <li>Mobilᵗʰ Shc Gear 680</li>
                            <li>Mobilᵗʰ Shc Gear 460M</li>
                            <li>Mobilᵗʰ Shc Gear 3200</li>
                            <li>Mobilᵗʰ Shc Gear 320</li>
                            <li>Mobilᵗʰ Shc Gear 22M</li>
                            <li>Mobilᵗʰ Shc Gear 220</li>
                            <li>Mobilᵗʰ Shc Gear 1500</li>
                        </ul>
                    </div>
                    <div class="productos-column">
                        <ul>
                            <li>Mobilᵗʰ Shc Cibus 68</li>
                            <li>M-Shc Cibus 460</li>
                            <li>Mobilᵗʰ Shc Cibus 46</li>
                            <li>Mobilᵗʰ Shc Cibus 320</li>
                            <li>Mobilᵗʰ Shc Cibus 32</li>
                            <li>Mobilᵗʰ Shc Cibus 220</li>
                            <li>M-Shc Cibus 150</li>
                            <li>Mobilᵗʰ Shc 824</li>
                            <li>Mobilᵗʰ Shc 639</li>
                            <li>Mobilᵗʰ Shc 636</li>
                            <li>Mobilᵗʰ Shc 634</li>
                            <li>Mobilᵗʰ Shc 632</li>
                            <li>Mobilᵗʰ Shc 630</li>
                            <li>Mobilᵗʰ Shc 629</li>
                            <li>Mobilᵗʰ Shc 627</li>
                        </ul>
                    </div>
                    <div class="productos-column">
                        <ul>
                            <li>Mobilᵗʰ Shc 626</li>
                            <li>Mobilᵗʰ Shc 624</li>
                            <li>Mobilitᵗʰ Shc 526</li>
                            <li>Mobilᵗʰ Shc Rarus 32</li>
                            <li>Mobilᵗʰ Shc Rarus 46</li>
                            <li>Mobilᵗʰ Shc Rarus 68</li>
                            <li>Mobilᵗʰ Rarus 829</li>
                            <li>Mobilᵗʰ Rarus 827</li>
                            <li>Mobilᵗʰ Pegasus 1</li>
                            <li>Mobilᵗʰ Glygoyle 68</li>
                            <li>Mobilᵗʰ Glygoyle 460</li>
                            <li>Mobilᵗʰ Glygoyle 320</li>
                            <li>Glygoyle 30</li>
                            <li>Mobilᵗʰ Glygoyle 22</li>
                            <li>Mobilᵗʰ Glygoyle 150</li>
                        </ul>
                    </div>
                    <div class="productos-column">
                        <ul>
                            <li>Mobilᵗʰ Glygoyle 1000</li>
                            <li>Mobilᵗʰ Glygoyle 100</li>
                            <li>Mobilᵗʰ Gargoyle Arctic Shc 226</li>
                            <li>Mobilᵗʰ Eal Arctic 68</li>
                            <li>Mobilᵗʰ Eal Envirosyn 46 H</li>
                            <li>Mobilᵗʰ Jet Oil II</li>
                            <li>Mobilᵗʰ Jet Oil 254</li>
                            <li>Mobilᵗʰ Shc Rarus 46</li>
                            <li>Mobilᵗʰ Glygoyle 11</li>
                            <li>Mobilᵗʰ Delvac 1 Trans Fluid 40</li>
                            <li>Mobilitᵗʰ Shc 100</li>
                            <li>Mobilᵗʰ Glygoyle 680</li>
                            <li>Mobilᵗʰ Glygoyle 220</li>
                            <li>Mobilᵗʰ Delvac Ultra 5W-40 Ultimate Protection V1</li>
                        </ul>
                    </div>
                </div>
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
                        <li>Mobilᵗʰ DTE 800</li>
                        <li>Mobilᵗʰ DTE 900</li>
                        <li>Mobilᵗʰ DTE 10 Excel</li>
                        <li>Mobilᵗʰ DTE 20 Ultra</li>
                        <li>Mobilᵗʰ DTE 700</li>
                        <li>Mobilᵗʰ DTE 732 M</li>
                        <li>Mobilᵗʰ DTE 746</li>
                        <li>Mobilᵗʰ DTE 932 GT</li>
                        <li>Mobilᵗʰ DTE 932</li>
                        <li>Mobilᵗʰ DTE 936</li>
                    </ul>
                    <ul>
                        <li>Mobilgearᵗʰ 600 XP 220</li>
                        <li>Mobilgearᵗʰ 600 XP 320</li>
                        <li>Mobilgearᵗʰ 600 XP 460</li>
                        <li>Mobilgearᵗʰ SHC XMP 150</li>
                        <li>Mobilgearᵗʰ SHC XMP 220</li>
                        <li>Mobilgearᵗʰ SHC XMP 320</li>
                        <li>Mobilgearᵗʰ SHC XMP 460</li>
                        <li>Mobilitᵗʰ SHC 100</li>
                        <li>Mobilitᵗʰ SHC 220</li>
                        <li>Mobilitᵗʰ SHC 460</li>
                    </ul>
                    <ul>
                        <li>Mobilitᵗʰ SHC 1500</li>
                        <li>Mobilitᵗʰ SHC 2200</li>
                        <li>Mobilitᵗʰ SHC 4600</li>
                        <li>Mobilitᵗʰ SHC 6800</li>
                        <li>Mobilitᵗʰ SHC PM 220</li>
                        <li>Mobilitᵗʰ SHC PM 460</li>
                        <li>Mobilitᵗʰ SHC PM 1000</li>
                        <li>Mobilitᵗʰ SHC PM 1500</li>
                        <li>Mobilitᵗʰ SHC PM 2200</li>
                        <li>Mobilitᵗʰ SHC PM 4600</li>
                    </ul>
                </div>
                <button class="criterio-btn" id="btn-productos">Productos participantes <span
                        style="font-size:1.3em;vertical-align:middle;">&#8250;</span></button>
            </div>
            <div class="about-content" id="about-kpis" style="display:none;">
                <div class="kpi-header-row">
                    <h2>KPIs</h2>
                    <p>
                        A través de un sistema de puntuación evaluaremos el desempeño de los AC durante la actividad,
                        clasificando sus resultados de mayor a menor, a través de 6 ranking (1 para el resultado general y 5
                        por indicador clave o KPI):
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
                                <td>Porcentaje (%) de crecimiento de productos Flagship en comparación con el período de
                                    evaluación anterior.</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td><b>Crecimiento absoluto en galones</b></td>
                                <td>Crecimiento del volumen en galones de productos Flagship vs. el período anterior.</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><b>Penetración Flagship vs. portafolio total</b></td>
                                <td>Relación entre el número de familias de la categoría Flagship vendidos y el número total
                                    de SKUs vendidos.</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td><b>Mix Flagship</b></td>
                                <td>Mayor mix de Flagship vs. total galonaje. Porcentaje (%) del volumen de ventas de
                                    Flagship sobre el volumen total de ventas en el período del concurso.</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td><b>POPs &amp; HiPOPs Flagship</b></td>
                                <td>Número de casos de éxito (POPs y HiPOPs) que demuestren los beneficios generados en los
                                    Clientes B2B con productos Flagship durante el período de evaluación.</td>
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

    </div>
    @livewire('footer-component')
    <script>
        // Tabs principales
        document.querySelectorAll('.about-tab').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.about-tab').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const tab = this.getAttribute('data-tab');
                document.querySelectorAll('.about-content').forEach(c => c.style.display = 'none');
                document.getElementById('about-' + tab).style.display = 'flex';
                
                // Manejar cambio de fondo
                const aboutInfo = document.querySelector('.about-info');
                aboutInfo.classList.remove('mecanica-active', 'kpis-active');
                
                if (tab === 'mecanica') {
                    aboutInfo.classList.add('mecanica-active');
                } else if (tab === 'kpis') {
                    aboutInfo.classList.add('kpis-active');
                }
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
