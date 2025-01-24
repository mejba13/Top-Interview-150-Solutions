<?php

class Solution {

    function isHappy($n) {
        $seen = [];
        while ($n != 1) {
            if (isset($seen[$n])) {
                return false;
            }
            $seen[$n] = true;
            $n = $this->sumOfSquares($n);
        }

        return true;
    }

    private function sumOfSquares($n) {
        $sum = 0;
        while ($n > 0) {
            $digit = $n % 10;
            $sum += $digit * $digit;
            $n = intdiv($n, 10);
        }
        return $sum;
    }
}

$solution = new Solution();
echo $solution->isHappy(19) ? "true" : "false";
echo "<br>";
echo $solution->isHappy(2) ? "true" : "false";
