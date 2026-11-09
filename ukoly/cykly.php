<h1>Úkol A</h1>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo "<br>";
}
?>

<h1>Úkol B</h1>
<?php
for ($i = 2; $i <= 10; $i += 2) {
    echo $i;
    echo "<br>";
}

echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i;
        echo "<br>";
    }
}
?>

<h1>Úkol C</h1>
<?php
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    echo ($i*$number);
    echo "<br>";
}
?>

<h1>Úkol D</h1>
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    echo "$sum + $i  = ";
    $sum += $i;
    echo $sum;
    echo "<br>";
}
?>