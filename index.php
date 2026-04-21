<?php

$dischi_json = file_get_contents ("./dischi.json");

//var_dump($dischi_json);

$dischi_strings = json_decode($dischi_json, true);

//var_dump($dischi_string);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dischify</title>
</head>
<body>
    
   <h1 class="d-flex justify-content-center">Dischify</h1>
        

<div class="container py-5">
    <div class="d-flex flex-wrap justify-content-center gap-4">

        <?php foreach ($dischi_strings as $key => $value ) { ?>

            <div class="card shadow-sm" style="width: 15rem;">
                
                <img src="<?php echo $value['url_cover']; ?>" class="card-img-top" alt="Cover">
                
                <div class="card-body text-center">
                    <h5 class="card-title text-truncate"><?php echo $value['titolo']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted text-truncate"><?php echo $value["artista"]; ?></h6>
                    <p class="card-text small mb-1"><?php echo $value["anno"]; ?></p>
                    <p class="card-text small text-uppercase text-secondary"><?php echo $value["genere"]; ?></p>
                </div>

            </div>

        <?php } ?>

    </div> 
</div>

<div>
<h3 class="ms-3">Aggiungi il tuo brano:</h3>
<form action="server.php" method="POST" class="ms-5 mt-5">
    <div class="mt-3">
        <input type="text" id="titolo"  name="titolo" placeholder="Titolo" value="Default titolo">
    </div>
    <div class="mt-3">
        <input type="text" id="artista"  name="artista" placeholder="Artista" value="Default artista">
    </div>
    <div class="mt-3">
        <input type="text" id="url_cover"  name="url_cover" placeholder="URL Cover" value="Default url_cover">
    </div>
    <div class="mt-3">
        <input type="text" id="anno"  name="anno" placeholder="Anno di uscita" value="Default anno">
    </div>
    <div class="mt-3">
        <input type="text" id="genere"  name="genere" placeholder="Genere Musicale" value="Default genere">
    </div>
    
    
    <h5 class="mt-5">Invia la tua Cover!</h5>
    <button>Invia</button>
</form>

</div>


</body>
</html>