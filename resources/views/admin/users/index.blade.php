@extends('layouts.backend')


@section('content')




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1126px;">

        <section class="content-header">

            <h1>Users</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a></li>

                <li class="active">Crear</li>
            </ol>
        </section>



        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Todos los Usuarios</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('user.create')}}" class="btn btn-success">
                            Crear Usuario
                        </a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>

                            <th>Image</th>
                            <th>Name</th>
                            <th>Permissions</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($users->count() > 0)

                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        no image

                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        @if($user->admin)
                                    <a href="{{ route('user.not.admin',['id'=> $user->id]) }}" class="btn btn-danger btn-xs">Remove Admin</a>
                                @else
                                    <a href="{{ route('user.admin',['id'=> $user->id]) }}" class="btn btn-success btn-xs">Make Admin</a>
                                @endif


                                    </td>
                                    <td>
                                         @if(Auth::id() !== $user->id )
                                    <a href="{{ route('user.delete',['id'=> $user->id]) }}" class="btn btn-danger btn-xs">Delete</a>
                                @endif
                                    </td>

                                </tr>
                            @endforeach

                        @else

                            <tr>
                                <th colspan="5" class="text-center">
                                    No Users Found
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