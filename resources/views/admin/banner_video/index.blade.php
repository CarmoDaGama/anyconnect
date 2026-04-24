@extends('admin.layouts.main')

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                
                <div class="row mb-3">
                    <div class="car">
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
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="{{ route('admin.video.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <h4 class="card-title">Publicar Video Banner</h4>
                                    <p class="card-title-desc">Formulário para adicionar um novo vídeo banner ao sistema.</p>
                                   

                                    <div class="row mb-3">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Vídeo Banner</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" required name="video">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    @if (!($banner->count() > 0))
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Publicar Notícia</button>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Vídeo Activo</h4>
                                <p class="card-title-desc">Exibe o vídeo banner activo e permite a gestão do recurso.
                                </p>
                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Vídeo</th>
                                            <th>Criado por</th>
                                            <th>Criado em</th>
                                            <th>Actualizado em</th>
                                            <th>Acções</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($banner as $video)
                                            <tr>
                                                <td>
                                                    <video width="150" height="80" controls>
                                                        <source src="{{ asset('storage/'.$video->video) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </td>

                                                <td>{{$video->usuario->name}}</td>
                                                <td>{{$video->created_at }}</td>
                                                <td>{{$video->updated_at }}</td>

                                                <td class="row d-flex justify-content-between">
                                                    <div class="col">
                                                        <a href="{{ route('admin.video.remove', $video->id) }}">
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
