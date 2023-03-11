@extends('layouts.app')

@section('content')

    <section id="contacts"
             class="contacts-section top_mask_add ds overflow-visible background-contact s-pt-70 s-pb-60 s-pt-md-95 s-pb-md-80 s-pt-xl-170 s-pb-xl-140 c-gutter-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4 animate" data-animation="scaleAppear">
                    <span class="color-main fs-24 font-main text-uppercase">Lust Studio</span>
                    <h2 class="mt-0 mb-40 contact-title text-uppercase">Contáctanos</h2>
                    <div class="media mb-20">
                        <h5 class="fs-20 mb-0 min-w-100">Teléfono:</h5>
                        <div class="media-body ml-0 d-flex flex-column">
                            <span>+57 3225481295</span>
                        </div>
                    </div>
                    <div class="media mb-20">
                        <h5 class="fs-20 mb-0 min-w-100">Email:</h5>
                        <div class="media-body ml-0 d-flex flex-column">
                            <span>luststudios2023@gmail.com</span>
                        </div>
                    </div>
                    <div class="media mb-20">
                        <h5 class="fs-20 mb-0 min-w-100">Dirección:</h5>
                        <div class="media-body ml-0 d-flex flex-column">
                            <span>Calle 55a Sur # 68b - 23</span>
                        </div>
                    </div>
                </div>
                <!--.col-* -->
                <div class="fw-divider-space hidden-above-lg mt-20"></div>
                <div class="col-lg-7 col-xl-8 animate" data-animation="scaleAppear">

                    @if(session('info'))
                        <div class="alert alert-success">
                            <strong>{{ session('info') }}</strong>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div id="error-message" class="p-2 bg-danger text-white">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br>
                    @endif

                    <form action="{{ route('contactanos.store') }}" method="POST" class="c-mb-20 c-gutter-20">

                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"
                                           placeholder="nombre completo" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="age" class="form-control" placeholder="edad"
                                           value="{{ old('age') }}">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="telephone" class="form-control" placeholder="Teléfono"
                                           value="{{ old('telephone') }}">
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email"
                                           value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                        <textarea rows="6" cols="45" name="message" class="form-control"
                                                  placeholder="deja tu mensaje">{{ old('message') }}</textarea>
                                    <button type="submit" class="btn-submit"><i class="fa fa-paper-plane"></i></button>
                                </div>
                                <br>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                        </div>
                    </form>
                </div>
                <!--.col-* -->
            </div>
        </div>
    </section>
@endsection
