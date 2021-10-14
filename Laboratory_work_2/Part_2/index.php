<?php

$daysOfTheWeek = array();

$daysOfTheWeek['Monday'] = array(
    1 => "Physical Culture", 
    2 => "System Programing",
    3 => "Reengineering"                   
);

$daysOfTheWeek['Tuesday'] = array(
    1 => "Reengineering",
    2 => "Mobile Device Development",
    3 => "Software Engineering"
);

$daysOfTheWeek['Wednesday'] = array(
    2 => "Parallel Programing",
    3 => "Data Mining",
    4 => "Software Engineering"    
);

$daysOfTheWeek['Thursday'] = array(
    3 => "Mobile Device Development",
    4 => "System Programing"
);

$daysOfTheWeek['Friday'] = array(
    2 => "Parallel Programing",
    3 => "Administration Computer Networks"
);

foreach($daysOfTheWeek as $key => $value) {
    echo $key . "<br>";
    foreach($value as $sub_key => $sub_value) {
        echo $sub_key . " = " . $sub_value . "<br>";
    }
    echo "<br>";
}

?>