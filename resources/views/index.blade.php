@extends('layouts.app')

@section('content')
  <div>


{{-- {{App\User::find(1)->institution}} --}}




    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif

    <section id="queesescool">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-5 mt-5">¿Qué es EsCool?</h2>
        <div class="row text-secondary">
          <div class="col-md-4 col-sm-4 col-xs-12 text-center queesescool-elemento">
            <img src="{{asset('img/espacio-intercambio.png')}}" alt="Espacio intercambio" width=80%/>
            <h4>Intercambio entre alumnos, docentes y familias.</h4>
            <p>Facilita la comunicación fluida entre todos los actores involucrados en el proceso educativo, brindando posibilidades diferenciadas para cada rol. Con ESCOOL todos pueden tener una voz.</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 text-center queesescool-elemento">
            <img src="{{asset('img/aula-virtual.png')}}" alt="Aula virtual" width=80% />
            <h4>Pizarrón, carpeta y agenda virtuales.</h4>
            <p>Compartir material didáctico, entregar trabajos, agendar evaluaciones. Todo en un mismo espacio virtual diferenciado por materias y accesible desde cualquier computadora.</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 text-center queesescool-elemento">
            <img src="{{asset('img/administracion-datos.png')}}" alt="Administracion datos" width=80%/>
            <h4>Administración de datos personales y legajos.</h4>
            <p>Horarios, asistencia, calificaciones y registros de conducta. Toda la información de los alumnos disponible para directivos, docentes, familias y los propios alumnos.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clientes -->
    <section id="clientes">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-5 mt-5">Nuestros Clientes</h2>
        <section class="row">
          <article>
            <a href="http://colegioandersen.org" target="_blank"><img class="d-block" src="{{asset('img/andersen.png')}}" alt="andersen"></a>
          </article>
          <article>
            <a href="http://stbrendans.esc.edu.ar" target="_blank"><img class="d-block" src="{{asset('img/brendans.png')}}" alt="brendans"></a>
          </article>
          <article>
            <a href="http://cmb.org.ar" target="_blank"><img class="d-block" src="{{asset('img/cmb.png')}}" alt="cmb"></a>
          </article>
          <article>
            <a href="http://colegioesclavas.edu.ar" target="_blank"><img class="d-block" src="{{asset('img/esclavas.png')}}" alt="esclavas"></a>
          </article>
          <article>
            <a href="http://colegiosanagustin.com.ar" target="_blank"><img class="d-block" src="{{asset('img/sanagustin.png')}}" alt="sanagustin"></a>
          </article>
          <article>
            <a href="http://smt.edu.ar" target="_blank"><img class="d-block" src="{{asset('img/smt.png')}}" alt="smt"> </a>
          </article>
        </section>
      </div>
    </section>

    <!-- Contactanos -->
    <section id="contactanos">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-5 mt-5">Contáctanos</h2>
        <div class="row">
          <div class="col-lg-6">
            <form name="sentMessage" id="contactForm">
              <div class="control-group">
                <div class="form-group">
                  <label>Nombre</label>
                  <input class="form-control" id="name" type="text" placeholder="John Connor" required="required" data-validation-required-message="Please enter your name.">
                </div>
              </div>
              <div class="control-group">
                <div class="form-group">
                  <label>Dirección de Email</label>
                  <input class="form-control" id="email" type="email" placeholder="john.connor@skynet.com" required="required" data-validation-required-message="Please enter your email address.">
                </div>
              </div>
              <div class="control-group">
                <div class="form-group">
                  <label>Número de Teléfono</label>
                  <input class="form-control" id="phone" type="tel" placeholder="12345678" required="required" data-validation-required-message="Please enter your phone number.">
                </div>
              </div>
              <div class="control-group">
                <div class="form-group">
                  <label>Mensaje</label>
                  <input class="form-control" id="message" rows="5" placeholder="Tu mensaje!" required="required" data-validation-required-message="Please enter a message.">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <h4 class="text-center text-uppercase mb-4">Información de Contacto</h4>
            <img class="iconoscontacto rounded mx-auto d-block mb-2" src="https://png.icons8.com/color/50/000000/marker.png">
            <p class="text-center">Monroe 860<br>Ciudad Autónoma de Buenos Aires<br>Argentina</p>
            <img class="iconoscontacto rounded mx-auto d-block mb-2" src="https://png.icons8.com/color/50/000000/phone.png">
            <p class="text-center">+54 11 5263-7400</p>
            <img class="iconoscontacto rounded mx-auto d-block mb-2" src="https://png.icons8.com/color/50/000000/secured-letter.png">
            <p class="text-center">info@escool.com</p>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection
