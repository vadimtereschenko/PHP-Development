<?php
    $data = [];
    $file = fopen('Input.txt', 'r');
    while(!feof($file)) { // проходимся по всему файлу
        $str = fgets($file, 4096); // получаем строку из файла
        $data[] = mb_convert_encoding($str, "utf-8", "utf-8"); // записываем строку в массив изменяя кодировку
    }

    
    $group = trim($data[0]);
    $name = trim($data[1]);
    $birthdayWithString = $data[2];
    $birthdayWithClass = new DateTime($birthdayWithString);
    $neededDayWithString = $data[3];
    $dateForDayOfWeekWithString = $data[4];
    $dateForDayOfWeek = date($dateForDayOfWeekWithString);
    $interval = dateDifference($birthdayWithString, $neededDayWithString);
    $days = array(
        'воскресенье', 'понедельник', 'вторник', 'среда',
        'четверг', 'пятница', 'суббота'
    );

    function dateDifference($date_1, $date_2 , $differenceFormat = '%a' ) {
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);
        $interval = date_diff($datetime1, $datetime2);
        return $interval->format($differenceFormat);
    }
    
    $string = 'Я, студент группы ' . $group . ' ' . $name . ', родился ' . $birthdayWithClass->format('Y-m-d') . ', это был день ' . $days[(date('w', strtotime($dateForDayOfWeek)))] . '. До дней весеннего и осеннего равноденствий (22 марта и 22 сентярбя) осталось ' . $interval . ' полных суток.';
    $fileForSave = "Output.txt";
    file_put_contents($fileForSave, $string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
</style>
<body>
    <h1><?php echo($string); ?></h1>
</body>
</html>
