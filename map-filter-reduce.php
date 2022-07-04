<?php

$json = file_get_contents('olimpics.json');
$data = json_decode($json, true);

// Listar o número de países participantes;
echo "Total de países participantes: " . count($data) . PHP_EOL;

//Fazer com que seus nomes fiquem em letras maiúsculas;
$data = array_map(function ($item) {
    $item['pais'] = strtoupper($item['pais']);
    return $item;
}, $data);

// Ordenar:
// Pelo país que tiver mais medalhas de ouro:
// Em caso de empate, pelo país que tiver mais medalhas de prata
// Em caso de empate, pelo país que tiver mais medalhas de bronze
usort($data, function ($item1, $item2) {
    $medalhas2 = $item2['medalhas'];
    $medalhas1 = $item1['medalhas'];
    return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
        ? $medalhas2['ouro'] - $medalhas1['ouro']
        : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
            ? $medalhas2['prata'] - $medalhas1['prata']
            : $medalhas2['bronze'] - $medalhas1['bronze']);
});
var_dump($data);

// Listar o número de medalhas distribuídas na competição:
$numberOfMedals = array_reduce($data, function ($acumulatesMedals, $currentItem) {
    $medalsOfCountry = array_reduce($currentItem['medalhas'], function ($acumulatesMedalsOfCurrrentCountry, $medalsOfCurrentCountry) {
        return $acumulatesMedalsOfCurrrentCountry + $medalsOfCurrentCountry;
    }, 0);

    return $acumulatesMedals + $medalsOfCountry;
}, 0);

echo "Total de medalhas entregues: $numberOfMedals" . PHP_EOL;
