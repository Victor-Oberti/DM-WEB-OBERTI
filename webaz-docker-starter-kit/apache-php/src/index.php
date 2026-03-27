<?php

declare(strict_types=1);

require_once 'flight/Flight.php';


$link = mysqli_connect("mysql", "root", "root", "geobase", 3306);
mysqli_set_charset($link, "utf8");  

// stocker une variable globale
Flight::set('geobase', $link);
// récupérer la variable
Flight::get('geobase');

Flight::route('/', function() {
    Flight::render('accueil');
});

Flight::route('/info', function() {
    Flight::render('info');
});

Flight::route('/test-db', function () {
    $sql = "SELECT nom FROM communes";
    $query = mysqli_query(Flight::get('geobase'), $sql);
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
    Flight::json($results);
});


Flight::route('/regions', function(){
    $sql = "SELECT nom FROM regions";
    $regions = mysqli_query(Flight::get('geobase'),$sql);
    $regions = mysqli_fetch_all($regions, MYSQLI_ASSOC);
    Flight::json($regions);
});

FLIGHT::route('/test', function() {
    Flight::render('test');
});

Flight::start();

?>