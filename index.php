<?php

$dischi_json = file_get_contents ("./dischi.json");

//var_dump($dischi_json);

$dischi_string = json_decode($dischi_json);

var_dump($dischi_string);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischify</title>
</head>
<body>
    
<h1>Dischify</h1>



</body>
</html>