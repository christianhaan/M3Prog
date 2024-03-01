<?php // function strlen()
    echo "funtion hieronder is strlen() <br>"
?>
<?php
    // strlen() geeft de lengte van een string terug
    $naam = "Duurzaam Huis"; 
    $lengte = strlen($naam);
    echo "De lengte $naam   is:   $lengte <br>";
?>


<?php // function var_dump(count())
    echo "<br> function hieronder is var_dump(count()) <br>"
?>
<?php
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
$b[8] = 234;
var_dump(count($b));
?>

<?php // function grapheme_strlen
echo "<br> <br> de function hieronder is grapheme_strlen <br>"
?>
<?php
$char_a_ring_nfd = "a\xCC\x8A";  // 'LATIN SMALL LETTER A WITH RING ABOVE' (U+00E5) normalization form "D"
$char_o_diaeresis_nfd = "o\xCC\x88"; // 'LATIN SMALL LETTER O WITH DIAERESIS' (U+00F6) normalization form "D"

print grapheme_strlen( 'abc' . $char_a_ring_nfd . $char_o_diaeresis_nfd . $char_a_ring_nfd);
?>
