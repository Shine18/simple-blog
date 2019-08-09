<?php 
    function sum($a = 0,$b = 0){
        return $a + $b;
    }
?>

<?php //echo sum(1,2); ?>

<?php
    class Person{
        var $name;
        var $age;
        var $dob;
        
        function __construct($name = "Unknown" ,$age = 18,$dob = "12-10-1992"){
            $this->name = $name;
            $this->age = $age;
            $this->dob = $dob;
            
        }

        function display(){
            echo "<hr>";
            echo "<h2>" . $this->name  . "</h2>";
            echo "<p>Age: " . $this->age . " ---- Date Of Birth:" . $this->dob . "</p>";
            echo "<hr>";
        }

        function set_name($name){
            $this->name = $name;
        }
        function set_age($age){
            $this->age = $age;
        }
        function set_dob($dob){
            $this->dob = $dob;
        }

        function get_name($name){
            return $this->name;
        }
        function get_age($age){
            return $this->age;
        }
        function get_dob($dob){
            return $this->dob;
        }
    };
?>



<?php
# 1- P1: 
#    Usman, 21, 12-10-1992
# 2- P2:
#   Ali, 12, 05-06-2001

$persons_data = [
    [
        "name" => "Usman",
        "age" => 21,
        "dob" => "18-10-1992"
    ],
    [
        "name" => "Suleman",
        "age" => 18,
        "dob" => "18-10-1992"
    ],
    [
        "name" => "Usama",
        "age" => 18,
        "dob" => "18-10-1992"
    ]
];

$persons = array();
for($i = 0; $i < 3; $i++) {
    $name = $persons_data[$i]["name"];
    $age = $persons_data[$i]["age"];
    $dob = $persons_data[$i]["dob"];

    $p = new Person($name,$age,$dob);
    $persons[$i] = $p;
}
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
        for ($i = 0; $i < 3; $i++){
            $p = $persons[$i];
            $p->display();
        }

        foreach($persons as $i=>$p){
            $p->display();
        }
    ?>
</body>
</html>