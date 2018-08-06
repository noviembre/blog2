@extends('layouts.backend')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1>Posts Inactivos</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a></li>
                <li><a href="#">Posts Inactivos</a></li>

            </ol>
        </section>



        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Todos los Post Inactivos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Restaurar</th>
                            <th>Eliminar</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>
                                    <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                                </td>
                                <td>{{$post->title}}</td>

                                <td>
                                    <a href="{{ route('posts.restore', ['id' => $post->id]) }}" class="btn btn-success">Restaurar</a>
                                </td>
                                <td>
                                    <a href="{{ route('posts.kill', ['id' => $post->id]) }}" class="btn btn-danger">Eliminar</a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>


    </div>
    <!-- /.content-wrapper -->

@stop
