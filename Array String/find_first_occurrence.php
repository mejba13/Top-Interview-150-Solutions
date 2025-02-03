<?php
class Solution {

    function strStr($haystack, $needle) {
        $pos = strpos($haystack, $needle);
        return ($pos !== false) ? $pos : -1;
    }
}

$solution = new Solution();
echo $solution->strStr("sadbutsad", "sad") . "\n";
echo $solution->strStr("leetcode", "leeto") . "\n";
echo $solution->strStr("hello", "ll") . "\n";
