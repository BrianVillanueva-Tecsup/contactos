@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Mensaje') }}
    </div>

@endif

<a href="{{ url('contactos/create') }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>  Agregar un nuevo contacto</a>

<br/>
<br/>
<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Nacimiento</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
    @foreach($contactos as $contacto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            
            <img src="{{ asset('storage').'/'.$contacto->Foto}}" class="img-thumbnail img-fluid" alt="" width="50">

            
            </td>
            <td>{{$contacto->Nombre}}</td>
            <td>{{$contacto->Apellido}}</td>
            <td>{{$contacto->Email}}</td>
            <td>{{$contacto->Nacimiento}}</td>
            <td class="table-buttons">
             <a href="{{ route('contactos.show', $contacto) }}" class="btn btn-success">
                <i class="fa fa-eye" ></i>
            </a>
            |
            <a class="btn btn-primary" href="{{ url('/contactos/'.$contacto->id.'/edit') }}">
            <i class="fa fa-pencil" ></i>
            </a>

            |
            
            <form method="post" action="{{ url('/contactos/'.$contacto->id) }}" style="display:inline">
            {{csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Borrar?')">
            <i class="fa fa-trash" ></i></button>
            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
    
</table>

{{ $contactos->links() }}
</div>

@endsection