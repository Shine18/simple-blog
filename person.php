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