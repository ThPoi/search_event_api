<?php


/**
 * Routing
 */

define ('URL','http://localhost:8888/search_event_api/public/');

 //Get q param
 $q = !empty($_GET['q']) ? $_GET['q'] : 'home';

 //define controller
 $controller = '404';

 if($q == 'home') {
    $controller = 'home';
} else if($q == 'map') {
    $controller = 'map';
}

/**
 * prepare your POST here
 */






 //include controller
 include '../controllers/'.$controller.'.php';