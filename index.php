<?php $page_title = "Home"; ?>

<?php
    function bio($n, $a, $grad) {
        echo "My name is $n <br />";
        echo "My age is $a <br />";

        if($grad == true){
            echo "$n is graduated";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $page_title; ?></title>
</head>
<body>
    <?php 
        $name = "Ali"; 
        $age = 20;
        $marks = 20.3454;
        $graduated = true;



    ?>
    <h1>My name is <?php echo $name; ?></h1>
    <h2><?php echo "MY name is $name"; ?></h2>
    <?php echo "<h3>My age is $age</h3>"; ?>
    

    <?php bio("Ali", 20, true); ?>
    <?php bio("Umar", 21,false); ?>



</body>
</html>