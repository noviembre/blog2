@extends('layouts.backend')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1>Post</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a></li>
                <li><a href="#">Post</a></li>
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

                                    <label for="category">Select a Category</label>
                                    <select name="category_id" id="category" class="form-control">
                                        @foreach($categories as $category)

                                            <option value="{{ $category->id }}">
                                                {{ $category->title }}
                                            </option>

                                        @endforeach
                                    </select>

                                </div>


                                <div class="form-group">

                                    <label for="tag">Select Tags</label>

                                    @foreach($tags as $tag)
                                        <div class="checkbox">
                                            <label>
                                                <input value="{{ $tag->id }}" name="tags[]" type="checkbox">{{ $tag->tag }}
                                            </label>
                                        </div>
                                    @endforeach
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