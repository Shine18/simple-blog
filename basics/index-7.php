<?php 
    class Car {
        var $company;
        var $color;
        var $model;

        function set_info($comp, $col, $mod){
            $this->company = $comp;
            $this->color = $col;
            $this->model = $mod;
        }

        // setter function
        function set_color($c){
            $this->color = $c;
        }

        // getter function
        function get_color(){
            return $this->color;
        }


        function accelerate(){
            echo $this->company . " of color ". $this->color . " accelerating";
        }
        function brake(){
            echo $this->company . " braking";
        }

    };

  
    $a = new Car; // $a is object of class car
    // $a->color = "Red";
    // $a->company = "Toyota";
    // $a->model = 2003;
    $a->set_info("Toyota","Red",2003);

    $a->set_color("Red and Black");
    // $a->color = 'Red and Black';

    $b = new Car; // $b is object of class car
    $b->set_info("Honda","Black",2010);
    $b->set_color("White");


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
            <td><?php echo $a->get_color(); ?></td>
            <td><?php echo $a->accelerate(); ?></td>
            <td><?php echo $a->brake(); ?></td>
        </tr>

        <tr>
            <td><?php echo $b->company; ?></td>
            <td><?php echo $b->model; ?></td>
            <td><?php echo $b->color; ?></td>
            <td><?php echo $b->accelerate(); ?></td>
            <td><?php echo $b->brake(); ?></td>
        </tr>
    </table>
</body>
</html>