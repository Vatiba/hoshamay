<?php

namespace app\controllers;

use hoshomay\Cache;
use R;

class MainController extends AppController{

    public function indexAction(){
        // $posts = \R::findAll('users');
        // $post = \R::findOne('users', 'id= ?', [2]);
        $this->setMeta('Главная страница', 'description', 'keyword');
        
        // $name = 'John';
        // $age = 30;
        // $cache = Cache::instance();
        // $data = $cache->get('test');
        // if($data){
        //     $cache->set('test', $name);
        // }

        $products =  R::find('products', 'LIMIT 8');
        $contacts = R::find('contacts', 'LIMIT 1');
        $this->set(compact('products', 'contacts'));
    }

    public function aboutAction(){
        // $posts = \R::findAll('users');
        // $post = \R::findOne('users', 'id= ?', [2]);
        $this->setMeta('О продукте', 'description', 'keyword');
        
        // $name = 'John';
        // $age = 30;
        // $cache = Cache::instance();
        // $data = $cache->get('test');
        // if($data){
        //     $cache->set('test', $name);
        // }
        
    
        $products = R::findAll('products');
        $contacts = R::find('contacts', 'LIMIT 1');
        $this->set(compact('products', 'contacts'));
    }

    

}