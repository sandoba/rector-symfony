<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Symfony25\Rector\MethodCall\MaxLengthSymfonyFormOptionToAttrRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../../config/config.php');

    $rectorConfig->rule(MaxLengthSymfonyFormOptionToAttrRector::class);
};
