@extends('layouts.app')
@section('content')
    <h3 class="text-center mb-3 pt-3">Editar el Rol {{$rolesActualizar->id}}</h3>
    <form action="{{route('update',$rolesActualizar->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <input type="text" name="nombre" id="nombre" value="{{$rolesActualizar->nombre}}" class="form-control">
        </div>

        <button type="submit" class="btn btn-warning btn-block">Editar Rol</button>
    </form>

    @if(session('update'))
        <div class="alert alert-success mt-3"> 
            {{session('update')}}
        </div>
    @endif
@endsection