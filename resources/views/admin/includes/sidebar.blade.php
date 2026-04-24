<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
            <a href="{{route('dashboard')}}" class="waves-effect {{request()->routeIs('dashboard') ? 'mm-active active' : ''}}">
                <i class="ri-dashboard-line"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class=" ri-user-fill"></i>
                <span>Usuários</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.user.index')}}">Todos</a></li>
                <li><a href="{{route('admin.user.create')}}">Criar</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-file-text-fill"></i>
                <span>Notícias</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.noticia.index')}}">Todas</a></li>
                <li><a href="{{route('admin.noticia.create')}}">Publicar</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-newspaper-fill"></i>
                <span>Imprensa</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.imprensa.index')}}">Todos</a></li>
                <li><a href="{{route('admin.imprensa.create')}}">Publicar</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-folder-5-fill"></i>
                <span>Projectos</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.projecto.index')}}">Todos</a></li>
                <li><a href="{{route('admin.projecto.create')}}"> Criar</a></li>
            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class=" ri-slideshow-3-fill"></i>
                <span>Banner Vídeo</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.video.index')}}">Gerir</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class=" ri-stack-overflow-fill
"></i>
                <span>Produtos/Serviços</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.servico.index')}}">Todos</a></li>
                <li><a href="{{route('admin.servico.create')}}">Criar</a></li>
            </ul>
        </li>


    </ul>
</div>