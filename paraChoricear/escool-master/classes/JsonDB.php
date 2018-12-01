<?php

require_once 'DB.php';

class JsonDB extends DB {
    private $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function connectDB() {
        $database = file_get_contents($this->file);
        $usersJson = explode(PHP_EOL, $database);
        array_pop($usersJson);
    
        $usersArray = [];
    
        foreach($usersJson as $user) {
            $usersArray[] = json_decode($user, true);
    
        }
    
        return $usersArray;
    }

    public function searchEmailDB($email) {
        $users = $this->connectDB();
    
        foreach($users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
    
        return null;
    }

    public function saveUser($user) {
        $jsonUser = json_encode($user);
        file_put_contents($this->file, $jsonUser . PHP_EOL, FILE_APPEND);
    }

    public function idGenerate() {
        $file = file_get_contents($this->file);
    
        if($file == "") {
            return 1;
        }
    
        $users = explode(PHP_EOL, $file);
        array_pop($users);
    
        $lastUser = $users[count($users) - 1];
        $lastUser = json_decode($lastUser, true);
    
        return $lastUser['id'] + 1;
    }

    public function createUser(User $user) {
        $usuario = [
            'nombre' => $user->getNombre(),
            'apellido' => $user->getApellido(),
            'email' => $user->getEmail(),
            'institucion' => $user->getInstitucion(),
            'rol' => $user->getRol(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'genero' => $user->getGenero()
        ];
    
        $usuario['id'] = $this->idGenerate();
    
        return $usuario;
    }

    public function saveAvatar($userArray) {
        if($_FILES["avatar"]["error"] != UPLOAD_ERR_NO_FILE) {
            $avatarName = $_FILES["avatar"]["name"];
            $avatarTmpName = $_FILES["avatar"]["tmp_name"];
            $ext = pathinfo($avatarName, PATHINFO_EXTENSION);
            $avatarFile = "profile_user_" . $userArray["id"] . "." . $ext;
            $avatarPath = dirname(__FILE__) . "/profiles/" . $avatarFile;
            move_uploaded_file($avatarTmpName, $avatarPath);
        } else {
            if($userArray['genero'] == "femenino") {
                $avatarFile = "profile_default_female.jpg";
            } else {
                $avatarFile = "profile_default_male.jpg";
            }
        }
        return $avatarFile;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
}

?>
