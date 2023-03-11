@extends('layouts.app')

@section('content')

    <section
        class="about s-pt-70 s-pb-115 s-pb-md-130 s-pb-lg-100 s-pt-lg-50 s-pb-xl-235 overflow-visible s-overlay s-mobile-overlay">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xs-12 col-lg-6">
                    <h5 class="about-subtitle">QUIENES</h5>
                    <h4 class="about-title">SOMOS?</h4>

                    <div class="fw-divider-space hidden-below-lg mt-45"></div>
                    <p>
                        Somos una agencia de modelos webcam, contamos con un estudio en la ciudad de
                        Bogotá. Enfocados en promover un grato ambiente de trabajo, preocupándonos del bienestar
                        de nuestras modelos, ofreciendo instalaciones cómodas, seguras y privadas, donde sea fácil y
                        divertido ganar dinero sin preocuparse de nada. </p>
                    <p>
                        Vinculate con una agencia con formación, puntualidad y respaldo, ajustamos tus horarios para
                        que obtengas excelentes ingresos. Sé modelo WebCam en Bogotá.
                    </p>
                    <div class="col-12 text-center">
                        <a href="{{ route('contactanos.index') }}" class="btn btn-maincolor">únete ahora</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-6">
                    <img src="images/home_9.jpeg" alt="Logo about">
                </div>
            </div>
{{--            <div class="fw-divider-space hidden-below-md pt-50"></div>--}}
        </div>
    </section>

@endsection
