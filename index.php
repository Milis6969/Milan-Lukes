<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;
Debugger::$maxDepth = 4;
Debugger::$maxLength = 180;

//Obrazek

echo '<img src="mimino.jpg" title="obrazek" alt="obrazek" width="250"/><br>';
echo '\\';

//Typy proměnných

$a = 4;
$b = 8;

print "<br> ";
echo $a += $b;
dump($a+=$b);


print "<br> ";
echo $a++;
dump($a++);


print "<br> ";
echo $a--;
dump($a--);


print "<br>";
echo $a *= $b;
dump($a*=$b);


print "<br>";
echo $a -= $b;
dump($a-=$b);


print "<br>";
echo $a /= $b;
dump($a/=$b);


print "<br>Je $a vetsi hodnota nez $b?<br>";
dump($a>$b);


print "<br>Je $a jina hodnota nez $b?<br>";
dump($a!=$b);


print "<br> Rovna se?";
echo $a==$b;
dump($a==$b);


print "<br>Je $b vetsi císlo nez $a?<br>";
dump($a<$b);


//Spojeni retezcu

echo "mas"."li"."cko";

echo "<br>";

echo "jak" . "ost";

echo "<br>";

echo 6 . 8;

echo 4.8;


//Aritmeticke operatory
print "<br>Nasobek = ";
echo $a*$b;
dump($a*$b);


print "<br>Delitel = ";
echo $a/$b;
dump($a/$b);

print "<br>Odcitani = ";
echo $a-$b;
dump($a-$b);


print "<br>Scitani = ";
echo $a+$b;
dump($a+$b);

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
    echo"Lukeš<br>";
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
        echo"dobrá známka";
    break;
        case 2:
    break;
        case 3:
    break;
        case 4:
        echo"špatná známka";
    break;
        case 5:
    break;
        default:
    break;
}

//jednoduché pole
$tym = array(1 =>"jágr", 2 =>"plekanec", 3 =>"voráček", 4 =>"hašek", 5 =>"kempný",
             6 =>"pavelec", 7 =>"zdeněk troška", 8 =>"Zohan", 9 =>"Zohana máma", 10 =>"A já");
dump($tym);

//velké vnořené pole
$televize = array(
    "1. úroveň" => array(
        "2. úroveň" => array(
            "3. úroveň" =>
            array('značka' => 'Samsung',
                'úhlopříčka' => '110cm',
                'rozlišení' => '4K',
                'reproduktory' => true,
                'cena' => 32000 ),
            array('značka' => 'LG',
                'úhlopříčka' => '100cm',
                'rozlišení' => 'Ultra HD',
                'reproduktory' => false,
                'cena' => 19000 ),
            array('značka' => 'Phillips',
                'úhlopříčka' => '115cm',
                'rozlišení' => 'HD',
                'reproduktory' => true,
                'cena' => 14000 ),
            array('značka' => 'Sencor',
                'úhlopříčka' => '90cm',
                'rozlišení' => 'HD',
                'reproduktory' => false,
                'cena' => 10000 ),
            array('značka' => 'Thomson',
                'úhlopříčka' => '120cm',
                'rozlišení' => 'Ultra HD',
                'reproduktory' => false,
                'cena' => 9000 ),
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