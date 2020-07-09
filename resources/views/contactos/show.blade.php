@extends('layouts.app')

@section('title','Brian Villanueva'.$contacto->Nombre)

@section('content')
<div class="container">
<div>
<nav class="navbar navbar-light bg-light">
  <h1 class="navbar-text">
    Detalles de Contacto
  </h1>
</nav>
</div>
<div>
  <div class="card mb-3" style="max-width: 1200px;">
  <div class="row no-gutters">
    <div class="col-md-4">
        <img class="card-img" src="{{ asset('storage').'/'.$contacto->Foto}}" class="img-thumbnail img-fluid" alt="" width="200" style="max-width:800px;">
    </div>
    <div class="col-md-8" >
      <div class="card-body">
      <h5>Nombre del contacto:</h5>
        <h5 class="card-title" style="text-align: center;">
        
        <strong>
        {{ $contacto->Nombre }}
        </strong>
        </h5>

        <br/>
        <h5>Apellido del contacto:</h5>
        <h5 class="card-title" style="text-align: center;"><strong>{{ $contacto->Apellido }}</strong></h5>
        <br/>
        <h5>Correo del contacto:</h5>
        <h5 class="card-title" style="text-align: center;"><strong>{{ $contacto->Email }}</strong></h5>
        <br/>
        <h5>Fecha de nacimiento del contacto:</h5>
        <h5 class="card-title" style="text-align: center;"><strong>Este contacto nació el: {{ $contacto->Nacimiento }}</strong></h5>
        <p class="card-text"><small class="text-muted"><p class="card-text">{{ $contacto->created_at }}</p></p>
        <br/>
        <br/>
        <br/>
        <div style="text-align: center;">
        <a href="{{ route('contactos.index') }}" class="btn btn-primary"  ><i class="fa fa-reply" ></i> Regresar</a>
    </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection



