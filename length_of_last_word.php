<?php

class Solution {

    function lengthOfLastWord($s) {
        $s = trim($s);
        $words = explode(" ", $s);
        return strlen(end($words));
    }
}

$solution = new Solution();
echo $solution->lengthOfLastWord("Hello World");
echo $solution->lengthOfLastWord("   fly me   to   the moon  ");
echo $solution->lengthOfLastWord("luffy is still joyboy");
