<?php function output_arr( $arr ){ ?>
    <table>
        <tr>
            <?php 
                $length = count( $arr );
                $counter = 0;
                while( $counter < $length ){ ?>
                    <td><?php echo $arr[$counter]; ?></td>
                    <?php
                    $counter++;
                }
            ?>
        </tr>
    </table>
<?php } ?>

<?php
function output_arr2( $arr ){
    echo "<table>";
    echo "<tr>";

    $length = count( $arr );

    for( $counter = 0; $counter < $length ; $counter++){
        echo "<td>";
        echo $arr[$counter];
        echo "</td>";
    }

    echo "</tr>";
    echo "</table>";
}
?>

<?php 
    function output_assoc_array($arr) {
        echo "<table>";

        foreach($arr as $key => $value ){
            echo "<tr>";
            echo "<th>$key</th>";
            echo "<td>$value</td>";
            echo "</tr>";
        }

        echo "</table>";
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
    <?php $arr1 = [2,3,4, "Usman", "Ali"]; ?>
    <?php $arr2 = ["Apple", "Mango", "Banana", "Grapes"]; ?>

    <?php output_arr($arr1); ?>
    <br><br>
    <?php output_arr2($arr2); ?>
    <hr>
    <h2>Associative Arrays</h2>
    
    <?php 
    $arr = [
        "name" => "Ali",
        "age" => 22,
        "qualification" => "Graduation",
        "status" => "Single",
        "marks" => [
            "english" => 78,
            "math" => 92,
            "urdu" => 44
        ],
        "data" => [2,3,5,6]
    ]; 

    // output_assoc_array($arr);

    var_dump($arr);

    ?>

    <hr>
    <?php 
        $arr = [
            [1,2,3,4,5],
            [5,6,7,8],
            [9,10,11,12],
            [9,10,11,12]
        ];

        for ($i = 0; $i < count($arr) ; $i++ ){
            $child_arr = $arr[$i];

            for ($j = 0 ; $j < count($child_arr); $j++ ){
                echo $child_arr[$j];
            }
            echo "<br/>";
        }
    ?>

   
    <?php 
        $c = 2.0;
        if( is_integer($c) ){
            echo "This is an integer";
        } else{
            echo "It's not an integer";
        }
        echo "<br />";
        $b = false;
        var_dump($arr1);

        // is_integer
        // is_array
        // is_bool
        // var_dump
    ?>


    <?php 
        // 1 - Make a function
        // 2 - Which takes a multidimensional array as a parametere
        // 3 - It loops through the array and prints its contents in the following html
        
    ?>
     <table>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
    </table>


</body>
</html>