<?php

namespace Symfony\Component\Config\Util;

use ReflectionClass;
use Shopware\Core\System\SystemConfig\Util\ConfigReader;

$_ENV['SHOPWARE_SYSTEM_CONFIG_XSD_LOCATION'] = dirname((new ReflectionClass(ConfigReader::class))->getFileName()). '/../Schema/config.xsd';

function file_get_contents(string $filename)
{
    if ($filename === $_ENV['SHOPWARE_SYSTEM_CONFIG_XSD_LOCATION']) {
        $filename = __DIR__ . '/config.xsd';
    }

    return \file_get_contents($filename);
}
