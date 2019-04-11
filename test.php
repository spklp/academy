<?php

$link = 'https://www.youtube.com/watch?v=ZYGf6Texzfo';
$pattern = '/^http(s{0,1}):\/\/..{1,}\..{1,}/';
echo preg_match($pattern, $link);