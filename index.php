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

$word = 'FILIPEK';
$counter =0;

for ($i=0;$i<strlen($word);$i++)
{
    if ($word[$i] === 'F')
        $counter++;

    if ($word[$i] === 'L')
        $counter++;

    if ($word[$i] === 'D')
        $counter++;

    if ($word[$i] === 'T')
        $counter++;
}

echo (pow(2,$counter));

