@extends('layout.componente')
@section('content')

<form action="/registrarusuario" method="POST" >
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="emailHelp">
      </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp">
      </div>
    <div class="mb-3">
      <label for="email" class="form-label">Correo</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="mb-3"> 
      <button type="button" id="passwordToggle" class="btn btn-outline-secondary"><i class="bi bi-eye"></i></button>
    </div>
    
    <button type="submit" class="btn btn-primary bg-dark">Registrarse</button>
  </form>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
@endsection