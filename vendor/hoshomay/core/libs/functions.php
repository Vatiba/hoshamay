<?php

function debug($arr){
    echo "<pre>" . print_r($arr, true) . "</pre>";
}

function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function replace_symbols($word){
    // ! @ # $ % ^ & * ( ) _ + = - / . , " ? \ ` ~ ' { } [ ] ; : < >   Replace these symbols to empty.

    $word = str_replace('`', '', $word);
    $word = str_replace('~', '', $word);


    $word = str_replace('!', '', $word);
    $word = str_replace('@', '', $word);
    $word = str_replace('#', '', $word);
    $word = str_replace('$', '', $word);
    $word = str_replace('%', '', $word);
    $word = str_replace('^', '', $word);
    $word = str_replace('&', '', $word);
    $word = str_replace('*', '', $word);
    $word = str_replace('(', '', $word);
    $word = str_replace(')', '', $word);
    $word = str_replace('_', '', $word);
    $word = str_replace('+', '', $word);
    $word = str_replace('=', '', $word);
    $word = str_replace('-', '', $word);
    $word = str_replace('/', '', $word);
    $word = str_replace('.', '', $word);
    $word = str_replace(',', '', $word);
    $word = str_replace('"', '', $word);
    $word = str_replace('?', '', $word);
    $word = str_replace('\\', '', $word);
    $word = str_replace('\'', '', $word);
    $word = str_replace('{', '', $word);
    $word = str_replace('}', '', $word);
    $word = str_replace('[', '', $word);
    $word = str_replace(']', '', $word);
    $word = str_replace(';', '', $word);
    $word = str_replace(':', '', $word);
    $word = str_replace('<', '', $word);
    $word = str_replace('>', '', $word);

    return $word;
}