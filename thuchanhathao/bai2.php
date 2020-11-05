<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; chatset=utf-8" />
<head>
<body>
<form method="post">
    <input type="text" name="nhapsonguyen" placeholder="nhap so nguyen">
    <input type="submit" value="check">
</form>
    <?php
    $sum = 0;
    for ($i = 0; $i <= 100; $i++) {
        if ($sum + $i > 100) break;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nhapsonguyen = $_POST["nhapsonguyen"];
            if ($nhapsonguyen <= "100") {
                 $sum += $i;
            }
            echo $sum;
        }
    }
    ?>

</body>
</head>
</html>
