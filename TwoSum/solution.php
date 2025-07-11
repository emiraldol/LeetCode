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
        for ($i = 0; $i < count(($nums)); $i++) {
            for ($j = $i + 1; $j < count(($nums)); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
    }
}
