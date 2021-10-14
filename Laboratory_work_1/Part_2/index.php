<?php
    $x=$_GET['X'];
    $n=$_GET['N'];
    if(abs($x) > 1) {
        echo "ERROR";
    };
    if($n <= 0) {
        echo "ERROR";
    }
    $exponent = (pow(2.718, $x));
    $result = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result += (pow($x, $n))/Factorial($n);
    }

    $diff = $result - $exponent;

    function Factorial($number) {
        if($number <= 1) {
            return 1;
        } else return ($number * Factorial($number - 1));
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
    <form action='index.php' method="get">
        Input X (X = |X| < 1):<br>
        <input name="X"><br>
        Input N (N > 0):<br>
        <input name="N"><br><br>
        <button type="submit">Enter</button>
        <h1><?php echo "результат: $result"?></h1>
        <h1><?php echo "левая часть выражения: $exponent"?></h1>
        <h1><?php echo "разница: $diff"?></h1>
    </form>
</body>
</html>
