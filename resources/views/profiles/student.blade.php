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
         En esta sección podrás encontrar tus calificaciones para las materias que estés cursando.
       </p>

       <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Título</th>
              <th scope="col">Nota</th>
              <th scope="col">Materia</th>
            </tr>
          </thead>
          <tbody>
            @foreach (App\Grade::all() as $grade)
              @if ($grade->user_id === Auth::user()->id)
                <tr>
                  <td>{{$grade->name}}</td>
                  <td>{{$grade->value}}</td>
                  <td>{{$grade->subject->name}}</td>
                </tr>
              @endif
            @endforeach
            
          </tbody>
        </table>

</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Asistencia</h2>
   <p>En esta sección podrás visualizar el registro de tus asistencias e inasistencias.</p>


</div>
<div class="tab-pane text-style" id="tab3">
  <h2>Comunicaciones</h2>
  <p>Esta sección es para comunicaciones de la escuela acerca de fechas importantes, actos, eventos y todo otra información relevante para los alumnos.</p>

    <div class="col-xs-6 col-md-3">
  </div>
</div>
</div>


</div>
