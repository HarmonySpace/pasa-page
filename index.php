<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plugins</title>
</head>
<body>
<?php 
add_action('wp_footer', function()
{?> <script>alert("hellow world");</script><?php} ,9999); ?>
</body>
</html>
?>

<!--
name -> Pasa
description -> Muestra una aleta con javascript
version -> 1.0
by -> Neptune
-->