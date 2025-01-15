<?php

class Solution
{
    function maxProfit($prices) {
        $minPrice = PHP_INT_MAX; //9223372036854775807
        $maxProfit = 0;

        foreach ($prices as $price) {
            if ($price < $minPrice) {
                echo $minPrice = $price;
            } elseif ($price - $minPrice > $maxProfit) {
                $maxProfit = $price - $minPrice;
            }
        }
        return $maxProfit;
    }
}

$solution = new Solution();
$prices = [7,1,5,3,6,4];
$solution->maxProfit($prices);