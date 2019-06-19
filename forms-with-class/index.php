<?php
    include("form-processor.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit">
    </form>


    <?php 
        $fields = ['user','pass'];
        $values = ['admin', '123456'];
        $processor = new FormProcessor($fields,$values, $success = "You are in!");

        


        // $a = [23,46,92];
        // $b = array_pop($a);
        // echo "<br />";
        // echo $b;
        // echo "<br />";

        // var_dump($a);
        // echo "<br />";
        
        // $b = array_pop($a);
        // echo $b;
        // echo "<br />";
        // var_dump($a);
    ?>
</body>
</html>