<?php

namespace hoshomay;


class Db{

    use TSingleton;
    
    protected function __construct()
    {
        // connection with redbean ORM;
        require_once LIBS . '/rb-mysql.php';

        $db = require_once CONF . '/config_db.php';

        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if(!\R::testConnection()){
            throw new \Exception("NO connection with Db", 500);
        }
        \R::freeze(true);
        if(DEBUG){
            \R::debug(true, 1);
        }
    }

}