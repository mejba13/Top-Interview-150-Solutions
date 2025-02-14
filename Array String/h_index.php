<?php

class Solution {

    function hIndex($citations)
    {
        rsort($citations);
        $h = 0;

        for($i = 0; $i < count($citations); $i++){
            if($citations[$i] >= $i+1){
                $h = $i + 1;
            }else{
                break;
            }
        }

        return $h;

    }
}

$citations = [3,0,6,1,5];
$solution = new Solution();
echo $solution->hIndex($citations);