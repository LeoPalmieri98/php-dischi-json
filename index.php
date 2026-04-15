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

    </div> </div>

</body>
</html>