<?php

require_once ("tigger.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIGGER SINGLETON</title>
</head>
<body>



<?php

$tigger_1 = Tigger::getInstance();

$tigger_1->roar();

$tigger_1->getCounter();

$tigger_2 = Tigger::getInstance();

$tigger_2->roar();

$tigger_2->getCounter();

$tigger_3 = Tigger::getInstance();

$tigger_3->roar();

$tigger_3->getCounter();


?>




</body>
</html>