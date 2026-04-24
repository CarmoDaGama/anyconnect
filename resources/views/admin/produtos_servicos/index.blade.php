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

                            <h4 class="card-title">Todos Produtos/Serviços</h4>
                            <p class="card-title-desc">Exibe a lista de todos produtos/serviços registradas no sistema,
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
                                        <th>Categorias</th> <!-- NOVA COLUNA -->
                                        <th>Criado por</th>
                                        <th>Criado em</th>
                                        <th>Actualizado em</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>



                                <tbody>
                                    @foreach ($servicos as $servico)
                                    <tr>
                                        <td>{{ $servico->title }}</td>
                                        <td>
                                            <img width="70" class="rounded" src="{{ asset('storage/'.$servico->cover) }}" alt="{{ $servico->title }}">
                                        </td>

                                        <td>
                                            @if($servico->categorias->count())
                                            @foreach ($servico->categorias as $cat)
                                            <span class="badge bg-info text-dark">{{ $cat->nome }}</span>
                                            @endforeach
                                            @else
                                            <span class="text-muted">Sem categoria</span>
                                            @endif
                                        </td>

                                        <td>{{ $servico->usuario->name }}</td>
                                        <td>{{ $servico->created_at }}</td>
                                        <td>{{ $servico->updated_at }}</td>

                                        <td class="row d-flex justify-content-between">
                                            <div class="col">
                                                <a href="{{ route('admin.servico.edit', $servico->slug) }}">
                                                    <i class="text-warning ri-edit-2-fill"></i>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('admin.servico.remove', $servico->slug) }}">
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