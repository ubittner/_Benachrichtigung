<?php

declare(strict_types=1);

foreach (glob(__DIR__ . '/*.php') as $filename) {
    if (basename($filename) != 'BN_autoload.php') {
        include_once $filename;
    }
}