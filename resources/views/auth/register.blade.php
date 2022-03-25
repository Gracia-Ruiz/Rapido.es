@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 my-3 py-5 rounded text-center bg-seccondary">
          @if ($errors->any())
          <div class="bg-accent text-main fs-5">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li> 
                  @endforeach
              </ul>
          </div>  
          @endif
          <h2 class="display-4">Regístrate</h2>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  <span id="passwordHelpInline" class="form-text">
                    Debe contener entre 8-20 carácteres.
                  </span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
                    <span id="passwordHelpInline" class="form-text">
                        Debe contener entre 8-20 carácteres.
                      </span>
                  </div>
                  <div class="d-flex justify-content-center ">
                    <button type="submit" class="btn box-radius btn-accent links">REGISTRARSE</button>
                  </div>
              </form>
              <div class="d-flex flex-column my-5 text-center">
                <h5>¿Ya tienes una cuenta?</h5>
                <a type="submit" class="text-decoration-none text-accent fs-4 links" href="{{route('login')}}">Iniciar sesión</a>
              </div>
        </div>
    </div>
</div>
@endsection