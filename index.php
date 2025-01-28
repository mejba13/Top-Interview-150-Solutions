<?php


class solution {

    function ispalindrome($x) {

        if ($x < 0) {
            return false;
        }

        $original = $x;
        $reversed = 0;

        while ($x > 0) {
            $lastDigit = $x % 10;
            $reversed = $reversed *10 + $lastDigit;
           echo  $x = intval($x / 10);
        }

        return $original === $reversed;
    }

}

$x = 121;
$solution = new solution();
echo $solution->ispalindrome($x) ? "true" : "false";

echo "<br>";

$x = 123;
$solution = new solution();
echo $solution->ispalindrome($x) ? "true" : "false";