@extends('layouts.backend')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1>Categorias</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a></li>
                <li><a href="#">Categorias</a></li>
                <li class="active">Crear</li>
            </ol>
        </section>



        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Todas las Categorias</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('category.create')}}" class="btn btn-success">Crear Categoria</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td><a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-info">Edit</a>  </td>

                                <td><a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-danger">Delete</a>  </td>

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
