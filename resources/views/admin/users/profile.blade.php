@extends('layouts.backend')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1>Edit Your profile</h1>

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

            <div class="row">
                <!-- left column -->
                @include('admin.includes.errors')
                <div class="col-md-6">



                    <!-- general form elements -->
                    <div class="box box-primary">


                        <div class="box-header with-border">
                            <h3 class="box-title">Editar {{ $user->name }}</h3>
                        </div>
                        <!-- /.box-header -->

                        <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                <label for="name">User</label>
                <input value="{{$user->name}}" type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input value="{{$user->email}}" type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="avatar">Upload new Avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>

            <div class="form-group">
                <label for="facebook">Facebook profile</label>
                <input value="{{$user->profile->facebook}}" type="text" name="facebook" class="form-control">
            </div>

            <div class="form-group">
                <label for="youtube">Youtube profile</label>
                <input value="{{$user->profile->youtube}}" type="text" name="youtube" class="form-control">
            </div>

            <div class="form-group">
                <label for="About">About you</label>
                <textarea name="about" id="about" cols="6" rows="6" class="form-control">
                    {{$user->profile->about}}
                </textarea>
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