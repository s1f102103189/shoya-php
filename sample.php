<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        $sum = 0;
        for ($i=3; $i<5; $i++) {
            $sum += $numbers[$i];
        }
        echo $sum;
    ?>
</body>
</html>