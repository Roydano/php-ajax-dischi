<?php 
    include __DIR__ . '/database/lista-dischi.php'
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>
<body>
    <div class="container">
        <?php foreach($dischi as $key => $music) { ?>
            <div class="card">

                <div class="img_cover">
                    <img src="<?php echo $music['poster'] ?>" alt="<?php echo $music['title'] ?>">
                </div>
                <h3><?php echo $music['title'] ?></h3>
                <p><?php echo $music['author'] ?></p>
                <p><?php echo $music['year'] ?></p>

            </div>


        <?php } ?>
    </div>
    
</body>
</html>