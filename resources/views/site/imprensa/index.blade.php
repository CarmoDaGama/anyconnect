@extends('site.layouts.default')

@section('styles')
    <style>
        .imprensa {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            padding: 28px 115px;
            margin-top: 32px;
        }

        .noticias-recentes .card-noticias-recentes {
            display: flex;
            gap: 4px;
            margin-bottom: 16px;
        }

        .noticias-recentes .card-noticias-recentes a {
            display: block;
        }

        .noticias-recentes .card-noticias-recentes img {
            width: 100px;
            height: 100px;
        }

        @media (max-width: 991px) {
            .imprensa {
                grid-template-columns: 1fr 1fr;
                padding: 28px 14px;
            }
        }

        @media (max-width: 871px) {
            .imprensa {
                grid-template-columns: 1fr;
                padding: 28px 14px;
            }
        }
    </style>
@endsection

@section('content')
    <div data-aos="zoom-in" data-aos-duration="1000" class="banner" style="background-image: url(img/bg-pages.svg);">
        <div class="overlay"></div>
        <div class="content">
            <div class="efeito">
                <div style="margin-left: 1px;">
                    <h3>Imprensa</h3>
                    <p class="mt-3">Início > Comunicação</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div></div>
                <a href="{{ route('navigation.services') }}" class="text-center">
                    Produtos e Serviços
                    <i class="far fa-lightbulb ms-2"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="imprensa">
        <div class="">
            <h2>Imprensa</h2>
            @forelse ($imprensas as $item)
                <div class="mb-5">
                    <img src="{{ asset('storage/' . $item->cover) }}" alt="{{ $item->title }}" class="news-img" />
                    <div>
                        <a href="{{ route('imprensa.show', $item->slug) }}" class="text-dark text-decoration-none">
                            <h4>{{ $item->title }}</h4>
                        </a>
                        <p>{!! str()->limit($item->content, 150) !!}</p>
                        <p class="text-muted small mt-2">
                            <i class="fas fa-clock me-1"></i>{{ $item->created_at->diffForHumans() }}
                            <i class="fas fa-eye ms-4 me-1"></i>{{ $item->views }} visualizações
                        </p>
                    </div>
                </div>
            @empty
                <p>Nenhum conteúdo encontrado</p>
            @endforelse
        </div>

        <div class="noticias-recentes">
            <h3>Notícias Recentes</h3>
            @forelse ($noticias as $item)
                <div class="card-noticias-recentes">
                    <img src="{{ asset('storage/' . $item->cover) }}" alt="{{ $item->title }}" class="recent-img" />
                    <div>
                        <a href="{{ route('imprensa.show', $item->slug) }}" class="text-dark text-decoration-none">
                            {{ $item->title }}
                        </a>
                        <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            @empty
                <p>Nenhum conteúdo encontrado</p>
            @endforelse

            <h3 class="mt-4">Categorias</h3>
            <ul class="category-list">
                @php
                    $categories = \App\Models\Category::whereBetween('id', [10, 17])->get();
                @endphp
                @foreach ($categories as $item)
                    <li>{{ $item->name }} ({{ $item->imprensas->count() }})</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
