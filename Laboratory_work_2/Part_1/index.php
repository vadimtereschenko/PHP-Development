<?php 
error_reporting(E_ERROR | E_PARSE);
$array = array(69,
               72,
               37,
               20,
               42,
               80,
               44,
               44,
               44,
               44,
               44,
               44,
               44,
               2,
               39,
               69,
               80,
               69,
               72,
               37,
               20,
               42,
               80,
               69,
               72,
               37,
               20,
               42,
               42,
               42,
               42,
               80,
               69,
               72,
               37,
               20,
               42,
               80,
               69,
               72,
               37,
               20,
               42,
               80,
               69,
               72,
               37,
               20,
               42,
               80);

$count = count($array);
$indexes = array();

foreach($array as $value) {
    echo $value, " ";
}

for ($i = 0; $i < $count; $i++) {
    $repeat = 1;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] == $array[$j]) {
            $repeat++;
            if ($repeat == 4) {
                echo "<br/>FINDED";
                $temp = $i;
                for ($k = 0; $k < 4; $k++) {
                    unset($array[$temp]);
                    $temp++;
               }
            }
        } else {
            break;
        }
    }
}

echo "<br/>";
foreach($indexes as $value) {
    echo $value, " ";
}

echo "<br/>";

foreach($array as $value) {
    echo $value, " ";
}
?>