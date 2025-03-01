<?php
class Solution {

    function productExceptSelf($nums) {
        $n = count($nums);
        $output = array_fill(0, $n, 1);

        $prefix = 1;
        for ($i = 0; $i < $n; $i++) {
            $output[$i] = $prefix;
            $prefix *= $nums[$i];
        }

        $suffix = 1;
        for ($i = $n - 1; $i >= 0; $i--) {
            $output[$i] *= $suffix;
            $suffix *= $nums[$i];
        }

        return $output;
    }
}

$solution = new Solution();
print_r($solution->productExceptSelf([1,2,3,4]));
print_r($solution->productExceptSelf([-1,1,0,-3,3];
