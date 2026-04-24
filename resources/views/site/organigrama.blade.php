@extends('site.layouts.default')

@section('content')
    <div data-aos="zoom-in" data-aos-duration="1000" class="banner" style="background-image: url(img/bg-pages.svg);">
        <div class="overlay"></div>
        <div class="content">
            <div class="efeito">
                <div style="margin-left: 1px;">
                    <h3>Organigrama</h3>
                    <p class="mt-3">Início > Sobre Nós </p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div></div>
                <a href="{{ route('navigation.about') }}" class="text-center">
                    Sobre nós
                    <i style="ml-2" class="far fa-lightbulb"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container pt-3 pb-3 px-0">
        <div class="row m-0 p-0">
            <img src="{{ asset('img/organigrama.jpg') }}" alt="imagem do organograma" />
        </div>
    </div>
@endsection
