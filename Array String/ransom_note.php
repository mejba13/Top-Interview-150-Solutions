<?php

class Solution {
    function canConstruct($ransomNote, $magazine) {
        $letterCount = array_fill(0, 26, 0);

        for ($i = 0; $i < strlen($magazine); $i++) {
            $letterCount[ord($magazine[$i]) - ord('a')]++;
        }

        for ($i = 0; $i < strlen($ransomNote); $i++) {
            $index = ord($ransomNote[$i]) - ord('a');
            if ($letterCount[$index] == 0) {
                return false;
            }
            $letterCount[$index]--;
        }

        return true;
    }
}



$solution = new Solution();
echo $solution->canConstruct("a", "b") ? "true" : "false";
echo "<br>";
echo $solution->canConstruct("aa", "ab") ? "true" : "false";
echo "<br>";
echo $solution->canConstruct("aa", "aab") ? "true" : "false";