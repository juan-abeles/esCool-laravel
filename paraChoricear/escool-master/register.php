<?php

require_once 'classes/Auth.php';
require_once 'classes/User.php';
require_once 'classes/Validate.php';
require_once 'loader.php';

if(Auth::check()) {
    $usuario = $db->searchEmailDB($_SESSION['email']);
    Auth::redirectToProfile($usuario);
}

if ($_POST) {
    $user = new User($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['institucion'], $_POST['rol'], $_POST['password'], $_POST['genero']);
    //$user = new User('1', '2', '3', '4', '5', '6', '7');
    //var_export($user);
    $errors = Validate::validateUser($user, $_POST);
    $avatarErrors = Validate::validateAvatar();
    $errors = array_merge($errors, $avatarErrors);

    if (count($errors) === 0) {
        $userArray = $db->createUser($user);
        $userArray['avatar'] = $db->saveAvatar($userArray);
        $db->saveUser($userArray);
        redirect('login.php');
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php'; ?>
        <title>EsCool - Registrarse</title>
    </head>
        
    <body>
        <!-- Header  -->
        <header class="encabezado">
            <?php require 'navbar.php'; ?>
        </header>

        <div class="container py-5">
            
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Registrarse</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" id="formRegister" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="uname1">Nombre/s</label>
                                    <input type="text"  class="form-control form-control-lg rounded-0" placeholder="John" name="nombre" id="nombre" value="<?=!isset($errors['nombre']) ? old('nombre') : ""; ?>" >
                                    <?php if(isset($errors['nombre'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['nombre']; ?></strong>
                                        </div>
                                    <?php endif;?> 
                                </div>
                                <div class="form-group">
                                    <label for="uname1">Apellido/s</label>
                                    <input type="text"  class="form-control form-control-lg rounded-0" placeholder="Connor" name="apellido" id="apellido" value="<?=!isset($errors['apellido']) ? old('apellido') : ""; ?>">
                                    <?php if(isset($errors['apellido'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['apellido']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="form-group">                            
                                    <label for="uname1">E-mail</label>
                                    <input type="text"  class="form-control form-control-lg rounded-0" placeholder="john.connor@skynet.com" name="email" id="email" value="<?=!isset($errors['email']) ? old('email') : ""; ?>" >
                                    <?php if(isset($errors['email'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['email']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="form-group">
                                    <label for="institucion">Institución</label>
                                    <select name="institucion"  id="institucion" class="form-control form-control-lg rounded-0" value="<?=!isset($errors['institucion']) ? old('institucion') : ""; ?>">
                                        <option value="" hidden>Seleccionar</option>
                                        <option value="andersen">Colegio H.C. Andersen</option>
                                        <option value="brendans">St. Brendan's College</option>
                                        <option value="manuelbelgrano">Colegio Manuel Belgrano</option>
                                        <option value="esclavas">Colegio Esclavas del Corazón de Jesús</option>
                                        <option value="sanagustin">Colegio San Agustín</option>
                                        <option value="sammartindetours">Instituto San Martín de Tours</option>
                                    </select>
                                    <?php if(isset($errors['institucion'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['institucion']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <select name="rol" class="form-control form-control-lg rounded-0" value="<?=!isset($errors['rol']) ? old('rol') : ""; ?>">
                                        <option value="" hidden>Seleccionar</option>
                                        <option value="1">Alumno</option>
                                        <option value="2">Padre/Madre</option>
                                        <option value="3">Docente</option>
                                    </select>
                                    <?php if(isset($errors['rol'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['rol']; ?></strong>
                                        </div>
                                    <?php endif;?>    
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" d class="form-control form-control-lg rounded-0" id="pwd1">
                                    <?php if(isset($errors['password'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['password']; ?></strong>
                                        </div>
                                    <?php elseif(isset($errors['cpassword'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['cpassword']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="form-group">
                                    <label>Confirmar contraseña</label>
                                    <input type="password" name="cpassword"  class="form-control form-control-lg rounded-0" id="pwd1">
                                </div>
                                <div class="form-group">
                                    <label for="genero">Género</label>
                                    <select name="genero" class="form-control form-control-lg rounded-0" value="<?=!isset($errors['genero']) ? old('genero') : ""; ?>">
                                        <option value="" hidden>Seleccionar</option>
                                        <option value="femenino">Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>
                                    <?php if(isset($errors['genero'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['genero']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="form-group">
                                    <label>Foto de perfil</label><br>
                                    <input type="file" name="avatar">                                        
                                </div>  
                                <div class="form-group">
                                    <input type="checkbox" name="confirm" value="">
                                    <label for="confirm">Acepto los términos y condiciones.</label>
                                    <?php if(isset($errors['confirm'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['confirm']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Enviar</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->

        <?php require 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>