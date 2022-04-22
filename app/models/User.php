<?php

namespace app\models;

class User{

    public function login(){
        $login = !empty($_POST['login']) ? trim($_POST['login']) : null;
        $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

        if($login && $password){
            $user = \R::findOne('admin_user', 'login = ?', [$login]);
            
            if($password == $user['password']){
                return true;
            }
        }

        return false;
    }

    // public function login($isAdmin = false){
    //     $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
    //     $password = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
    //     if($login && $password){
    //         if($isAdmin){
    //             $user = \R::findOne("admin_user", "login = ? AND role = 'admin'", [$login]);
    //         }else{
    //             $user = \R::findOne('admin_user', 'login = ?', [$login]);
    //         }
    //         if($user){
    //             if(password_verify($password, $user->password)){
    //                 foreach($user as $k => $v){
    //                     if($k != 'password') $_SESSION['user'][$k] = $v;
    //                 }
    //                 return true;
    //             }
    //         }
    //     }
    //         return false;
    // }

    public static function isAdmin(){
        return isset($_SESSION['user']);
    }


}
