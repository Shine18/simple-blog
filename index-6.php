<?php 
    class Car {
        var $company;
        var $color;
        var $model;

        

    };

  
    $a = new Car;

    $a->company = "Toyota";
    $a->color = "Red";
    $a->model = 2003;

    $b = new Car;
    $b->company = "Honda";
    $b->color = "Black";
    $b->model = 2010;



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
    <table border="1" cellpadding="20">
        <tr>
            <td><?php echo $a->company; ?></td>
            <td><?php echo $a->model; ?></td>
            <td><?php echo $a->color; ?></td>
        </tr>

        <tr>
            <td><?php echo $b->company; ?></td>
            <td><?php echo $b->model; ?></td>
            <td><?php echo $b->color; ?></td>
        </tr>
    </table>
</body>
</html>