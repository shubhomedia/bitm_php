<!DOCTYPE html>
<!--
    MD.Owes Quruny Shubho
    http://shubho.info
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class MyClass
            {
              public $prop1 = "I'm a class property!";

              public function setProperty($newval)
              {
                  $this->prop1 = $newval;
              }

              public function getProperty()
              {
                  return $this->prop1 . "<br />";
              }
            }

            $obj = new MyClass;

            echo $obj->prop1;
        ?>
    </body>
</html>
