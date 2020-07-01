<?php

namespace BrainGames\Menu;

use function cli\line;
use function cli\menu;

function mainMenu()
{
    $menu = array(
    'bin\brain-even' => 'brain-even',
    'bin\brain-calc' => 'brain-calc',
    'bin\brain-gcd' => 'brain-gcd',
    'bin\brain-progression' => 'brain-progression',
    'bin\brain-prime' => 'brain-prime',
    'quit' => 'Quit');
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
