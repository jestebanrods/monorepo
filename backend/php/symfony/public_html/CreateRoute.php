<?php 

// '_controller': Namespace del controlador
// 'MyControler': Método a ejecutar
$route = new Route('/test', array('_controller' => 'MyController'));
$routes = new RouteCollection();
$routes->add('route_name', $route);

$context = new RequestContext('/');

$matcher = new UrlMatcher($routes, $context);