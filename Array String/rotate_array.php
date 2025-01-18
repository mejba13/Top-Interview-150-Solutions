<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $n = count($nums);
        $k %= $n; // Handle cases where k > n
        $this->reverse($nums, 0, $n - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $n - 1);
    }

    private function reverse(&$nums, $start, $end) {
        while ($start < $end) {
            [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
            $start++;
            $end--;
        }
    }
}
