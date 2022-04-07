<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('script.php')
    ?>
    <h1><? echo $text ?></h1>
    <p>contiene: <?php echo strlen($text) ?> caratteri</p>
    <h1><?php echo $family_friendly_text ?></h1>
    <p>contiene: <?php echo strlen($family_friendly_text) ?> caratteri</p>
</body>
</html>