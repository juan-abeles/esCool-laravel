
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
    <br>
    @endif

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
                {{-- @foreach (App\User::all() as $user)
                  @if ($user->role->name === "Alumno")
                  <option value="{{$user->id}}">{{$user->name}}</option>
                  @endif
                  @endforeach --}}
									@foreach ($user->institution->users as $userR)
										@if ($userR->role->name === "Alumno")
										<option value="{{$userR->id}}">{{$userR->name . " " . $userR->last_name}} </option>
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
              <input type="number" name="value" value="" placeholder="10" max="10">
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
   <p>En esta sección podrás cargar asistencias e inasistencias de tus alumnos por fecha.</p>


   <button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Cargar falta
  </button>

  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <form class="" action="{{route("attendance_store")}}" method="post">
        {{ csrf_field() }}
        <label for="user_id">Nombre completo del alumno</label>
				<select class="form-control" name="user_id">
					<option value="" disabled selected hidden>Seleccione alumno...</option>
					{{-- @foreach (App\User::all() as $user)
						@if ($user->role->name === "Alumno")
						<option value="{{$user->id}}">{{$user->name}}</option>
						@endif
						@endforeach --}}
						@foreach ($user->institution->users as $userR)
							@if ($userR->role->name === "Alumno")
							<option value="{{$userR->id}}">{{$userR->name . " " . $userR->last_name}} </option>
							@endif
						@endforeach

				</select>

				<br>


				<label for="date">Fecha</label>

				<input class="form-control col-md-6" type="date" name="date" value="">

				<br>

				<br>


        <select class="form-control col-md-6" name="value">
            <option value="Presente">Presente</option>
            <option value="Tarde">Tarde</option>
            <option value="Ausente">Ausente</option>
        </select>
        <br>




        <button type="submit" name="button" class="btn btn-primary">Cargar falta</button>
      </form>
    </div>
  </div>


</div>
<div class="tab-pane text-style" id="tab3">
  <h2>Comunicaciones</h2>
  <p>En esta sección podrás escribir mensajes y enviarlos a tus alumnos.</p>
	<div class="card card-body">
		<form class="" action="{{route("communication_store")}}" method="post">
			{{ csrf_field() }}
			<label for="subject">Asunto:</label>
			<br>
			<input type="text" name="subject" value="">

			<br>
			<br>


			<label for="content">Mensaje:</label>
			<br>
			
			<textarea name="content" rows="10" cols="77"></textarea>
			<br>



      <br>
			<button type="submit" name="button" class="btn btn-primary">Publicar Mensaje</button>
		</form>
	</div>
    <div class="col-xs-6 col-md-3">
  </div>
</div>
</div>


</div>
