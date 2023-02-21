<?php 
    // function is_bigger($num1, $num2) {
    //     if($num1 > $num2) {
    //         return $num1;
    //     } elseif ($num2 > $num1) {
    //         return $num2;
    //     } else {
    //         return "Os números são iguais.";
    //     }
    // }

    function is_bigger($n1, $n2) {
        if($n1 >= $n2) {
            return $n1;
        } else {
            return $n2;
        }
    }

    var_dump( is_bigger(2,1));
    var_dump( is_bigger(2,7));
    var_dump( is_bigger(4,4));

?>