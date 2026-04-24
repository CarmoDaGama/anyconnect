@extends('site.layouts.default')

@section('content')
    <div data-aos="zoom-in" data-aos-duration="1000" class="banner" style="background-image: url(img/bg-pages.svg);">
        <div class="overlay"></div>
        <div class="content">
            <div class="efeito">
                <div style="margin-left: 1px;">
                    <h3>Notícia</h3>
                    <p class="mt-3">Início > Comunicação</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div></div>
                <a href="{{ route('navigation.services') }}" class="text-center">
                    Produtos e Serviços
                    <i style="ml-2" class="far fa-lightbulb"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="noticias px-0 mt-4">
        <div class="row">
            <!-- Main news section -->
            <div class="col-lg-8">
                <h2>Notícias</h2>
                @forelse ($noticias as $item)
                    <div class="card-noticia">
                        <img src="{{ asset('storage/' . $item->cover) }}" alt="{{ $item->title }}" class="news-img" />
                        <a href="{{ route('imprensa.show', $item->slug) }}">{{ $item->title }}</a>
                        <p>{!! str()->limit($item->content) !!}</p>
                        <div class="d-flex">
                            <span>
                                <i class="fas fa-clock" style="margin-right: 5px;"></i>
                                {{ $item->created_at->diffForHumans() }}
                            </span>
                            <span>
                                <i class="fas fa-eye" style="margin-left: 50px;"></i>
                                {{ $item->views }}
                                Visualizações
                            </span>
                        </div>
                    </div>
                @empty
                    <div>
                        <p>Nenhum conteúdo encontrado</p>
                    </div>
                @endforelse
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <h2>Imprensa</h2>
                <div class="mb-3">
                    @forelse ($imprensas as $item)
                        <div class="card-imprensa">
                            <img src="{{ asset('storage/' . $item->cover) }}" alt="{{ $item->title }}"
                                class="recent-img me-2" />
                            <div>
                                <a href="{{ route('imprensa.show', $item->slug) }}"
                                    style="text-decoration: none; color:black;">
                                    <p class="mb-0">{{ $item->title }}</p>
                                </a>
                                <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    @empty
                        <p>Nenhum conteúdo encontrado</p>
                    @endforelse
                </div>

                <h2 class="mt-4">Categorias</h2>
                <ul class="category-list">
                    @php
                        $categories = \App\Models\Category::where('id', '<=', 9)->orWhere('id', '>', 17)->get();
                    @endphp
                    @foreach ($categories as $item)
                        <li>{{ $item->name }} ({{ $item->noticias->count() }})</li>
                    @endforeach
                </ul>
            </div>

            <!-- Links de paginação -->
            <ul class="pagination">
                @if ($noticias->onFirstPage())
                    <li class="disabled"><span>&laquo; Anterior</span></li>
                @else
                    <li><a href="{{ $noticias->previousPageUrl() }}">&laquo; Anterior</a></li>
                @endif

                @foreach ($noticias->links()->elements[0] as $page => $url)
                    @if ($page == $noticias->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                @if ($noticias->hasMorePages())
                    <li><a href="{{ $noticias->nextPageUrl() }}">Próxima &raquo;</a></li>
                @else
                    <li class="disabled"><span>Próxima &raquo;</span></li>
                @endif
            </ul>
        </div>
    </div>
@endsection
