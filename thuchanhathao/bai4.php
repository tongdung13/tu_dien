<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; chatset=utf-8" />
<head>
    <title>anh dung lam web</title>
<body>
<form method="post">
    <input type="text" name="nhap" placeholder="nhap so">
    <input type="submit" value="check">
    <?php
    $cars = array(1,3,4,6,2,9,7,5,8);
    $a = 1;
    $b = 2;
    if ($a == $_POST["nhap"]) {
        echo "<br><br> sum = " .array_sum($cars);
    }
    if ($b == $_POST["nhap"]) {
        sort($cars);
        foreach ($cars as $x) {
            echo "<br><br> $x <br>";
        }
    }

    ?>
</form>
</body>
</head>
</html>