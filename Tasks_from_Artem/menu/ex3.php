<?php

$pets = [
    'cats' => [
        [
            'name'  => 'Барсик',
            'age'   => 9,
        ],
        [
            'name'  => 'Пушок',
            'age'   => 12,
        ]
    ],
    'dogs' => [
        [
            'name'  => 'Шарик',
            'age'   => 3
        ],
        [
            'name'  => 'Рекс',
            'age'   => 10
        ]
    ]
];

foreach ($pets['cats'] as $cat){
    echo $cat['name'] . " - " . $cat['age'] . " лет<br>";
}