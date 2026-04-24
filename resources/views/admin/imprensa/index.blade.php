@extends('admin.layouts.main')

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Todas Notícias de Imprensa</h4>
                                <p class="card-title-desc">Exibe a lista de todas notícias de imprensa registradas no sistema,
                                    permitindo fácil visualização e gerenciamento.
                                </p>
                                @if (session('error'))
                                    <p class="alert alert-danger">{{ session('error') }}</p>
                                @endif
                                @if (session('success'))
                                    <p class="alert alert-success">{{ session('success') }}</p>
                                @endif
                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Imagem de Capa</th>
                                            <th>Criado por</th>
                                            <th>Criado em</th>
                                            <th>Actualizado em</th>
                                            <th>Acções</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($noticias as $noticia)
                                            <tr>
                                                <td>{{ $noticia->title }}</td>
                                                <td><img width="70" class="rounded" src="{{asset('storage/'.$noticia->cover)}}" alt="{{$noticia->title}}"></td>

                                                <td>{{$noticia->usuario->name}}</td>
                                                <td>{{$noticia->created_at }}</td>
                                                <td>{{$noticia->updated_at }}</td>

                                                <td class="row d-flex justify-content-between">
                                                    <div class="col">
                                                        <a href="{{ route('admin.imprensa.edit', $noticia->slug) }}">
                                                            <i class=" text-warning ri-edit-2-fill"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{ route('admin.imprensa.remove', $noticia->slug) }}">
                                                            <i class="text-danger ri-delete-bin-2-fill"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>

        </div>
        <!-- End Page-content -->

        @include('admin.includes.footer')

    </div>
    <!-- end main content-->
@endsection
