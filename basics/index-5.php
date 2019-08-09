<?php 
    $arr = [ # i
        [  # $a
            [1,2,3], # $b
            [4,5,6], # $b
            [7,8,9] # $b
        ],
        [ # $a
            ['a','b','c'], # $b
            ['d','e', 'f'], # $b
            ['g', 'h', 'i'] # $b
        ],
        [ # $a
            [1,2,3], # $b
            [4,5,6], # $b
            [7,8,9] # $b
        ]
    ];

    foreach($arr as $i => $a ){
        foreach($a as $j => $b ){
            foreach( $b as $k => $c ){
                echo $c ;
                echo "<br />";
            }
        }
    }
    
    $i = 0;
    $length = count($arr);
    while($i < $length){
        $a = $arr[$i];

        $i++;
    }
    
    for( $i = 0; $i < count($arr); $i++ ){
        $a = $arr[$i];

        for( $j = 0; $j < count($a); $j++){
            $b = $a[$j];

            for( $k = 0; $k < count($b); $k++ ){
                $c = $b[$k];
                echo $c;
                echo "<br />";
            }
        }
    }
?>