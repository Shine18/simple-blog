<?php

    $no_of_students = 0;

    class Student{
        private $first_name;
        private $last_name;
        private $student_id;

        static $no_of_students = 0;

        function __construct($f_name = "", $l_name = ""){
            $this->first_name = $f_name;
            $this->last_name = $l_name;

            $this->set_student_id(12);

            Student::$no_of_students++;
        }

        function display(){
            echo "Name: " . $this->first_name . " " . $this->last_name . " <br />";
        }

        
        function set_first_name($name){
            $this->first_name = $name;
        }
        function set_last_name($name){
            $this->last_name = $name;
        }
        private function set_student_id($id){
            $this->student_id = $id;
        }

        function get_first_name(){
            return $this->first_name;
        }
        function get_last_name(){
            return $this->last_name;
        }


        function get_student_id(){
            return $this->student_id;
        }
    }
?>

<?php 
    echo Student::$no_of_students;
    echo "<br />";
    
    $st1 = new Student("Ahmed","Ali");
    $no_of_students++;
    $st2 = new Student("Ahmed","Ali");
    $no_of_students++;

    echo Student::$no_of_students;
    echo "<br />";
    
    
    $st1->display();


    $st1->set_last_name("Hassan");
    // $st1->last_name = "Hassan";
    echo $st1->display();

    echo $st1->get_student_id();

    
    $st1 = new Student();
    $st2 = new Student();

    $st1->set_first_name("Ali");
    
?>