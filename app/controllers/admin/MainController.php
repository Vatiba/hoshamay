<?php

namespace app\controllers\admin;

class MainController extends AppController{

    public function indexAction(){
        $this->setMeta('Админ панель', 'description', 'keyword');

        $products = \R::findAll('products');
        $contacts = \R::find('contacts', 'LIMIT 1');
        $admin_user = \R::find('admin_user', 'LIMIT 1');
        $this->set(compact('products', 'contacts', 'admin_user'));
    }

}