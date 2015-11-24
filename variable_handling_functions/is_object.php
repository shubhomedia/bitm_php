<!DOCTYPE html>

<!--
    MD.OWES QURUNY SHUBHO
    http://shubho.info
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // Declare a simple function to return an 
            // array from our object
            function get_students($obj)
            {
                if (!is_object($obj)) {
                    return false;
                }

                return $obj->students;
            }

            // Declare a new class instance and fill up 
            // some values
            $obj = new stdClass();
            $obj->students = array('Kalle', 'Ross', 'Felipe');

            var_dump(get_students(null));
            echo "</br>";
            var_dump(get_students($obj));
        ?>
    </body>
</html>
