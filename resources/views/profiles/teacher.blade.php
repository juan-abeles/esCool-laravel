
<div class="container reset">


	<div class="col-lg-2">
    <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="btn btn-secondary"><a href="#tab1" data-toggle="tab">Calificaciones</a></li>
          <li class="btn btn-secondary"><a href="#tab2" data-toggle="tab">Asistencia</a></li>
          <li class="btn btn-secondary"><a href="#tab3" data-toggle="tab">Comunicacion</a></li>
		</ul>
	</nav>

</div>

<!-- tab content -->
<div class="tab-content">
<div class="tab-pane active text-style" id="tab1">
  <h2>Calificaciones</h2>
       <p>
         En esta sección podrás asignar calificaciones a los alumnos de las diferentes clases que estés dando.
       </p>


    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>

    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Agregar calificacion
    </button>
    
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <form class="" action="{{route("grade_store")}}" method="post">
          {{ csrf_field() }}
          <div class="form-group row">
            <div class="col-md-6">
              <label for="user_id">Alumno</label>
              <select class="form-control" name="user_id">
                <option value="" disabled selected hidden>Seleccione alumno...</option>
                @foreach (App\User::all() as $user)
                  @if ($user->role->name === "Alumno")
                  <option value="{{$user->id}}">{{$user->name}}</option>
                  @endif
                  @endforeach
              </select>
            </div>

            <div class="col-md-6">
              <label for="subject_id">Materia</label>
              <select class="form-control" name="subject_id">
                <option value="" disabled selected hidden>Seleccione materia...</option>
                @foreach (App\Subject::all() as $subject)
                  <option value="{{$subject->id}}">{{$subject->name}}</option>
                @endforeach
              </select>
            </div> 
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="value">Calificación</label>
              <input type="number" name="value" value="" placeholder="10">
            </div>

            <div class="col-md-6">
              <label for="name">Título</label>
              <input type="text" name="name" value="" placeholder="Prueba Polinomios">
            </div>
          </div>
          <br>
          <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>

</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Asistencia</h2>
   <p>En esta sección podrás visualizar el registro de las asistencias e inasistencias de tus alumnos por fecha.</p>


</div>
<div class="tab-pane text-style" id="tab3">
  <h2>Comunicaciones</h2>
  <p>En esta sección podrás escribir mensajes y enviarlos a grupos de alumnos o alumnos individuales.</p>

    <div class="col-xs-6 col-md-3">
  </div>
</div>
</div>


</div>
