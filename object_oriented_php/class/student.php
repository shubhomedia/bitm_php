<?php

/*
 *     MD.Owes Quruny Shubho
 *     http://shubho.info
 */

/**
 * Description of student
 *
 * @author Shubho
 */
class student {
                public $name    ="";
                public $roll    ="";
                public $level   ="";
                public $country ="";
                public $pass    ="";
                
                public function studentCome(){
                    echo"Students are comming in School";
                    echo $this->name;
                }
                public function __construct(){
                    echo $this->name;
                    echo"new Students are admited";
                    echo"<br>";
                    echo"Hello";
                }
            }
