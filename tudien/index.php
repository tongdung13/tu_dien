<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        input[type = text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h1>Từ Điển Anh Việt</h1>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm">
    <input type="submit" id="submit" value="Tìm">
</form>
<?php
$dictionary = array(
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển sách",
    "computer" => "máy tính");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "Từ: " . $word . ".<br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }

    if ($flag == 0) {
        echo "không tìm thấy từ cần tìm";
    }
}
?>
</body>
</html>


