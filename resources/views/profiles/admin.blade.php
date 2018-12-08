
<div class="container reset">


  <div class="col-lg-2">
    <nav class="nav-sidebar">
      <ul class="nav tabs">
        <li class="btn btn-secondary"><a href="#tab1" data-toggle="tab">Administrar grupos</a></li>
        <li class="btn btn-secondary"><a href="#tab2" data-toggle="tab">Asistencia</a></li>
        <li class="btn btn-secondary"><a href="#tab3" data-toggle="tab">Comunicacion</a></li>
      </ul>
    </nav>

  </div>

  <!-- tab content -->
  <div class="tab-content">
    <div class="tab-pane active text-style" id="tab1">


      <ul>
        @foreach (Auth::user()->institution->groups as $group)
          <li>{{$group->name}}</li>
        @endforeach
      </ul>



      <button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Agregar grupo
      </button>
      
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <form class="" action="{{route("group_store")}}" method="post">
            {{ csrf_field() }}
            <label for="name">Nombre del grupo</label>
            <input type="text" name="name" value="" placeholder="Por ejemplo: 5ª año A">
            <label for="name">Año</label>
            <input type="number" name="year" value="" placeholder="Año de egreso. P. ej. 2021">
            <br>
            <button type="submit" name="button">Guardar</button>
          </form>
        </div>
      </div>

    </div>
    <div class="tab-pane text-style" id="tab2">
      <h2>Administrar materias</h2>
      <p>En esta sección podrás visualizar el registro de tus asistencias e inasistencias de tus hijos.</p>

    </div>
    <div class="tab-pane text-style" id="tab3">
      <h2>Administrar usuarios</h2>
      <p>Esta sección es para comunicaciones de la escuela acerca de fechas importantes, actos, eventos y todo otra información relevante para las familias.</p>

      <div class="col-xs-6 col-md-3">
      </div>
    </div>
  </div>


</div>
<div class="clearfix">

</div>
