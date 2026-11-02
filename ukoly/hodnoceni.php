<?php
$studentName = "Jan Novák";
echo "<h1>$studentName</h1>";
$test1 = 75;
$test2 = 90;
$test3 = 60;

if ($test1 >= 0 && $test1 <= 100) {
    echo "Test 1: $test1";
} else {
    echo "neplatné bodové ohodnocení";
}
echo "<br>";

if ($test2 >= 0 && $test2 <= 100) {
    echo "Test 2: $test2";
} else {
    echo "neplatné bodové ohodnocení";
}
echo "<br>";

if ($test3 >= 0 && $test3 <= 100) {
    echo "Test 3: $test3";
} else {
    echo "neplatné bodové ohodnocení";
}
echo "<br>";

echo "<hr>";

if ($test1 >= 0 && $test1 <= 100 && $test2 >= 0 && $test2 <= 100 && $test3 >= 0 && $test3 <= 100) {
    $cel = $test1 + $test2 + $test3;
    echo "Celkový počet bodů: $cel / 300";
    echo "<br>";
    $prum = $cel / 3;
    echo "Průměrný počet bodů: $prum";
    echo "<br>";
    $usp = $cel * 100 / 300;
    echo "Uspěšnost: $usp%";
    echo "<br>";

    if ($usp >= 90 && $usp <= 100) {
        $grade = 1;
    } elseif ($usp >= 75 && $usp < 90) {
        $grade = 2;
    } elseif ($usp >= 60 && $usp < 75) {
        $grade = 3;
    } elseif ($usp >= 40 && $usp < 60) {
        $grade = 4;
    } elseif ($usp >= 0 && $usp < 40) {
        $grade = 5;
    } else {
        echo "neplatné bodové ohodnocení";
    }

    echo "<h2>Známka: $grade</h2>";
    echo "<br>";

    if ($grade == 1) {
        echo "výborný";
    } elseif ($grade == 2) {
        echo "chvalitebný";
    } elseif ($grade == 3) {
        echo "dobrý";
    } elseif ($grade == 4) {
        echo "dostatečný";
    } elseif ($grade == 5) {
        echo "nedostatečný";
    } else {
        echo "neplatné bodové ohodnocení";
    }

    echo "<br>";

    if ($grade >= 1 && $grade <= 4) {
        echo "student prospěl";
    } elseif ($grade == 5) {
        echo "<a>Bonusové úkoly</a>";
    }
} else {
    echo "nelze se zadanými daty pracovat";
}