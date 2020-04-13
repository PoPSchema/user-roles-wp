<?php

declare(strict_types=1);

namespace PoP\UserRolesWP\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure()
    {
        ContainerBuilderUtils::injectValuesIntoService(
            'instance_manager',
            'overrideClass',
            \PoP\UserRoles\FieldResolvers\RootRolesFieldResolver::class,
            \PoP\UserRolesWP\FieldResolvers\Overrides\RootRolesFieldResolver::class
        );
        ContainerBuilderUtils::injectValuesIntoService(
            'instance_manager',
            'overrideClass',
            \PoP\UserRoles\FieldResolvers\UserFieldResolver::class,
            \PoP\UserRolesWP\FieldResolvers\Overrides\UserFieldResolver::class
        );
    }
}
