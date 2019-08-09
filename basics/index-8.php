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
        function set_color($color){
            $this->color = $color;
        }
        function set_company($company){
            $this->company = $company;
        }
        function set_model($model){
            $this->model = $model;
        }

        // getter function
        function get_color(){
            return $this->color;
        }
        function get_company(){
            return $this->company;
        }
        function get_model(){
            return $this->model;
        }

        function output_color(){
            echo $this->color;
            echo "<br />";
        }

        function dump(){
            var_dump($this);
        }

        function accelerate(){
            echo $this->company . " of color ". $this->color . " accelerating";
        }
        function brake(){
            echo $this->company . " braking";
        }

    };


    $a = new Car;
    // $a->color = "Black";
    $a->set_color("Black");
    $a->set_company("Honda");

    $b = new Car;
    // $b->color = "Red"; 
    $b->set_color("Red");
    $b->set_company("Yamaha");


    // $c = $a->get_color();
    // echo $c;

    $a->dump(); 
    echo "<br /><br />";
    $b->dump();

    echo "<br />";

    echo $a->get_color();
    echo "<br />";

    echo $b->get_color();
    
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
    <?php 

    ?>
</body>
</html>