
<form method="post" >
    <input type="text" name="nhap" value="<?php echo $_POST["nhap"]?>">
    <input type="submit" value="check">
</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stringInput = $_POST["nhap"];
        $array = explode (",", $stringInput);
        $min = $array[0];
        $vitri = 0;

        for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] < $min) {
                    $min = $array[$i];
                    $vitri = $i;
                }
            }


        echo "gia tri nho nhat la: $min <br> ";
        echo "nam o vi tri: $vitri";
  }


  