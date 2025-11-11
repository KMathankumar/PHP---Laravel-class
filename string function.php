<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP String Functions</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: lightgray;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container {
    width: 60%;
    background-color: white;
    box-shadow: 0 0 10px gray;
    border-radius: 8px;
    padding: 20px 30px;
    margin-top: 10px;
}
h2 {
    text-align: center;
    color: darkblue;
    margin-bottom: 20px;
}
.section {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 10px 15px;
    margin-bottom: 15px;
    border-radius: 5px;
}
.section h3 {
    color: royalblue;
    margin-top: 0;
}
.output {
    background-color: #eee;
    padding: 8px;
    border-radius: 4px;
    font-family: monospace;
}
</style>
</head>
<body>

<div class="container" style="margin-top: 30px;">
    <h2 >PHP String Functions</h2>

    <div class="section">
        <h3>1️⃣ String Length</h3>
        <div class="output">
            <?php
            $x = "Example for string length";
            echo "String: $x<br>";
            echo "Length: " . strlen($x) . "<br>";
            echo "Direct string length: " . strlen("direct string");
            ?>
        </div>
    </div>

    <div class="section">
        <h3>2️⃣ String Replace</h3>
        <div class="output">
            <?php
            $x = "Mathan";
            echo str_replace("world", "Universe", "Hello world") . "<br>";
            echo str_replace("an", "an kumar ", $x) . "<br>";
            echo "Original: " . $x;
            ?>
        </div>
    </div>

    <div class="section">
        <h3>3️⃣ Uppercase & Lowercase</h3>
        <div class="output">
            <?php
            $y = "PHP session";
            echo "Uppercase: " . strtoupper($y) . "<br>";
            echo "Lowercase: " . strtolower($y);
            ?>
        </div>
    </div>

    <div class="section">
        <h3>4️⃣ Reverse String</h3>
        <div class="output">
            <?php
            echo strrev($y);
            ?>
        </div>
    </div>

    <div class="section">
        <h3>5️⃣ Concatenation</h3>
        <div class="output">
            <?php
            $a = "php";
            $b = "class";
            echo $a . $b;
            ?>
        </div>
    </div>

    <div class="section">
        <h3>6️⃣ Explode (Split Words)</h3>
        <div class="output">
            <?php
            $z = explode(" ", $y);
            print_r($z);
            ?>
        </div>
    </div>

</div>

</body>

</html>
