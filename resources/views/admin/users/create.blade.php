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
                            <form action="{{route('admin.user.store')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    
                                    <h4 class="card-title">Criar novo usuário</h4>
                                    <p class="card-title-desc">Formulário para adicionar um novo usuário ao sistema.</p>
                                    <div class="row mb-3">
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                            
                                                <p class="alert alert-danger">{{$error}}</p>
                                                
                                            @endforeach
                                        @endif
                                        @if (session('error'))
                                            <p class="alert alert-danger">{{session('error')}}</p>
                                        @endif
                                        @if (session('success'))
                                            <p class="alert alert-success">{{session('success')}}</p>
                                        @endif

                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required name="name" placeholder="Forneça o nome completo"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" required name="email" placeholder="nome@dominio.ao"
       id="example-search-input" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">

                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Palavra-Passe</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="password" required type="password" placeholder="*******"
                                                id="example-email-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Confirmar
                                            Palavra-Passe</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required name="password_confirmation" type="password" placeholder="*******"
                                                id="example-email-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Função</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Criar Novo</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div>

        </div>
        <!-- End Page-content -->

        @include('admin.includes.footer')

    </div>
    <!-- end main content-->
@endsection
