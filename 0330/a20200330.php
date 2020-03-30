<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


define('MY_CONST',3000);
echo MY_CONST. '<br>';
echo PHP_VERSION. '<br>';
echo __DIR__. '<br>'; //所在資料夾
echo __FILE__. '<br>';
echo __LINE__. '<br>'; //除錯的（第幾行）

define("gi",72000);
echo gi. '<br>';

?>
</body>
</html>
