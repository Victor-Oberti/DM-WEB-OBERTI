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

Flight::route('/test-db', function () {
    $sql = "SELECT nom FROM communes";
    $query = mysqli_query(Flight::get('geobase'), $sql);
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
    Flight::json($results);
});

Flight::route('/carte', function() {
    Flight::render('carte');
});

Flight::route('/ville2france', function() {
    if (isset($_GET['choix']) && isset($_GET['input_lettres'])) {
        $choix = $_GET['choix'];
        $input_lettres = $_GET['input_lettres'];
    
        if ($choix === 'commence') {
            $sql = "SELECT nom, ST_X(ST_GeomFromText(ST_AsText(ST_Centroid(geometry)),4326)) AS lon, ST_Y(ST_GeomFromText(ST_AsText(ST_Centroid(geometry)),4326)) AS lat FROM communes WHERE nom LIKE '$input_lettres%'"
            . " AND geometry IS NOT NULL AND ST_IsValid(geometry) =1";
        } elseif ($choix === 'termine') {
            $sql = "SELECT nom, ST_X(ST_GeomFromText(ST_AsText(ST_Centroid(geometry)),4326)) AS lon, ST_Y(ST_GeomFromText(ST_AsText(ST_Centroid(geometry)),4326)) AS lat FROM communes WHERE nom LIKE '%$input_lettres'"
            . " AND geometry IS NOT NULL AND ST_IsValid(geometry) =1";
        } elseif ($choix === 'contient') {
            $sql = "SELECT nom, ST_X(ST_GeomFromText(ST_AsText(ST_Centroid(geometry)),4326)) AS lon, ST_Y(ST_GeomFromText(ST_AsText(ST_Centroid(geometry)),4326)) AS lat FROM communes WHERE nom LIKE '%$input_lettres%'"
            . " AND geometry IS NOT NULL AND ST_IsValid(geometry) =1";
        } else {
            Flight::json(['error' => 'Invalid choice parameter']);
            return;
        }
        $query = mysqli_query(Flight::get('geobase'), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    } else {
        Flight::render('ville2france');
        return;
    }
    Flight::json($result);
});


Flight::start();

?>