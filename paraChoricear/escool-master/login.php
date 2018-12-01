<?php

require_once 'helpers.php';
require_once 'classes/Auth.php';
require_once 'classes/User.php';
require_once 'loader.php';

session_start();


if(Auth::check()) {
    //Mas chanchada
    $usuario = $db->searchEmailDB($_SESSION['email']);
    $user = new User($usuario['nombre'], $usuario['apellido'], $usuario['email'], $usuario['institucion'], $usuario['rol'], $usuario['password'], $usuario['rol'], $usuario['avatar']);
    Auth::redirectToProfile($user);
}

if($_POST) {
    $errors = [];

    $userArray = $db->searchEmailDB($_POST['email']);
    $user = new User($userArray['nombre'], $userArray['apellido'], $userArray['email'], $userArray['institucion'], $userArray['rol'], $userArray['password'], $userArray['rol'], $userArray['avatar']);
    if($userArray !== null) {
        if(isset($_POST['btnLogin'])) {
            if(password_verify($_POST['password'], $user->getPassword())) {
                Auth::login($user, isset($_POST['recuerdame']));
                Auth::redirectToProfile($user);
            } else {
                $errors['password'] = "Contraseña inválida";
            }
        } else {
            redirect('forgot.php');
        }
    } else {
        $errors['email'] = "Email inválido";
    }
}

?>

<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php'; ?>
        <title>EsCool - Login</title>
    </head>
    
    <body>
        <header class="encabezado">
            <?php require 'navbar.php'; ?>
        </header>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- login card -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Iniciar Sesión</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" id="formLogin" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" value="<?=!isset($errors['email']) ? old('email') : ""; ?>">
                                    <?php if(isset($errors['email'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['email']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password">
                                    <?php if(isset($errors['password'])): ?>
                                        <div class="alert alert-danger">
                                            <strong><?=$errors['password']; ?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="recuerdame" value="true">Recordarme                                   
                                </div>
                                <div>
                                    <button type="submit" name="btnForgot" value="Forgot" class="btn btn-link">Olvidé mi contraseña</button> 
                                </div>
                                <button type="submit" id="btnLogin" name="btnLogin" value="Login" class="btn btn-success btn-lg float-right">Ingresar</button>
                            </form>
                        </div>
                    </div>
                    <!--/login card-->

                </div>
                <!--/column-->
            </div>
            <!--/row-->
        </div>
        <!--/container-->

        <?php require 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>