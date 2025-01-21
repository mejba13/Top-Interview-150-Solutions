<?php

class Solution {

    function jump($nums) {

        $jumps = 0;
        $currentEnd = 0;
        $farthest = 0;

        for ($i = 0; $i < count($nums) - 1; $i++) {
            $farthest = max($farthest, $i + $nums[$i]);

            if ($i == $currentEnd) {
                $jumps++;
                $currentEnd = $farthest;

                if ($currentEnd >= count($nums) - 1) {
                    break;
                }
            }
        }

        return $jumps;

    }
}

$nums = [2,3,1,1,4];
$solution = new Solution();
echo $solution->jump($nums);
