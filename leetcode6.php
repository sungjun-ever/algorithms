<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows <= 1 || strlen($s) <= $numRows) return $s;
        $ans = array_fill(0, $numRows, "");
        $n = strlen($s);
        $step = 2 * ($numRows - 1);
        for($i=0; $i<$n; $i++){
            $index = $i % $step;
            if($index < $numRows){
                $ans[$index] .= $s[$i];
            } else {
                $ans[$step - $index] .= $s[$i];
            }
        }
        return implode('', $ans);
    }
}

$s = "PAYPALISHIRING";
$numRows = 3;
$sol = new Solution();
$result = $sol->convert($s, $numRows);
print_r($result);
