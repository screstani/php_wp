<?php 
    function is_palindrome($string) {
        $string = str_replace(' ', '', strtolower($string));
        echo $string;
        return $string == strrev($string);
    }

    var_dump( is_palindrome("Race Car"));
    var_dump( is_palindrome("aM amA"));    
    var_dump( is_palindrome("bab bnans"));
?>