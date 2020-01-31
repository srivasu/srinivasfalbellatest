<?php
/*
For unit tests execute the next command:
/vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unitTests
*/

class Test {
   
    var $init = 1;
    var $end = 100;

    function makeTest() {
       
        $pivots = array('15'=>'Linianos', '5'=>'IT', '3'=>'Linio');
        for ($i=$this->init; $i<=$this->end; $i++) {
            echo $this->checkNumber($i, $pivots);
        }
        //return true;
    }

    function checkNumber($number, $pivots) {
        foreach ($pivots AS $key => $value) {
            if ($number%$key == 0) {
                return $value."<br>";
            }
        }
        return $number."<br>";
    }

    function getInit() {
        return $this->init;
    }

    function getEnd() {
        return $this->end;
    }

    function setInit($init) {
        $this->init =  $init;
    }

    function setEnd($end) {
        $this->end = $end;
    }
}

$test = new Test();
$test->setInit(1);
$test->setEnd(100);
echo $test->makeTest();