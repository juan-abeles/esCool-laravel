<?php

require_once 'helpers.php';

class Auth {
    public static function setSession() {
        if(!isset($_SESSION)) {
            session_start();
        }
    }

    public static function login(User $user, $rememberMeEnabled = null) {
        $email = $user->getEmail();
        
        $_SESSION['email'] = $email;
        if($rememberMeEnabled) {
            self::cookieUp($email);
        }
    }

    private static function cookieUp($email) {
        setcookie('email', $email, time() + 3600 * 24 * 7, "/");
    }

    public static function logout() {
        if(!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        self::cookieDown();
        redirect('index.php');
    }

    private static function cookieDown() {
        setcookie('email', null, time() - 1);
    }

    public static function redirectToProfile($user) {
        switch ($user->getRol()) {
            case '1':
                redirect('alumno.php');
                break;
    
            case '2':
                redirect('padre.php');
                break;
    
            case '3':
                redirect('docente.php');
                break;
    
            default:
                break;
        }
    }

    public static function check() {
        return isset($_SESSION['email']);
    }
    
    public static function guest() {
        //return !self::check();
        return self::check();
    }
}

?>
