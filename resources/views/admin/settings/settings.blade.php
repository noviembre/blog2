@extends('layouts.backend')


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1> Edit blog settings</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a></li>
                <li><a href="#">Settings</a></li>

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
                            <h3 class="box-title">Crear una Categoria</h3>
                        </div>
                        <!-- /.box-header -->

                        <form action="{{ route('settings.update') }}" method="post" >

                            {{ csrf_field() }}

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="name">Site Name</label>
                                    <input value="{{ $settings->site_name }}" name="site_name" class="form-control" type="text" >
                                </div>

                                <div class="form-group">
                                    <label for="email">Address</label>
                                    <input value="{{ $settings->address }}" type="text" name="address" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="email">Contact Number</label>
                                    <input value="{{ $settings->contact_number }}" type="text" name="contact_number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="email">Contact Email</label>
                                    <input value="{{ $settings->contact_email }}" type="text" name="contact_email" class="form-control">
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







    @include('admin.includes.errors')


    <div class="panel-body">
        <form action="{{ route('settings.update') }}" method="post" >

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Site Name</label>
                <input value="{{ $settings->site_name }}" name="site_name" class="form-control" type="text" >
            </div>

            <div class="form-group">
                <label for="email">Address</label>
                <input value="{{ $settings->address }}" type="text" name="address" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Contact Number</label>
                <input value="{{ $settings->contact_number }}" type="text" name="contact_number" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Contact Email</label>
                <input value="{{ $settings->contact_email }}" type="text" name="contact_email" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update site settings</button>
                </div>
            </div>

        </form>
    </div>

@stop