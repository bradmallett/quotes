<!DOCTYPE html>
<html>
<head>
    <title>Quotes</title>
    <link href="main.css" type="text/css" rel="stylesheet"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
    <?php foreach($photos as $berra) : ?>
        <body style="background-image: url(<?= $berra->photo; ?>);">
    <?php endforeach; ?>    

            <div class="quote">
                <?php foreach($quotes as $yogi) : ?>
                    <p><?= $yogi->quote; ?></p>
                    <p>-Yogi Berra</p>
                <?php endforeach; ?>    
            </div><!--quote-->
        </body>
</html>

    