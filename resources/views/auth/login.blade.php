<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
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
                      <img src="https://ucc.edu.co/institucional/acerca-de-la-universidad/Documents/logo_ucc_2018(CURVAS)-01.png"
                        style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-lg-2">Bienvenido</h4>
                    </div>

                    <form action="{{ route('login') }}" method="post">
                      @csrf
                      <p>Por favor ingresa tu cuenta institucional para iniciar sesión.</p>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form2Example11" class="form-control"
                          placeholder="Ingresa tu correo" />
                        <label class="form-label" for="form2Example11">Usuario</label>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form2Example22" class="form-control" />
                        <label class="form-label" for="form2Example22">Contraseña</label>
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                          in</button>
                        <a class="text-muted" href="#!">Forgot password?</a>
                      </div>

                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-danger">Registrarse</a>
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
