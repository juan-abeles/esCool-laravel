<?php

class Validate {
    public static function emailValidate($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function passwordMatch($pass, $cpass) {
        return $pass === $cpass;
    }

    public static function validateUser(User $user, $data) {
        $errors=[];
        // Validacion de nombre
        $nombre = $user->getNombre();
        if($nombre == "") {
            $errors['nombre'] = "Por favor, ingrese su nombre";
        }

        // Validacion de apellido
        $apellido = $user->getApellido();
        if($apellido == "") {
            $errors['apellido'] = "Por favor, ingrese su apellido";
        }

        // Validacion de email
        $email = $user->getEmail();
        if($email == "") {
            $errors['email'] = "Por favor, ingrese su email";
        } elseif(!self::emailValidate($email)) {
            $errors['email'] = "El email no es valido";
        }

        // Validacion de institucion
        $institucion = $user->getInstitucion();
        if($institucion == "") {
            $errors['institucion'] = "Por favor, seleccione una institucion";
        }

        // Validacion de rol
        $rol = $user->getRol();
        if($rol == "") {
            $errors['rol'] = "Por favor, seleccione un rol";
        }

        // Validacion de password
        $password = $user->getPassword();
        $cpassword = $data['cpassword'];
        if($password == "") {
            $errors['password'] = "Por favor, ingrese una contraseña";
        } else if(strlen($password) < 4) {
            $errors['password'] = "La contraseña debe tener al menos 4 caracteres";
        }

        // Validacion de cpassword
        if(!self::passwordMatch($password, $cpassword)) {
            $errors['cpassword'] = "Las contraseñas no coinciden";
        }

        // Validacion de genero
        $genero = $user->getGenero();
        if($genero == "") {
            $errors['genero'] = "Por favor, ingrese su genero";
        }

        // Validacion de terminos y condiciones
        if(!isset($data['confirm'])) {
            $errors['confirm'] = "Debe aceptar terminos y condiciones";
        }

        return $errors;
    }

    public static function validateAvatar() {
        $errors = [];
    
        if($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    
            if($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
                $errors["avatar"] = "Solo se aceptan formatos jpg y png";
            }
        } else if ($_FILES["avatar"]["error"] != UPLOAD_ERR_NO_FILE) {
            $errors["avatar"] = "Hubo un error al procesar el archivo";
        }
    
        return $errors;
    }

    public static function passwordValidate($password, $objectPassword)
    {
        return password_verify($password, $objectPassword);
    }

    public static function loginValidate($password, User $user)
    {
        return self::passwordValidate($password, $user->getPassword());

    }

}

?>
