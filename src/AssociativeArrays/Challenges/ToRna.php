<?php

/*Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает
соответствующую цепь РНК (совершает транскрипцию РНК).*/

function toRna($dnaStr)
{
    $dna = str_split($dnaStr);
    $vocabulary = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U'
    ];
    $rna = [];

    foreach ($dna as $nucleotide) {
        $rna[] = $vocabulary[$nucleotide];
    }

    return implode('', $rna);
}
