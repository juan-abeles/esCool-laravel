
<div class="container reset">


	<div class="col-lg-2">
    <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="btn btn-secondary"><a href="#tab1" data-toggle="tab">Clases</a></li>
          <li class="btn btn-secondary"><a href="#tab2" data-toggle="tab">Asistencia</a></li>
          <li class="btn btn-secondary"><a href="#tab3" data-toggle="tab">Comunicacion</a></li>
		</ul>
	</nav>

</div>




<!-- tab content -->
<div class="tab-content">
<div class="tab-pane active text-style" id="tab1">
  <h2>Clases</h2>
       <p>
         En esta sección podrás encontrar las listas de alumnos de las diferentes clases que estés dando, crear evaluaciones para distintos grupos y asignar calificaciones a los alumnos para esas evaluaciones.
       </p>

</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Asistencia</h2>
   <p>En esta sección podrás visualizar el registro de las asistencias e inasistencias de tus alumnos por fecha.</p>


   <button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Cargar falta
  </button>
  
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <form class="" action="{{route("attendance_store")}}" method="post">
        {{ csrf_field() }}
        <label for="user_id">Nombre completo del alumno</label>
        <select class="form-control col-md-6" name="user_id"> 
            @foreach (Auth::user()->institution->users as $user)
            @if ($user->role_id === 4)
        <option value="{{$user->id}}"> {{$user->name .' '. $user->last_name}} </option>
            @endif
          @endforeach
        </select>

        <select class="form-control col-md-6" name="value">
            <option value="1">Presente</option>
            <option value="2">Tarde</option>
            <option value="3">Ausente</option>
        </select>  
        <br>
        <button type="submit" name="button">Cargar falta</button>
      </form>
    </div>
  </div>


</div>
<div class="tab-pane text-style" id="tab3">
  <h2>Comunicaciones</h2>
  <p>En esta sección podrás escribir mensajes y enviarlos a grupos de alumnos o alumnos individuales.</p>

    <div class="col-xs-6 col-md-3">
  </div>
</div>
</div>


</div>
