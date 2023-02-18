<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $arr = array_merge($nums1, $nums2);
        sort($arr);
        $count = count($arr);
        if($count % 2 == 0){
            return ($arr[($count / 2) -1] + $arr[$count / 2]) / 2;
        }

        if($count % 2 == 1){
            return $arr[$count / 2];
        }
    }
}

$arr1 = [1, 5, 7];
$arr2 = [2, 8];
$sol = new Solution();
$sol->findMedianSortedArrays($arr1, $arr2);
