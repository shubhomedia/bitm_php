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

                echo $obj->getProperty(); // Get the property value

                $obj->setProperty("I'm a new property value!"); // Set a new one

                echo $obj->getProperty(); // Read it out again to show the change
        
        ?>
    </body>
</html>
