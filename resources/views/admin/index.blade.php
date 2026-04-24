@extends('admin.layouts.main')

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Usuários</p>
                                        <h4 class="mb-2">{{Auth::check() ? Auth::user()->count() : '0'}}</h4>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-user-3-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Imprensa</p>
                                        <h4 class="mb-2">{{Auth::check() ? \App\Models\Imprensa::count() : '0'}}</h4>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-user-3-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Notícias</p>
                                        <h4 class="mb-2">{{Auth::check() ? \App\Models\Noticia::count() : '0'}}</h4>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-user-3-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Projectos</p>
                                        <h4 class="mb-2">{{Auth::check() ? \App\Models\Projecto::count() : '0'}}</h4>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-user-3-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Calendário</h4>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>{{\Carbon\Carbon::now()->format('d')}}</h5>
                                            <p class="mb-2 text-truncate">Dia</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>{{\Carbon\Carbon::now()->format('M')}}</h5>
                                            <p class="mb-2 text-truncate">Mês</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>{{\Carbon\Carbon::now()->format('Y')}}</h5>
                                            <p class="mb-2 text-truncate">Ano</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>

        </div>
        <!-- End Page-content -->

        @include('admin.includes.footer')

    </div>
    <!-- end main content-->
@endsection
