<?php

class Solution {

    function removeDuplicates(&$nums) {

        $n = count($nums);
        if ($n <= 2) {
            return $n;
        }

        $i = 1;
        for ($j = 2; $j < $n; $j++) {
            if ($nums[$j] != $nums[$i - 1]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }

        return $i + 1;
    }
}


$nums = [1,1,1,2,2,3];
$solution = new Solution();
echo $solution->removeDuplicates($nums);
