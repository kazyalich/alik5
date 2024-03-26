<?php

// Создание ассоциативного массива с информацией о городах (название города => население)
$cities = [
    "Нью-Йорк" => 8398748,
    "Токио" => 37393000,
    "Лондон" => 8908081,
    "Шанхай" => 24183300,
    "Москва" => 12655050
];

// Инициализация переменных для хранения самого большого населения и соответствующего города
$maxPopulation = 0;
$maxCity = "";

// Перебор всех городов для нахождения города с самым большим населением
foreach ($cities as $city => $population) {
    if ($population > $maxPopulation) {
        $maxPopulation = $population;
        $maxCity = $city;
    }
}

// Вывод города с самым большим населением
echo "Город с самым большим населением: " . $maxCity . " (Население: " . $maxPopulation . ")\n";

?>
