<?php

require_once 'helpers.php';

abstract class DB {
    abstract public function connectDB();
    abstract public function searchEmailDB($email);
    abstract public function saveUser(User $user);

    public function saveAvatar($user) {
        if($_FILES["avatar"]["error"] != UPLOAD_ERR_NO_FILE) {
            $avatarName = $_FILES["avatar"]["name"];
            $avatarTmpName = $_FILES["avatar"]["tmp_name"];
            $ext = pathinfo($avatarName, PATHINFO_EXTENSION);
    
            $avatarFile = "profile_user_" . $user["id"] . "." . $ext;
            $avatarPath = dirname(__FILE__) . "/profiles/" . $avatarFile;
            move_uploaded_file($avatarTmpName, $avatarPath);
        } else {
            if($user['genero'] == "femenino") {
                $avatarFile = "profile_default_female.jpg";
            } else {
                $avatarFile = "profile_default_male.jpg";
            }
        }
    
        return $avatarFile;
    }
}

?>
