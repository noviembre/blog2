<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets/dist/img/avatar_160x160.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Artemis Fowl</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <!-- /.search form -->
        <ul class="sidebar-menu">

            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="{{ route('home') }}">
                    <i class="fa fa-home"></i> <span>Inicio</span>
                </a>
            </li>

            <li><a href="#">
                    <i class="fa fa-sticky-note-o"></i>
                    <span>Posts</span></a>
            </li>
            <li><a href="{{ route('post.create') }}">
                    <i class="fa fa-sticky-note-o"></i>
                    <span>Nuevo Posts</span></a>
            </li>
            <li><a href="#">
                    <i class="fa fa-list-ul"></i>
                    <span>Categorias</span></a>
            </li>
            <li><a href="{{ route('category.create') }}">
                    <i class="fa fa-sticky-note-o"></i>
                    <span>Nueva Categoria</span></a>
            </li>

            <li><a href="#">
                    <i class="fa fa-tags"></i>
                    <span>Etiquetas</span></a>
            </li>

            <li><a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span></a>
            </li>

            <li><a href="#">
                    <i class="fa fa-user-plus"></i>
                    <span>Suscriptores</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>