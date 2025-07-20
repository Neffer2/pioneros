@extends('layouts.main')
@section('title', 'Premios')
@section('content')
    @php
        $premios = [
            [
                'key' => 'total_premios',
                'label' => 'Total premios',
                'active' => true,
            ],
            [
                'key' => 'primer_lugar',
                'label' => '1er lugar',
                'active' => false,
            ],
            [
                'key' => 'segundo_lugar',
                'label' => '2do lugar',
                'active' => false,
            ],
            [
                'key' => 'tercer_lugar',
                'label' => '3er lugar',
                'active' => false,
            ],
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

                    <div class="premio-mayor">

                        <div class="premio-info">
                            <div class="trophy-icon">
                                <img src="{{ asset('assets/icono-trofeo.png') }}" alt="">
                            </div>
                            <div class="premio-info-text">
                                <h2>1 Premio mayor</h2>
                                <h3>23 Premios aspiracionales</h3>
                            </div>
                        </div>
                        <div class="premios-img">
                            <img src="{{ asset('assets/puestos-uno.png') }}" alt="Premios Totales">
                        </div>
                        <div class="premios-img">
                            <img src="{{ asset('assets/puestos-dos.png') }}" alt="Premios Totales">
                        </div>
                        <div class="premios-img">
                            <img src="{{ asset('assets/puestos-tres.png') }}" alt="Premios Totales">
                        </div>
                    </div>
                    <div class="premio-info-bottom">
                        <p> Más de $200 millones <span class="premios-info-span">de pesos en premios</span></p>
                    </div>
                </div>

                <div class="premios-details">

                </div>

            </div>

            {{-- Vista 1er Lugar --}}
            <div class="premios-section" id="section-primer_lugar" style="display: none;">
                <h2>Experiencia Motorsport</h2>
                <div class="primer-lugar-content">
                    <div class="primer-lugar-left">
                        <div class="primer-lugar-img-container">
                            <img src="{{ asset('assets/premios/primer/placa-primer.png') }}" alt="Placa Primer Lugar">
                            <img src="{{ asset('assets/premios/primer/merch-primer.png') }}" alt="Merch Primer Lugar">
                        </div>
                        <div class="primer-lugar-text">
                            <h3>Placa conmemorativa + Merch Oficial Mobil 1™ NASCAR</h3>
                            <p>Director Comercial ● Asesor Comercial B2B ● Ingeniero de Lubricación</p>
                        </div>
                    </div>
                    <div class="primer-lugar-center">
                        <p>+</p>
                    </div>
                    <div class="primer-lugar-right">
                        <div class="primer-lugar-img-container">
                            <img src="{{ asset('assets/premios/primer/experiencia-primer.png') }}" alt="Experiencia Primer Lugar">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Vista 2do Lugar --}}
            <div class="premios-section" id="section-segundo_lugar" style="display: none;">
                <div class="carousel-wrapper">
                    <button class="carousel-arrow prev" id="prev2">❮</button>
                    <div class="carousel-content">
                        <h2 id="title2">Agente comercial</h2>
                        <div class="premios-content">
                            <div class="carousel-slides" id="slides2">
                                <div class="slide active">
                                    <img src="{{ asset('assets/pieza-segundo-puesto-agente-comercial.png') }}"
                                        alt="Agente Comercial">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('assets/pieza-segundo-puesto-asesor-comercial.png') }}"
                                        alt="Asesor Comercial B2B">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('assets/pieza-segundo-puesto-ingeniero.png') }}"
                                        alt="Ingeniero de Lubricación">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-arrow next" id="next2">❯</button>
                </div>
            </div>

            {{-- Vista 3er Lugar --}}
            <div class="premios-section" id="section-tercer_lugar" style="display: none;">
                <div class="carousel-wrapper">
                    <button class="carousel-arrow prev" id="prev3">❮</button>
                    <div class="carousel-content">
                        <h2 id="title3">Agente comercial</h2>
                        <div class="premios-content">
                            <div class="carousel-slides" id="slides3">
                                <div class="slide active">
                                    <img src="{{ asset('assets/pieza-tercer-puesto-agente-comercial.png') }}"
                                        alt="Agente Comercial">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('assets/pieza-tercer-puesto-asesor-comercial.png') }}"
                                        alt="Asesor Comercial B2B">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('assets/pieza-tercer-puesto-ingeniero.png') }}"
                                        alt="Ingeniero de Lubricación">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-arrow next" id="next3">❯</button>
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

        // Función para manejar los carruseles
        function setupCarousel(slideId, prevId, nextId, titleId) {
            const slides = document.querySelector(`#${slideId}`);
            const prevButton = document.querySelector(`#${prevId}`);
            const nextButton = document.querySelector(`#${nextId}`);
            const titleElement = document.querySelector(`#${titleId}`);

            if (!slides || !prevButton || !nextButton || !titleElement) return;

            const titles = [
                'Agente comercial',
                'Asesor comercial B2B',
                'Ingeniero de lubricación'
            ];

            let currentSlide = 0;

            function updateSlides() {
                const allSlides = slides.querySelectorAll('.slide');
                allSlides.forEach((slide, index) => {
                    slide.classList.remove('active');
                    if (index === currentSlide) {
                        slide.classList.add('active');
                    }
                });
                titleElement.textContent = titles[currentSlide];
            }

            prevButton.addEventListener('click', () => {
                currentSlide = (currentSlide - 1 + 3) % 3;
                updateSlides();
            });

            nextButton.addEventListener('click', () => {
                currentSlide = (currentSlide + 1) % 3;
                updateSlides();
            });
        }

        // Inicializar los carruseles
        setupCarousel('slides2', 'prev2', 'next2', 'title2');
        setupCarousel('slides3', 'prev3', 'next3', 'title3');
    </script>


@endsection
