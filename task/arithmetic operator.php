<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: lightgray;
            padding: 20px;
        }
        .box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            margin: auto;
            box-shadow: 0 0 5px gray;
        }
        h2 {
            text-align: center;
            color: navy;
        }
        p {
            margin: 8px 0;
            color: black;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Arithmetic Operations</h2>

        <?php
        $num1=10;
        $num2=30;

        $add=$num1+$num2;
        $diff=$num1-$num2;
        $mul=$num1*$num2;
        $div=$num1/$num2;

        echo "<p>Addition: $add</p>";
        echo "<p>Subtraction: $diff</p>";
        echo "<p>Multiplication: $mul</p>";
        echo "<p>Division: $div</p>";
        ?>
    </div>
</body>
</html>
