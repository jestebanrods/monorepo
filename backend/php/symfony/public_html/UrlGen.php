<?php

$routes = new RouteCollection();
$routes->add('show', new Route('/show/{var}'));

$context = new RequestContext('/');

$generator = new UrlGenerator($routes, $context);

$url = $generator->generate('show', array(
    'var' => $uri
));

echo $url;
$url = substr($url, 1);
header('Location: http://localhost:8000' . $url);