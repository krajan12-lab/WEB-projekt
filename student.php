<?php
//tady jsou predem zadane hodnoty
$jmeno = "Jan";
$primeni = "Kratochvile";
$trida = "2I";
$vyska = 1.80;
$student = true;
$jazyk = "HTML";

/*
tady jsou vypsane udaje
kazda na jinem radku
*/
echo "<h1>Můj studentský profil</h1>";
echo "<strong>Jmeno:</strong> $jmeno <br>";
echo "<strong>Primeni:</strong> $primeni <br>";
echo "<strong>Trida:</strong> $trida <br>";
echo "<strong>Vyska:</strong> $vyska <br>";
if ($student) {
    echo "<strong>Student:</strong> Ano <br>";
} else {
    echo "<strong>Student:</strong> Ne <br>";
}
echo "<strong>Oblibeny jazyk:</strong> $jazyk <br>";
echo "<br>";

// vypsane datove typy
echo "<h1>Datové typy</h1>";
echo var_dump($jmeno);
echo "<br>";
echo var_dump($primeni);
echo "<br>";
echo var_dump($trida);
echo "<br>";
echo var_dump($vyska);
echo "<br>";
echo var_dump($student);
echo "<br>";
echo var_dump($jazyk);
echo "<br>";

?>
