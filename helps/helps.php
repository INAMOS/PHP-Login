<?php

/**
 *  function for validate values and clean it
 * 
 * @param input $value
 * @return string
 * 
 */

function validateValue($value){

    $value=trim($value);
    $value=stripslashes($value);
    $value=htmlspecialchars($value);

    return $value;
}


?>