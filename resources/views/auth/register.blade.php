<!doctype html>
<html lang="en">
    <head>
        <title>Register</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <img src="https://ucc.edu.co/institucional/acerca-de-la-universidad/Documents/logo_ucc_2018(CURVAS)-01.png" style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-lg-2">Crear una cuenta</h4>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <p>Por favor ingresa los datos para crear tu cuenta de profesor.</p>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingresa tu nombre" />
                        <label class="form-label" for="name">Nombre</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="email_profesor" class="form-control @error('email_profesor') is-invalid @enderror" name="email_profesor" value="{{ old('email_profesor') }}" required autocomplete="email_profesor" placeholder="Ingresa tu correo institucional" />
                        <label class="form-label" for="email_profesor">Correo Electrónico</label>
                        @error('email_profesor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingresa tu contraseña" />
                        <label class="form-label" for="password">Contraseña</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu contraseña" />
                        <label class="form-label" for="password-confirm">Confirmar Contraseña</label>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="Cod_Materia" class="form-control @error('Cod_Materia') is-invalid @enderror" name="Cod_Materia" value="{{ old('Cod_Materia') }}" required placeholder="Código de la Materia" />
                        <label class="form-label" for="Cod_Materia">Código de la Materia</label>
                        @error('Cod_Materia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="Nombre_materia" class="form-control @error('Nombre_materia') is-invalid @enderror" name="Nombre_materia" value="{{ old('Nombre_materia') }}" required placeholder="Nombre de la Materia" />
                        <label class="form-label" for="Nombre_materia">Nombre de la Materia</label>
                        @error('Nombre_materia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                      </div>

                    </form>
                    <div class="btn-group-vertical position-fixed end-0 me-3 mt-3">
                      <button class="btn btn-danger" id="increase-font">A+</button>
                      <button class="btn btn-danger" id="decrease-font">A-</button>
                      <button class="btn btn-danger" id="toggle-dark-mode">🌓</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
        document.getElementById('increase-font').addEventListener('click', function() {
            document.body.style.fontSize = (parseInt(window.getComputedStyle(document.body).fontSize) + 2) + 'px';
        });

        document.getElementById('decrease-font').addEventListener('click', function() {
            document.body.style.fontSize = (parseInt(window.getComputedStyle(document.body).fontSize) - 2) + 'px';
        });

        document.getElementById('toggle-dark-mode').addEventListener('click', function() {
            document.body.classList.toggle('bg-dark');
            document.body.classList.toggle('text-white');
            document.querySelector('.card').classList.toggle('bg-dark');
            document.querySelector('.card').classList.toggle('text-white');
        });
    </script>
    </body>
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
</html>
