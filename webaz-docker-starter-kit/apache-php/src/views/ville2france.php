<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ville2France</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <link rel="stylesheet" href="assets/carte.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png" />
</head>

<body>

<h1><a href="/">Explorez les villes de France !</a></h1>

<h3>Faites votre choix :</h3>


<div id=entete>
    <form action="" @submit.prevent="points">

    <select v-model ="choix">
    <option value="commence" selected>commence par</option>
    <option value="termine" >termine par</option>
    <option value="contient">contient</option>
    </select>

    <input type="text" v-model="input_lettres">
    <button @click="points">Rechercher</button>
    </form>

        <div id=preselect>
        <button @click="preset1">Villes commençant par "Mont"</button>
        <button @click="preset2">Villes contenant "ker"</button>
        <button @click="preset3">Villes terminant par "ville"</button>
        </div>

</div>

 <div id="map"></div>   



 
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>



<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="assets/leaflet.js"></script>

</body>
</html>