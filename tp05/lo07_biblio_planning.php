<?php

function listeJourLabel():array{
    return array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
}

function listeJourIndice():array{
    return range (1,31);
}

function listeMois(): array{
    return array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre',
        'octobre', 'décembre');
}

function listeSeance(): array{
    $arr = [];
    foreach([8,9,10,11,14,15,16,17] as $i) {
    for ($j = 0; $j < 5; $j += 2) {
        array_push($arr, sprintf("%02d",$i).'h'.$j.'0');
//        php前面不足2位数字前面补0零 %02d
//        sprintf("...%参数...",参数结果)带参数的打印结果
//        这里%02d中的0是占位符（不写时会以空格补足），3是位数，d代表数字类型；
    }
}
    return $arr;
}

?>