<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__ . '/src',
    __DIR__ . '/tests/src',
    __DIR__ . '/data',
]);

return PhpCsFixer\Config::create()->setFinder($finder);