<?php
//Controlliamo se tutto il form e` stato inviato
if ( $_POST["titolo"] && $_POST["artista"] && $_POST["url_cover"] && $_POST["anno"] && $_POST["genere"]){
 
    $titolo = $_POST["titolo"];   
    $artista = $_POST["artista"]; 
    $url_cover = $_POST["url_cover"];
    $anno = $_POST["anno"];
    $genere = $_POST["genere"];  


//Recupero i dati dentro il file.json e converto i dati con il json_decode
$dischi_json = file_get_contents ("./dischi.json");
$dischi_stringsNuovo = json_decode($dischi_json, true);

//Aggiungo l`array recuperato dal form
$dischi_stringsNuovo [] = [
    "titolo" =>  $titolo,
    "artista" =>  $artista,
    "url_cover" =>  $url_cover,
    "anno" =>  $anno,
    "genere" =>  $genere
];

//Convertiamo l`array recuperato in json
$Nuovodischi_json = json_encode($dischi_stringsNuovo);

//Sovrascrivo i dati nel file .json con i dati aggiungi dal form
file_put_contents("./dischi.json",$Nuovodischi_json);

//Reinderizziamo alla pagina di home
header("Location: ./index.php");
};

?>