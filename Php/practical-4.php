<html>
<body>

<?php

$inputArray = array ("0"=>"abc" , "1"=>"" , "2"=>"cde" , "3"=>null, "4"=>"abc");

$sortedArr = array_filter($inputArray);
$result = array_values($sortedArr);
print_r($result);
// output
// array("0" =>"abc", "1"=>"ced", "3"=>"abc");
?>
</body>
</html>