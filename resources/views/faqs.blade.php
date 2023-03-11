@extends('layouts.app')

@section('content')

    <section id="faqs"
             class="faqs ds hello-section s-pt-70 s-pb-115  s-pb-md-130 s-pb-lg-100 s-pt-lg-100 s-pb-xl-235 overflow-visible s-overlay s-mobile-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-lg-8 text-center">
                    <h5 class="subtitle">PREGUNTAS</h5>
                    <h4 class="title">FRECUENTES</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-md-12 col-lg-4">
                    <h5 class="subtitle  mb-3">¿Que hace una modelo web cam?</h5>
                    <p>Es una artista que realiza un show en vivo el cual el 80% de las ocasiones es un
                        show sexualmente provocativo mediante el cual conectas con usuarios en su
                        mayoría distribuidores en Estados Unidos, Canadá, Europa y Asia</p>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-4">
                    <h5 class="subtitle  mb-3">¿Cuáles son los porcentajes que se manejan?</h5>
                    <p>Lust Studio busca siempre ofrecer a sus modelos la mayor comodidad para que se
                        sientan a gusto en su lugar de trabajo, manejamos varios porcentajes según el
                        rendimiento de cada modelo, además obtendrás bonificaciones en efectivo por
                        alcanzar metas establecidas.</p>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-4">
                    <h5 class="subtitle  mb-3">¿Te puedes retirar cuando quieras?</h5>
                    <p>Claro que sí, en este trabajo lo que importa es que te sientas cómoda y te
                        diviertas haciendo lo que haces, pero si no es así, puedes irte cuando lo desees
                        y volver por tu pago.</p>
                </div>
                <div class="col-12 text-center">
                    <a href="{{ route('contactanos.index') }}" class="btn btn-maincolor">únete ahora</a>
                </div>
            </div>
        </div>
    </section>
@endsection
