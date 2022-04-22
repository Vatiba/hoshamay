<?php

use hoshomay\Router;
hoshomay\Db::instance();

Router::add('^admin$', ['controller' => 'User', 'action' => 'login-admin', 'prefix' => 'admin']);

$admin_data = R::find('admin_user', 'LIMIT 1');

$login = replace_symbols($admin_data['1']['login']);
$password = replace_symbols($admin_data['1']['password']);

Router::add("^admin/user/admin{$login}{$password}$", ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);


// default routes
// Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['controller' => 'Main', 'action' => 'index']);
