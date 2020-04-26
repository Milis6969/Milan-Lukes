<?php

//Obrazek

echo '<img src="clasico.png" alt="obrazek" />';


//Typy proměnných

$a = 4;

$b = 8;


print "<br> ";

echo $a += $b;

var_dump($a+=$b);


print "<br> ";

echo $a++;

var_dump($a++);


print "<br> ";

echo $a--;

var_dump($a--);


print "<br>";

echo $a *= $b;

var_dump($a*=$b);


print "<br>";

echo $a -= $b;

var_dump($a-=$b);


print "<br>";

echo $a /= $b;

var_dump($a/=$b);


print "<br>Je $a vetsi hodnota nez $b?<br>";

var_dump($a>$b);


print "<br>Je $a jina hodnota nez $b?<br>";

var_dump($a!=$b);


print "<br> Rovna se?";

echo $a==$b;

var_dump($a==$b);


print "<br>Je $b vetsi císlo nez $a?<br>";

var_dump($a<$b);


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

var_dump($a*$b);


print "<br>Delitel = ";

echo $a/$b;

var_dump($a/$b);

?>


print "<br>Odcitani = ";

echo $a-$b;

var_dump($a-$b);


print "<br>Scitani = ";

echo $a+$b;

var_dump($a+$b);


?>
</body>