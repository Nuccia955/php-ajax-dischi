<?php include __DIR__ . '/partials/scripts/database.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Dischi: php version</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="spotify logo">
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <?php foreach($database as $disc) { ?> 
                <div class="card">
                    <div class="cover">
                        <img src="<?php echo $disc['poster']?>" alt="album cover">
                    </div>
                    <div class="description">
                        <h4 class="title">
                            <?php echo $disc['title']?>
                        </h4>
                        <span class="author">
                            <?php echo $disc['author']?>
                        </span>
                        <h4 class="year">
                            <?php echo $disc['year']?>
                        </h4>
                        <span class="genre">
                            <?php echo $disc['genre']?>
                        </span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>