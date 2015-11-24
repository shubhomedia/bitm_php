<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            trait Shareable{
            public function  share(){
            return "The name of the trait is: ".__TRAIT__;
            }
            }
            class post{
                use Shareable;
            }
            $post =new post;
            echo $post->share();
        ?>
    </body>
</html>
