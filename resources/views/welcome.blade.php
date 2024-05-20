@extends('layout.componente')
@section('content')

<form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Correo</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary bg-dark">Iniciar Sesión</button>
  <a href="{{ route('registro') }}" class="btn btn-secondary">Registrarme</a>
</form>

   
 
@endsection