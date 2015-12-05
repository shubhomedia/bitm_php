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
            class  Books{
                /* Member variables */
                var $price;
                var $title;

                /* Member functions */
                function setPrice($par){
                   $this->price = $par;
                }

                function getPrice(){
                   echo $this->price ."<br/>";
                }

                function setTitle($par){
                   $this->title = $par;
                }

                function getTitle(){
                   echo $this->title ." <br/>";
                }
             }
            $physics = new Books;
            $maths = new Books;
            $chemistry = new Books;
        ?>
    </body>
</html>
