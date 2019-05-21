<?php
$arr = array(100,40,2,5,17,50,4);
$min = $arr[0];
$max = $arr[0];
foreach($arr as $key => $val){
if($min > $val){
$min = $val;
}
elseif($max < $val){
    $max = val;
}
}
echo "This is value min of array ". $min ."<br>" ;
echo "This is value max of array ". $max;
?>
