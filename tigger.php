<?php



/*
It seems reasonable to expect only one Tigger object (after all, he is the only one!),
 But the current implementation allows you to have multiple different Tigger objects:

Refactor the Tigger class into a Singleton considering the following points:

Define the getInstance () method with no arguments. This function is responsible 
for creating an instance of the Tigger class only once and returning that single
 instance each time it is called.

Prints Tigger Roar multiple times on screen.

Adds a getCounter () method that returns the number of times Tigger roared.
--------------------------------------------------------------------------------------------------------
*/

class Tigger {

private $counter = 0;
private static $instance;

private function __construct() {
   
        echo "Building character...<br />";
}


public function roar() {
        global $counter; 
        $counter++;
        echo "<br />Grrr!<br />";
}


public static function getInstance() {

    if (!isset(self::$instance)) {

        self::$instance = new Tigger();
    }

return self::$instance;

}

public function getCounter() {

global $counter; 
echo $counter;
echo "<br />";

}

}