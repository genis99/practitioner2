<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- 
        <?php
        foreach ($classe as $person) {
            echo "<li>$person</li>";
            // echo '<li>' . $person . </li>
        }
        ?> 
        -->
        <?php foreach ($classe as $person): ?>
            <li><?=$person ?> </li>
        <?php endforeach;  ?>
    </ul>
</body>
</html>