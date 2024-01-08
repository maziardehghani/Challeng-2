<?php

/*
 *
 *  k => t
 *
 *  g => d
 *
 *  r => l,f
 *
 *
 *  input => FILIPEK
 *  output => 4
 *
 */

$pronunciations = ['T', 'D', 'L', 'F'];
$word = 'FILIKHGHDFIGQFFLLTTKKKKTPEK';
$counter =0;

for ($i=0;$i<strlen($word);$i++)
{
    if (in_array($word[$i], $pronunciations))
        $counter++;
}

echo (pow(2,$counter));

