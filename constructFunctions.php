<?php
//permutation for testing every possible combination to achieve needle
private function permutationSearch($delimiter, $needle, $haystack)
{
    $bits = explode($delimiter, $haystack);
    $elements = sizeof($bits);
    $iterations = pow(2, $elements);

    //init position
    for($i = 0;$i < $iterations;$i++)
    {
        $string = "";

        $binary = decbin($i);
        $binaryMirror = strrev($binary);

        $choices = str_split($binaryMirror);
        $possibleChoices = sizeof($choices);
        for($z = 0;$z < $possibleChoices;$z++)
        {
            if($choices[$z] == "1")
            {
                $string .= $bits[$z] . $delimiter;
            }
        }

        $string = rtrim($string, $delimiter);

        if($string == $needle)
        {
            return true;
        }
    }

    return false;
}
?>
