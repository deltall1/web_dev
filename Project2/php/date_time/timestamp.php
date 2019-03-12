<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        $d=mktime(18, 16, 34, 6, 10, 2017);
        echo "Created date is " . date("Y-m-d H:i:sa", $d);
      ?>
</body>
</html>