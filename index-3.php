<?php
    function sum( $a , $b ){
        $a = 32;
        $sum = $a + $b;
        return $sum;
    }

    function makeHeading($text){
        return "<h1>$text</h1>";
    }
?>
<?php function outputHeading($text){ ?>
    <h1>
        <?php echo $text; ?>
    </h1>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templating</title>
</head>
<body>
    <?php 
    $i = 22;
    $j = 23;
    ?>
    <?php $output = sum($i,$j); ?>
    <h1>sum is <?php echo $output; ?></h1>
    <h2>i is <?php echo $i; ?></h2>

    <?php $h = makeHeading("Hello World"); ?>
    <?php echo $h; ?>

    <?php outputHeading("Hell"); ?>
    <?php outputHeading("Heldfl"); ?>


    <br>
    <br>
    <br>
    <h3>Arrays</h3>
    <?php 
    // $arr = array("Ali", "Umar", "Usama"); 
    $arr = ["Ali", "Umar", "Usama"]; 

    echo $arr[0];
    $arr[3] = "Usman";
    echo $arr[3];
    echo "<br />";
    $arr[4] = "Abbas";
    $arr[5] = "Suleman";


    $length = count($arr);
    echo "Size of array is $length";



    $index = 0;
    while($index < $length) {
        echo $arr[$index];
        $index++;
    }
    ?>

    <h2>Associative Array</h2>
    <?php
        // $data = array(
        //     "name" => "Aakash", 
        //     "age" => 22
        // );

        $data = [
            "name" => "Aakash", 
            "age" => 22
        ];
        $data["course"] = "PHP";
        $data["name"] = "Ali";
        echo $data["name"];
        echo "<br /> Age: " . $data["age"];
    ?>

    
    <?php 
    # Create a function which takes an array as a parameter and output its contents
    # in the following html
    ?>
    <table>
        <tr>
        <td>Ali</td>
        <td>Usman</td>
        <td>Umar</td>
        <td>Usama</td>
        </tr>
    </table>

</body>
</html>