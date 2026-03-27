<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ville2France</title>
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

</body>
</html>