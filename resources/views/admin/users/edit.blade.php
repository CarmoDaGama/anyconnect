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
                            <form action="{{route('admin.user.update',$user->id)}}" method="post">
                                @csrf
                                <div class="card-body">
                                    
                                    <h4 class="card-title">Editar Usuário</h4>
                                    <p class="card-title-desc">Formulário para editar um usuário no sistema.</p>
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
                                            <input class="form-control" type="text" required name="name" value="{{$user->name}}"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <input type="hidden" name="user_id" value="{{$user->id}}">
              
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Palavra-Passe Anterior</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="old_password" required type="password" placeholder="*******"
                                                id="example-email-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Nova
                                            Palavra-Passe</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required name="password" type="password" placeholder="*******"
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
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
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
