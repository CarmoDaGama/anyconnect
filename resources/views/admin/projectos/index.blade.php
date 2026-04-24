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

                                <h4 class="card-title">Todos Projectos</h4>
                                <p class="card-title-desc">Exibe a lista de todos projectos registrados no sistema,
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
                                            <th>Imagem de Capa</th>
                                            <th>Descrição</th>
                                            <th>Criado em</th>
                                            <th>Actualizado em</th>
                                            <th>Acções</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($projectos as $projecto)
                                            <tr>
                                                <td><img width="100" src="{{asset('storage/'.$projecto->image)}}" alt="{{$projecto->title}}"></td>
                                                <td>{{$projecto->description}}</td>
                                                <td>{{$projecto->created_at }}</td>
                                                <td>{{$projecto->updated_at }}</td>

                                                <td class="row d-flex justify-content-between">
                                                    <div class="col">
                                                        <a href="{{ route('admin.projecto.edit', $projecto->id) }}">
                                                            <i class=" text-warning ri-edit-2-fill"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{ route('admin.projecto.remove', $projecto->id) }}">
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
