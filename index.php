<?php
header("Content-type: text/html; charset=utf-8");

$background = "background.png";
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Trang có nền</title>
    <style>
        body { 
            background: url('$background') no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Nội dung trang web -->
</body>
</html>
HTML;
?>