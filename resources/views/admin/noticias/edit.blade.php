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
                            <form action="{{ route('admin.noticia.update',$noticia->slug) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <h4 class="card-title">Actualizar Notícia</h4>
                                    <p class="card-title-desc">Formulário para actualizar notícia no sistema.</p>
                                   
                                   
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
                                                placeholder="Título da notícia" value="{{$noticia->title}}">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-3">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Imagem de
                                            Capa</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" name="cover">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-3">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Categoria</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="category_id">
                                                <option value="{{$noticia->category->id}}">{{$noticia->category->name}}</option>
                                                @foreach ($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mt-4 mb-4">
                                        <h4 class="card-title">Redação</h4>
                                        <textarea id="elm1" name="content">{{$noticia->content}}</textarea>
                                    </div> 
                                    <!-- end row -->

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Actualizar Notícia</button>
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
