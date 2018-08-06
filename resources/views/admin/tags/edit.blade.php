@extends('layouts.backend')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1>Tags</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a></li>
                <li><a href="#">Tags</a></li>
                <li class="active">Crear</li>
            </ol>
        </section>




        <section class="content">

            <div class="row">
                <!-- left column -->
                @include('admin.includes.errors')
                <div class="col-md-6">



                    <!-- general form elements -->
                    <div class="box box-primary">


                        <div class="box-header with-border">
                            <h3 class="box-title">Editar {{ $tag->tag }}</h3>
                        </div>
                        <!-- /.box-header -->

                        <form action="{{ route('tag.update', ['id' => $tag->id ]) }}" method="post" >

                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        Titulo</label>
                                    <input value="{{ $tag->tag }}" name="tag" type="text" class="form-control" >
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>

                        </form>


                    </div>

                </div>
                <!--/.col (left) -->

            </div>

        </section>
    </div>
    <!-- /.content-wrapper -->


@stop

