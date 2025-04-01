<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $config): void {
    $config->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $config->sets([
        \Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_82,
        \Rector\Set\ValueObject\SetList::CODE_QUALITY,
    ]);
};
