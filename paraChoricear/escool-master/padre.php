<?php

require 'classes/Auth.php';
require 'classes/JsonDB.php';

//Empieza la chanchada
session_start();

if(!Auth::guest()) {
    redirect('index.php');
}

if(isset($_SESSION)) {
    $dataBase= new JsonDB('users.json');
    $usuario = $dataBase->searchEmailDB($_SESSION['email']);
}
//Empieza la chanchada

?>

<!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php'; ?>

        <title>EsCool - Perfil</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-secondary navbar-static-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand py-3 px-0" href="index.php">EsCool</a>

                <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle navbar-toggler-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
                ¡Bienvenido, <?= $usuario['nombre']; ?>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Ver/Editar perfil</a>
                <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
            </div>
            </div>

            </div>
            <div class="avatar">
              <img src="profiles/<?=$usuario['avatar']?>" alt="avatar">
            </div>
        </nav>




<!-- Sidebar + Content -->

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
         En esta sección podrás encontrar las evaluaciones y calificaciones de las materias que estén cursando tus hijos.
       </p>

</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Asistencia</h2>
   <p>En esta sección podrás visualizar el registro de tus asistencias e inasistencias de tus hijos.</p>


</div>
<div class="tab-pane text-style" id="tab3">
  <h2>Comunicaciones</h2>
  <p>Esta sección es para comunicaciones de la escuela acerca de fechas importantes, actos, eventos y todo otra información relevante para las familias.</p>

    <div class="col-xs-6 col-md-3">
  </div>
</div>
</div>


</div>





        <?php require 'scripts.php'; ?>
    </body>
</html>
