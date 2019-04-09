<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $age = 12; ?>
    <?php 
        if ( $age < 18 ) {
            echo "<h1>You are a child</h1>";
        } elseif ( $age > 40 ) {
            echo "<h1>You are an old man</h1>";
        } else {
            echo "<h1>You are an adult</h1>";
        }


    ?>

    <?php if ( $age < 18 ) { ?>
        <h1>You are a child</h1>
    <?php } ?>


    <h2>While loop</h2>
    <?php 
        $counter = 1;
        while ($counter < 10) {
            echo "Hello";
            $counter = $counter + 1;
        }
        echo $counter;
    ?>

    <?php $counter = 1; # 1 - initialization ?>
    
    <?php while ( $counter < 10 ) { // 2 - condition ?>
        <h6>Hello from while</h6>
        <?php $counter = $counter + 1; // 3- increment/decrement ?>
    <?php } ?>



    <h3>For Loop</h3>
    <?php for ( $counter = 1 ; $counter < 5 ; $counter++) { ?>
        <h2>Hello from for loop</h2>
    <?php } ?>


    <?php $i = 1; ?>
    <?php
        while ($i <= 100) {
            echo $i . "<br/>";
            $i++;
        }
    ?>
    
</body>
</html>