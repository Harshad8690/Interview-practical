<!DOCTYPE html>
<html>
<body>

<?php

  class MyClass {
     function TestMethod(){
         echo "Function name: " . __FUNCTION__;

     }
 }
 $my_class = new MyClass;
 echo $my_class->TestMethod();
?>

</body>
</html>