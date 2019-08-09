<?php
    class Person{
        var $name;
        var $age;
        var $dob;

        function __construct($name,$age,$dob){
            $this->name = $name;
            $this->age = $age;
            $this->dob = $dob;
            
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


$p1 = new Person("Usman", 21, "12-10-1992");
$p2 = new Person("Ali", 12, "05-06-2001");

$p1->set_name("Suleman");

var_dump($p1);
echo "<br />";
var_dump($p2);
?>
