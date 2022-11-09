<?php

namespace App;

use SensioLabs\AnsiConverter\Theme\Theme;

class DraculaTheme extends Theme
{
    public function asArray()
    {
        return [
            // normal
            'black' => 'var(--gray-800)',
            'red' => '#c60f33',
            'green' => '#14e67d',
            'yellow' => '#f3ff48',
            'blue' => '#66d9ef',
            'magenta' => '#d33682',
            'cyan' => '#2aa198',
            'white' => '#ffffff',

            // bright
            'brblack' => 'var(--gray-800)',
            'brred' => '#ff79c6',
            'brgreen' => '#25de66',
            'bryellow' => '#fff800',
            'brblue' => '#19d6f5',
            'brmagenta' => '#6c71c4',
            'brcyan' => '#93a1a1',
            'brwhite' => '#ffffff',
        ];
    }
}
