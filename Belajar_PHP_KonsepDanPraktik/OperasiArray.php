<?php 
$buah = [
    "apel", 
    "jeruk", 
    "mangga", 
    "pisang",
    "tomat"
];
array_push($buah, "kiwi");
// array_pop($buah);
echo count($buah);

echo "<br>";
print_r($buah);

echo "<br>" .implode(", ", $buah);
echo "<br>" .array_search("apel", $buah); 

$sayur = [
    "bayam",
    "kangkung",
    "brokoli",
    "tomat"
];

$gabungkan = array_merge($buah, $sayur);
echo "<br>" .implode(", ", $gabungkan);

$gabungUnik = array_unique($gabungkan);
echo "<br>".implode(", ", $gabungUnik);

$gabungkan1 = array_diff($buah, $sayur);
echo "<br>".implode(", ", $gabungkan1);

$gabungkan2 = array_intersect($buah, $sayur);
echo "<br>".implode(", ", $gabungkan2);

?>