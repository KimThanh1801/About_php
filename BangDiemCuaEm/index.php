<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <?php
    error_reporting(0);
    function Function1($hk1, $hk2, $year)
    {
        $result = 0;
        if ($year == 1) {
            $result = ($hk1 + $hk2 * 2) / 3;
        } else {
            $result = ($hk1 * 2 + $hk2 * 2) / 4;
        }
        return $result;
    }
    $hock1 = $_POST["hk1"];
    $hock2 = $_POST["hk2"];
    $yearhocky = $_POST["year"];
    $sum = Function1($hock1, $hock2, $yearhocky);
    $sum = round($sum, 2);
//Xét học sinh gì
    if (!$sum ){
        $classification = '';
    }
    else if ($sum >= 9) {
        $classification = 'Excellent Student';
        $color = 'red';
    } elseif ($sum >= 7 && $sum < 9) {
        $classification = 'Good Student';
        $color = 'yellow';
    } else {
        $classification = 'Bad Student';
        $color = 'green';
    }
    ?>
    <form action="" method="POST" class= "container">
        <h1>BẢNG ĐIỂM CỦA EM</h1>
        <div class="form">
            <label for="">Semester 1:</label>
            <input type="number" id="hk1" name="hk1">
        </div>
        <div class="form">
            <label for="">Semester 2:</label>
            <input type="number" id="hk2" name="hk2">
        </div>
        <div class="years">
            <label for="">Year: </label>
            <select name="year" id="year">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
        <div class="form">
            <label for="">Sum: </label>
            <input type="number" value="<?php echo $sum; ?>" readonly>
        </div>
        <div class="form">
            <label for="">Classification: </label>
            <span
                style="color: <?php echo $color; ?>; font-size: 24px; margin: 24px;"><?php echo $classification; ?></span>
        </div>
        <div class="item-button">
            <button type="submit">Ok</button>
        </div>
    </form>
</body>
</html>