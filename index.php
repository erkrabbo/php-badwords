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
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequuntur eveniet nisi in magnam fuga ipsam sapiente, illum dignissimos quas alias temporibus quia nulla laudantium sunt. Aliquid veniam odio unde.';
        $bad_word = $_GET['bad_word'];
        
        $family_friendly_text = str_replace($bad_word, '***', $text);
    ?>
    <h1><?php echo $text ?></h1>
    <p>contiene: <?php echo strlen($text) ?> caratteri</p>
    <h1><?php echo $family_friendly_text ?></h1>
    <p>contiene: <?php echo strlen($family_friendly_text) ?> caratteri</p>
</body>
</html>