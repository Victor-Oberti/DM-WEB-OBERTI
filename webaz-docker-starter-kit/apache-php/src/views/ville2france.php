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


</head>
<body>

<p>Faites votre choix</p>



<form action="" @submit.prevent="lettres">

<select name="choix">
  <option value="commence" selected>commence par</option>
  <option value="termine" >termine par</option>
  <option value="contient">contient</option>
</select>

<input type="text" name="input_lettres">
<input type="submit" value="Rechercher">
</form>


 <div id="map">
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

 </div>

<div id="app">
  {{ message }}
</div>


<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="assets/leaflet.js"></script>

</body>
</html>