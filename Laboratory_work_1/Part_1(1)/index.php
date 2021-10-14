<?php
    $group = "ИС-18б ";
    $name = "Терещенко В.О. ";
    $birthdayWithClass = new DateTime('2000-01-07');
    $birthdayWithString = "2000-01-07";
    $neededDayWithString = "2000-09-22";
    $dateForDayOfWeek = date('07.01.2000 00:00');
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
    <h1>Я, студент группы <?php echo "$group $name"?>, родился <?php echo $birthdayWithClass->format('Y-m-d');?>, это был день <?php echo $days[(date('w', strtotime($dateForDayOfWeek)))];?>. До дней весеннего и осеннего равноденствий (22 марта и 22 сентярбя) осталось <?php echo "$interval"?> полных суток.</h1>
</body>
</html>
