<?php

namespace BrainGames\menu;

use function cli\line;
use function cli\menu;

function mainMenu()
{
    $menu = [
        __DIR__ . '\..\bin\brain-even' => 'brain-even',
        __DIR__ . '\..\bin\brain-calc' => 'brain-calc',
        __DIR__ . '\..\bin\brain-gcd' => 'brain-gcd',
        __DIR__ . '\..\bin\brain-progression' => 'brain-progression',
        __DIR__ . '\..\bin\brain-prime' => 'brain-prime',
        'quit' => 'Quit'
    ];
    while (true) {
        line('-----------------------------');
        $choice = menu($menu, null, 'Choose any game (or quit)');
        line('-----------------------------');
        if ($choice == 'quit') {
            break;
        }
        ob_start();
        include $choice;
        ob_end_clean();
    }
}
