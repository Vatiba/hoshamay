<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\User;
use hoshomay\base\Controller;

class AppController extends Controller{

    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        // if($route['action'] != 'login-admin'){
        //     redirect(ADMIN . '/user/login-admin');
        // }
        
        
        // if(!empty($_POST)){
        //     if($route['action'] != 'login-admin'){
        //         redirect(ADMIN . '/user/login-admin');
        //     }
        // }

    }

}