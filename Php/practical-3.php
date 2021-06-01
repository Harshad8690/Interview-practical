<!DOCTYPE html>
<html>
<body>

<?php

$cars = array (
  array(25,22,18),
  array(15,15,13)
);
array_multisort($cars[0], SORT_ASC, SORT_NUMERIC, 
                $cars[1], SORT_ASC, SORT_NUMERIC);

var_dump($cars);

?>
</body>
</html>