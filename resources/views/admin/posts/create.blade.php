@extends('layouts.backend')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>Post</h1>

        </section>




        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-md-6">

                    <!-- general form elements -->
                    <div class="box box-primary">


                        <div class="box-header with-border">
                            <h3 class="box-title">Crear un Post</h3>
                        </div>
                        <!-- /.box-header -->


                        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        Titulo</label>
                                    <input name="title" type="text" class="form-control" id="exampleInputEmail1">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <input name="featured" type="file" id="exampleInputFile">

                                    <p class="help-block">Sube una Imagen</p>
                                </div>

                                <div class="form-group">
                                    <label>Contenido</label>
                                    <textarea name="contenido" class="form-control" rows="3"></textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
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