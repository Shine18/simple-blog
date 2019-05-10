<?php include("person.php"); ?>

<?php 
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

foreach($persons as $key=>$person){
    # $person->display();
}
?>


<?php 
    function display_data($data){
        extract($data);
        echo "<h4>$name</h4>";
        echo "<h4>$age</h4>";
        echo "<h4>$class</h4>";
    }


    $data = [
        "name" => "Aakash",
        "age" => 18,
        "class" => "matric"
    ];
    # display_data($data);

    $data = [
        "name" => "Suleman",
        "age" => 22,
        "class" => "matric"
    ];
     # display_data($data);

    

?>

<?php 
    $name = ""; 
    if ( empty($name) ){
        echo "Name is empty";
    } else {
        echo "You're good";
    }
?>