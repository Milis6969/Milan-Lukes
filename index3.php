<?php

require 'tracy/tracy.phar';
use Tracy\Debugger;

Debugger::enable();
Debugger::$strictMode = true;
Debugger::$maxDepth = 9;
Debugger::$maxLength = 170;
$a = 7;
$b = 11;

print "číslo první = <b>$a</b> <br>";                   //první číslo
print "číslo druhé = <b>$b</b> <br>";                   // druhé číslo

echo " title='obrazekMimina.jpg' alt='Obrazek' width='1080'/>";           //obrázek
echo "<br>\<br>";


print "<br>Sčítání = ";                                                           // sčítání
echo $a + $b;
dump($a + $b);


print "<br>Odčítání = ";                                                          // odčítání
echo $a - $b;
dump($a - $b);


print "<br>Dělení = ";                                                            // dělení
echo $a / $b;
dump($a / $b);


print "<br>Násobení = ";                                                         // násobení
echo $a * $b;
dump($a * $b);


print "<br> ";
echo $a++;
dump($a++);

print "<br> ";
echo $a--;
dump($a--);

print "<br> ";
echo $a += $b;
dump($a += $b);

print "<br>";
echo $a -= $b;
dump($a -= $b);

print "<br>";
echo $a *= $b;
dump($a *= $b);

print "<br>";
echo $a /= $b;
dump($a /= $b);

print "<br>Má $a jinou hodnotu než $b?<br>";
dump($a != $b);

print "<br>  Čísla se rovnají?";                                                  // porovnání čísel
echo $a == $b;
dump($a == $b);

print "<br>Je $a větší než $b?<br>";                                             // porovnání hodnot
dump($a > $b);

print "<br>Je $b větší než $a?<br>";                                             // porovnání hodnot
dump($a < $b);

echo 4 . 12;
echo 3.6;

echo "más" . "lo";
echo "kobe" . "rec";

$milanLukes1 = 1;
$milanLukes2 = 1;

if ($milanLukes1 == $milanLukes2) {
    echo "Milan Lukeš <br>";
}
if ($milanLukes1 > $milanLukes2) {
    echo "Milis<br>";
} else {
    echo "Lukeš<br>";
}
if ($milanLukes1 >= $milanLukes2) {
    echo "Kuba<br>";
    if ($milanLukes1 == $milanLukes2) {
        echo "Lukeš<br>";
    }
}
switch ($milanLukes1) {
    case 0:
        break;
    case 1:
        echo "souhlasím <br>";
        break;
    case 2:
        break;
    case 3:
        break;
    case 4:
        break;
    case 5:
        break;
    default:
        break;
}

$seznam = array(1 => "oblečení",
    2 => "tričko",
    3 => "ponožky",
    4 => "kraťasy",
    5 => "kalhoty",
    6 => "mikina",
    7 => "svetr",
    8 => "čepice",
    9 => "kalhotky",
    10 => "bunda");
dump($seznam);
print "<br>Je $b vetsi císlo nez $a?<br>";
dump($a < $b);


//Spojeni retezcu

echo "slu" . "ní" . "čko";

echo "<br>";

echo "slad" . "kost";

echo "<br>";

echo 6 . 8;

echo 4.8;


//Aritmeticke operatory
print "<br>Nasobek = ";
echo $a * $b;
dump($a * $b);


print "<br>Delitel = ";
echo $a / $b;
dump($a / $b);

print "<br>Odcitani = ";
echo $a - $b;
dump($a - $b);


print "<br>Scitani = ";
echo $a + $b;
dump($a + $b);

//ukol 2

//proměnné
$milanLukes1 = 4; //prvni znamka na moodlu
$milanLukes2 = 1; //druha znamka na moodlu

//jednoduchá podmínka
if (true) {
    echo "Milan Lukeš<br>";
}

//podmínka pomocí else
if ($milanLukes1 > $milanLukes2) {
    echo "Milan<br>";
} else {
    echo "Lukeš<br>";
}

//vnořená podmínka
if ($milanLukes1 >= $milanLukes2) {
    echo "Milan<br>";
    if ($milanLukes1 == $milanLukes2) {
        echo "Lukeš<br>";
    }
}

//switche
switch ($milanLukes1) {
    case 0:
        break;
    case 1:
        echo "dobrá známka";
        break;
    case 2:
        break;
    case 3:
        break;
    case 4:
        echo "špatná známka";
        break;
    case 5:
        break;
    default:
        break;
}


$televize = array(
    "1. úroveň" => array(
        "2. úroveň" => array(
            "3. úroveň" =>
                array('značka' => 'Samsung',
                    'úhlopříčka' => '110cm',
                    'rozlišení' => '4K',
                    'reproduktory' => true,
                    'cena' => 32000),
            array('značka' => 'LG',
                'úhlopříčka' => '100cm',
                'rozlišení' => 'Ultra HD',
                'reproduktory' => false,
                'cena' => 19000),
            array('značka' => 'Phillips',
                'úhlopříčka' => '115cm',
                'rozlišení' => 'HD',
                'reproduktory' => true,
                'cena' => 14000),
            array('značka' => 'Sencor',
                'úhlopříčka' => '90cm',
                'rozlišení' => 'HD',
                'reproduktory' => false,
                'cena' => 10000),
            array('značka' => 'Thomson',
                'úhlopříčka' => '120cm',
                'rozlišení' => 'Ultra HD',
                'reproduktory' => false,
                'cena' => 9000),
            array('značka' => 'Sony',
                'úhlopříčka' => '100cm',
                'rozlišení' => 'Ultra HD',
                'reproduktory' => true,
                'cena' => 10000),
            array('značka' => 'Panasonic',
                'úhlopříčka' => '115cm',
                'rozlišení' => '4K',
                'reproduktory' => true,
                'cena' => 12000),
            array('značka' => 'Hisense',
                'úhlopříčka' => '90cm',
                'rozlišení' => 'HD',
                'reproduktory' => false,
                'cena' => 5000),
            array('značka' => 'Sharp',
                'úhlopříčka' => '130cm',
                'rozlišení' => '4K',
                'reproduktory' => true,
                'cena' => 19000),
            array('značka' => 'TCL',
                'úhlopříčka' => '90cm',
                'rozlišení' => 'Ultra HD',
                'reproduktory' => false,
                'cena' => 6000),
        )
    )
);

dump($televize);

?>


)
)
);
dump $televize);
var_dump($televize['1. úroveň']);
echo "<br>";
function isvalid(array $param1, string $param2)
{
foreach ($param1 as $value) {
if (strpos($param2, $value)) {
return true;
}
}
return false;
}

$Elektroobchod = array("televize", "ledničky");
$veta = "Tenhle týden Black Friday";
var_dump(isvalid($Elektroobchod, $veta));
