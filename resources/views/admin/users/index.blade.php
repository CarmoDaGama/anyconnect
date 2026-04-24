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

                                <h4 class="card-title">Todos Usuários</h4>
                                <p class="card-title-desc">Exibe a lista de todos os usuários cadastrados no sistema,
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
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Função</th>
                                            <th>Criado em</th>
                                            <th>Actualizado em</th>
                                            <th>Acções</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>

                                                <td>Admin</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>{{ $user->updated_at }}</td>

                                                <td class="row d-flex justify-content-between">
                                                    <div class="col">
                                                        <a href="{{ route('admin.user.edit', $user->id) }}">
                                                            <i class=" text-warning ri-edit-2-fill"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{ route('admin.user.remove', $user->id) }}">
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
