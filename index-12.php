<?php 
    $a = "Hello world";
    // echo $a;

    // unset($a);
    // echo $a;

    $names = "Aakash Suleman Arslan";
    $names_arr = explode(" ",$names); // String To Array Conversion
    var_dump($names_arr);

    $new_arr = ["Apple", "Mango", 2,34];
    $names_str = implode("", $new_arr);
    var_dump($names_str);

    $str = "This is a code file ";
    // $str[4] = ",";
    // echo $str;

    $new_str = str_replace("code","text", $str);
    echo "<br />";
    echo $new_str;
    echo "<br />";
    echo $str;

    echo "<br />";
    echo strlen($new_str);

    
?>
<hr>
<?php 
    $names = " Aak ash ";
    $new_name = trim($names);
    var_dump($new_name);

    $data = [
        "name" => "Ali",
        "age" => 12,
        "dob" => null
    ];
    $exists = array_key_exists("asdfas",$data);
    var_dump($exists);
?>