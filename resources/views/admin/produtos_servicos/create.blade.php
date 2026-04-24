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
                        <form action="{{ route('admin.servico.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <h4 class="card-title">Publicar Serviço</h4>
                                <p class="card-title-desc">Formulário para adicionar um novo serviço ao sistema.</p>


                                <div class="row mb-3">
                                    @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                    @endforeach
                                    @endif
                                    @if (session('error'))
                                    <p class="alert alert-danger">{{ session('error') }}</p>
                                    @endif
                                    @if (session('success'))
                                    <p class="alert alert-success">{{ session('success') }}</p>
                                    @endif

                                    <label for="example-text-input" class="col-sm-2 col-form-label">Título</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" required name="title"
                                            placeholder="Título do produto/serviço">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Imagem de
                                        Capa</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" required name="cover">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mt-4 mb-4">
                                    <h4 class="card-title">Descrição</h4>
                                    <textarea id="elm1" name="content"></textarea>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="categorias" class="col-sm-2 col-form-label">Categorias</label>
                                    <div class="col-sm-10">
                                        <select name="categorias[]" id="categorias" class="form-control" multiple>
                                            @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Publicar Serviço</button>
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