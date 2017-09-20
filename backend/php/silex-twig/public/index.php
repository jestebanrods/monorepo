<?php

use MongoDB\BSON\Regex;
use MongoDB\Client;
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new Application();

$app->register(new TwigServiceProvider(), array(
    'twig.path' => dirname(__DIR__) . '/resources/views',
));

/*
  $app->get('/', function(){
  return "Hello world";
  });

  $app->get('/hello', function(){
  return new Symfony\Component\HttpFoundation\Response("Hello world 2");
  });

  $app->get("/users/{id}", function($id){
  return "User - {$id}";
  });
 */

$archivo = file_get_contents(__DIR__ . "/users.json");
$jsson = json_decode($archivo, true);

$app->get("/", "\jestebanrs\Controllers\HomeController::index");

$app->get('/twig', function () use ($app, $jsson) {
    return $app['twig']->render('home.html.twig', ['users' => $jsson]);
});

$conexion = new Client();
$db = $conexion->testing;
$taxistas = $db->taxistas;
$cantidad = $taxistas->count();
$busquedas = $taxistas->find()->toArray();

$app->get('/conjuntos', function () use ($app, $busquedas) {
    return $app['twig']->render('taxistas.html.twig', ['taxistas' => $busquedas]);
});

$app['debug'] = true;
$app->run();
