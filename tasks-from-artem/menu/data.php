<?php

return [
    'lessons' => [
        [
            'name'  => 'lesson1',
            'url'   => 'lesson1.php',
        ],
        [
            'name'  => 'lesson2',
            'url'   => 'lesson2.php',
        ],
        [
            'name'  => 'lesson3',
            'url'   => 'lesson3.php',
        ],
        [
            'name'  => 'lesson4',
            'url'   => 'lesson4.php',
        ],
    ],
    'links' => [
        [
            'name'  => 'Массивы',
            'url'   => 'https://www.php.net/manual/ru/language.types.array.php',
        ],
        [
            'name'  => 'Операторы',
            'url'   => 'https://www.php.net/manual/ru/language.operators.php',
        ],
        [
            'name'  => 'Типы данных',
            'url'   => 'https://www.php.net/manual/ru/language.types.php',
        ],
    ]
];

function color_text ($file) {
    $code = substr(highlight_file($file, true), 36, -15);
    //Split lines
    $lines = explode('<br />', $code);
    //Count
    $lineCount = count($lines);
    //Calc pad length
    $padLength = strlen($lineCount);

    //Re-Print the code and span again
    echo "<code><span style=\"color: #000000\">";

    //Loop lines
    foreach ($lines as $i => $line) {
        //Create line number
        $lineNumber = str_pad($i + 1, $padLength, '0', STR_PAD_LEFT);
        //Print line
        echo sprintf('<br><span style="color: #999999">%s | </span>%s', $lineNumber, $line);
    }

    //Close span
    echo "</span></code>";

}