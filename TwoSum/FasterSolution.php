<?php

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum(array $nums, $target)
    {
        $hashmap = array();
        for ($i = 0; $i < count($nums); $i++) {
            $remain = $target - $nums[$i];
            if (array_key_exists($remain, $hashmap)) {
                $index_0 = $hashmap[$remain];
                $index_1 = $i;

                return array($index_0, $index_1);
            }
            $hashmap[$nums[$i]] = $i;
        }
    }
}


$test = new Solution();
$array = array(3, 3);
$wow = $test->twoSum($array, 6);
print_r($wow);
