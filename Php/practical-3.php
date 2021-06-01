<!DOCTYPE html>
<html>
<body>

<?php

$inputArray = array (
  array(25,22,18),
  array(15,15,13)
);
array_multisort($inputArray[0], SORT_ASC, SORT_NUMERIC, 
                $inputArray[1], SORT_ASC, SORT_NUMERIC);

var_dump($inputArray);

?>
</body>
</html>