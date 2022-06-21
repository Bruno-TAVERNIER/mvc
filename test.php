<?php

$var = '123456';

echo 'la chaine contient $var<br>'; // pas d'interprétation
echo "la chaine contient $var<br>"; // interprétation
echo 'la chaine contient ' . $var . '<br>'; // concaténation