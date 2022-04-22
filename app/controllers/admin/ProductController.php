<?php

namespace app\controllers\admin;

use Exception;

class ProductController extends AppController{


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


    public function editAction(){
        $this->setMeta('Панель действие', 'description', 'keyword');
        $this->layout = 'actions';
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $product = \R::find('products', "WHERE id= ?", [$id]);
            $_SESSION['old_img'] = $product[$id]['img'];
            $this->set(compact('product', 'id'));
        }

        if(!empty($_POST)){
            $id = (int)$_POST['id'];
            $title =  $_POST['title'];
            $text =  $_POST['text'];
            $weight =  (int)$_POST['weight'];
            $price =  (double)$_POST['price'];
            $img = $_FILES['file']['name'];
            \R::exec("UPDATE products SET title= ?, text= ?, weight= ?, price= ? WHERE id= ?", [$title, $text, $weight, $price, $id]);
            if(!empty($_FILES['file']['tmp_name']) && !empty($_FILES['file']['name'])){
                
                move_uploaded_file($_FILES['file']['tmp_name'], WWW . "/uploaded_images/" . $_FILES['file']['name']);

                if($_SESSION['old_img'] != 'no_image.png' && $_SESSION['old_img'] != $_FILES['file']['name'] && file_exists(WWW . "/uploaded_images/" . $_SESSION['old_img'])){
                    unlink(WWW . "/uploaded_images/" . $_SESSION['old_img']);
                }

                \R::exec("UPDATE products SET img= ? WHERE id= ?", [$img, $id]);
            }


            $admin_data = \R::find('admin_user', 'LIMIT 1');

            $login = replace_symbols($admin_data['1']['login']);
            $password = replace_symbols($admin_data['1']['password']);

            redirect(ADMIN . "/user/admin{$login}{$password}");


        }
    }

    public function deleteAction(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $img_name = \R::find('products', 'WHERE id = ?', [$id]);
            $img_name = $img_name[$id]['img'];
            $product = \R::exec("DELETE FROM products WHERE `products`.`id` = ?", [$id]);
            if($img_name != 'no_image.png' && file_exists(WWW . "/uploaded_images/" . $img_name)){
                unlink(WWW . "/uploaded_images/" . $img_name);
            }
        }

        $admin_data = \R::find('admin_user', 'LIMIT 1');
        redirect(ADMIN . "/user/admin{$admin_data['1']['login']}{$admin_data['1']['password']}");
    }

    public function addAction(){
        $this->setMeta('Панель действие', 'description', 'keyword');
        $this->layout = 'actions';
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $product = \R::find('products', "WHERE id= ?", [$id]);
            $this->set(compact('product', 'id'));
        }

        if(!empty($_POST)){
            $title =  $_POST['title'];
            $text =  $_POST['text'];
            $weight =  (int)$_POST['weight'];
            $price =  (double)$_POST['price'];

            if(!empty($_FILES['file']['tmp_name']) && !empty($_FILES['file']['name'])){
                $img = $_FILES['file']['name'];
            }else{
                $img = "no_image.png";
            }

            \R::exec("INSERT INTO `products` (`title`, `text`, `weight`, `price`, `img`) VALUES (?, ?, ?, ?, ?)", [$title, $text, $weight, $price, $img]);
            if(!empty($_FILES['file']['tmp_name']) && !empty($_FILES['file']['name'])){
                move_uploaded_file($_FILES['file']['tmp_name'], WWW . "/uploaded_images/" . $_FILES['file']['name']);
            }

            $admin_data = \R::find('admin_user', 'LIMIT 1');

            $login = replace_symbols($admin_data['1']['login']);
            $password = replace_symbols($admin_data['1']['password']);

            redirect(ADMIN . "/user/admin{$login}{$password}");



        }
    }


}