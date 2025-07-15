@extends('layouts.main')
@section('title', 'Premios')
@section('content')
    @php
        $premios = [
            [
                'key' => 'total_premios',
                'label' => 'Total premios',
                'active' => true
            ],
            [
                'key' => 'primer_lugar',
                'label' => '1er lugar',
                'active' => false
            ],
            [
                'key' => 'segundo_lugar', 
                'label' => '2do lugar',
                'active' => false
            ],
            [
                'key' => 'tercer_lugar',
                'label' => '3er lugar', 
                'active' => false
            ]
        ];
    @endphp

    <div class="premios-container">
        <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
        <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">

        {{-- Botones para cambiar entre premios --}}
        <div class="premios-switcher">
            @foreach ($premios as $i => $premio)
                <button class="premios-btn" data-premio="{{ $premio['key'] }}"
                    @if ($i === 0) id="active-premios-btn" @endif>
                    {{ $premio['label'] }}
                </button>
            @endforeach
        </div>

        <div class="premios-info">
            {{-- Vista Total Premios --}}
            <div class="premios-section" id="section-total_premios" style="display: flex;">
                <div class="premios-content-total">
                    <div class="premios-header">
                        <div class="premio-mayor">
                            <div class="trophy-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="premio-info">
                                <h2>1 Premio mayor</h2>
                                <h3>23 Premios aspiracionales</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="premios-details">
                        <div class="lugar-premio primer-lugar">
                            <div class="medal-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="lugar-info">
                                <span class="lugar-title">Ag. Comercial<br>1er Lugar</span>
                                <div class="premio-items">
                                    <span class="premio-desc">Placa conmemorativa + Merch oficial + Experiencia Motorsport (Todo incluido)</span>
                                    <ul class="premio-list">
                                        <li>Director Comercial</li>
                                        <li>Asesor Comercial B2B</li>
                                        <li>Ingeniero de lubricación</li>
                                        <li><strong>+ 1 ingeniero ventas OT</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="motorsport-logo">
                                <span>HOMESTEAD MIAMI SPEEDWAY</span>
                            </div>
                        </div>
                        
                        <div class="lugar-premio segundo-lugar">
                            <div class="medal-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="lugar-info">
                                <span class="lugar-title">Ag. Comercial<br>2do Lugar</span>
                                <div class="premio-items">
                                    <span class="premio-desc">Premios por Agente Comercial</span>
                                    <ul class="premio-list">
                                        <li>Asesor Comercial B2B</li>
                                        <li>Ingeniero Lubricación</li>
                                    </ul>
                                    <div class="premio-icons">
                                        <span>🏆 + 🎁 + 🏆 + 📜 + 💳</span>
                                        <span class="icon-labels">Placa  Equipos  Merch oficial  Cursos  Bonos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="number-badge segundo">2</div>
                        </div>
                        
                        <div class="lugar-premio tercer-lugar">
                            <div class="medal-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="lugar-info">
                                <span class="lugar-title">Ag. Comercial<br>3er Lugar</span>
                                <div class="premio-items">
                                    <span class="premio-desc">+ Agente comercial</span>
                                </div>
                            </div>
                            <div class="number-badge tercero">3</div>
                        </div>
                    </div>
                    
                    <div class="premios-total">
                        <h2>Más de $220 millones<br>de pesos en premios</h2>
                    </div>
                </div>
            </div>

            {{-- Vista 1er Lugar --}}
            <div class="premios-section" id="section-primer_lugar" style="display: none;">
                <div class="premios-content">
                    <h2>Primer Lugar</h2>
                    <p>Contenido específico del primer lugar...</p>
                </div>
            </div>

            {{-- Vista 2do Lugar --}}
            <div class="premios-section" id="section-segundo_lugar" style="display: none;">
                <div class="premios-content">
                    <h2>Segundo Lugar</h2>
                    <p>Contenido específico del segundo lugar...</p>
                </div>
            </div>

            {{-- Vista 3er Lugar --}}
            <div class="premios-section" id="section-tercer_lugar" style="display: none;">
                <div class="premios-content">
                    <h2>Tercer Lugar</h2>
                    <p>Contenido específico del tercer lugar...</p>
                </div>
            </div>
        </div>
        @livewire('footer-component')
    </div>

    <script>
        document.querySelectorAll('.premios-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Oculta todas las secciones
                document.querySelectorAll('.premios-section').forEach(sec => sec.style.display = 'none');
                // Quita el estilo activo de todos los botones
                document.querySelectorAll('.premios-btn').forEach(b => {
                    b.style.background = '#003E71';
                    b.style.color = '#fff';
                });
                // Muestra la sección seleccionada
                document.getElementById('section-' + this.dataset.premio).style.display = 'flex';
                // Marca el botón activo
                this.style.background = '#3b5ca8';
                this.style.color = '#fff';
            });
        });
        
        // Inicializar el primer botón como activo
        document.getElementById('active-premios-btn').style.background = '#3b5ca8';
    </script>
@endsection
