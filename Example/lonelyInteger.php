<?php
/**
 * There are NN integers in an array AA. All but one integer occur in pairs. Your task is to find the number that
 * occurs only once.
 *
 * Input Format
 *
 * The first line of the input contains an integer NN, indicating the number of integers. The next line contains
 * NN space-separated integers that form the array AA.
 *
 * Constraints
 *
 * 1≤N<1001≤N<100
 * NN % 2=12=1 (NN is an odd number)
 * 0≤A[i]≤100,∀i∈[1,N]0≤A[i]≤100,∀i∈[1,N]
 * Output Format
 *
 * Output SS, the number that occurs only once.
 *
 * Sample Input:1
 *
 * 1
 * 1
 * Sample Output:1
 *
 * 1
 * Sample Input:2
 *
 * 3
 * 1 1 2
 * Sample Output:2
 *
 * 2
 * Sample Input:3
 *
 * 5
 * 0 0 1 2 1
 * Sample Output:3
 *
 * 2
 * Explanation
 *
 * In the first input, we see only one element (1) and that element is the answer.
 * In the second input, we see three elements; 1 occurs at two places and 2 only once. Thus, the answer is 2.
 * In the third input, we see five elements. 1 and 0 occur twice. The element that occurs only once is 2.
 * User: zhouxiuhu
 * Date: 4/6/16
 * Time: 11:12 PM
 */
function lonelyinteger( $a) {
    $len = count($a);
    $res = 0;
    for ($i=0; $i<$len; $i++){
        $res ^= $a[$i];
    }
    return $res;
}
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_a_cnt);
$_a = rtrim(fgets($__fp));
$_a = explode(' ',$_a);
$res = lonelyinteger($_a);
echo $res;

?>