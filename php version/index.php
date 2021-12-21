<?php include __DIR__ . '/partials/scripts/data.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi: php version</title>
</head>
<body>
    <?php foreach($database as $disc) { ?> 
        <img src="<?php echo $disc['poster']?>" alt="">
    <?php } ?>
</body>
</html>