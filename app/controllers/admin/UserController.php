<?php

namespace app\controllers\admin;

use app\models\User;

class UserController extends AppController{

    public function loginAdminAction(){
        if(!empty($_POST)){
            $user = new User();
            if($user->login()){
                $_SESSION['success'] = "Вы успешно авторизованы";
                $admin_data = \R::find('admin_user', 'LIMIT 1');
    
                $login = replace_symbols($admin_data['1']['login']);
                $password = replace_symbols($admin_data['1']['password']);
    
                redirect(ADMIN . "/user/admin{$login}{$password}");
            }else{
                $_SESSION['error'] = "Логин/пароль введены неверно";
                redirect();
            }
        }
        $this->setMeta('Логин Админ', 'description', 'keyword');
        $this->layout = 'login';
    }

    public function userEditAction(){
        $this->setMeta('Панель действие', 'description', 'keyword');
        $this->layout = 'actions';
        $user = \R::find('admin_user', 'LIMIT 1');
        
        $this->set(compact('user'));
        if(!empty($_POST)){
            if($user['1']['login'] != $_POST['login'] || $user['1']['password'] != $_POST['password']){
                
                $login = $_POST["login"];
                $password = $_POST["password"];
                \R::exec("UPDATE admin_user SET login= ?, password= ? WHERE id= 1", [$login, $password]);

                $admin_data = \R::find('admin_user', 'LIMIT 1');

                $login = replace_symbols($admin_data['1']['login']);
                $password = replace_symbols($admin_data['1']['password']);
    
                redirect(ADMIN . "/user/admin{$login}{$password}");
            }
        }
    }
    
    public function contactEditAction(){
        $this->setMeta('Панель действие', 'description', 'keyword');
        $this->layout = 'actions';
        $contacts = \R::find('contacts', 'LIMIT 1');
        
        $this->set(compact('contacts'));
        
        if(!empty($_POST)){
            if($contacts['1']['tel1'] != $_POST['tel1'] || $contacts['1']['tel2'] != $_POST['tel2'] || $contacts['1']['mail'] != $_POST['mail'] || $contacts['1']['adress'] != $_POST['adress']){
                $tel1 =  $_POST['tel1'];
                $tel2 =  $_POST['tel2'];
                $mail =  $_POST['mail'];
                $adress =  $_POST['adress'];
                \R::exec("UPDATE contacts SET tel1= ?, tel2= ?, mail= ?, adress= ? WHERE id= 1", [$tel1, $tel2, $mail, $adress]);
                $admin_data = \R::find('admin_user', 'LIMIT 1');
    
                $login = replace_symbols($admin_data['1']['login']);
                $password = replace_symbols($admin_data['1']['password']);
    
                redirect(ADMIN . "/user/admin{$login}{$password}");
            }
        }

    }


}