@extends('layouts.backend')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1>Posts</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a></li>
                <li><a href="#">Posts</a></li>
                <li class="active">Crear</li>
            </ol>
        </section>



        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Todas los Post</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('post.create')}}" class="btn btn-success">
                            Crear Post
                        </a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Dormir</th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($posts->count()> 0)
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>
                                    <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                                </td>
                                <td>{{$post->title}}</td>
                                <td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-default">Editar</a></td>
                                <td>
                                    <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">Dormir</a>
                                </td>

                            </tr>
                        @endforeach

                        @else
                            <tr>
                                <th colspan="5" class="text-center text-danger">
                                    No post Found
                                </th>
                            </tr>

                        @endif

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
