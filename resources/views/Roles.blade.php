@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-2"></div>
        <div class="card col-md-7">
            <div class="card-header">
                dasboard
                            
            </div>

            <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif

                <div class="row">
                    <div class="col-md-8">
                        @if(session('agregar'))
                            <div class="alert alert-success mt-3"> 
                            {{session('agregar')}}
                            </div>
                        @endif
                        <h3 class="text-center mb-4"> Agregar Rol</h3>
            
                        <form action="{{route('store')}}" method="POST">
                            @csrf 

                            <div class="form-group">
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="escriba el rol" required>
                            </div>

                            <button type=submit class="btn btn-success btn-block ">Enviar</button>
                        </form>

                        <table class="table">

                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>ACCIONES</th>
                            </tr>
                            @foreach ($roles as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>
                                    <a href="{{route('editar', $item->id)}}" class="btn btn-warning">Editar</a>
                                    <form action="{{route('eliminar',$item->id)}}" method="POST"class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>  
                        {{$roles->links()}}

                        @if(session('eliminar'))
                            <div class="alert alert-success mt-3"> 
                            {{session('eliminar')}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div> 
    </div>          
@endsection
