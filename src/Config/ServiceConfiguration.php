<?php
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
            \PoP\UserRoles\FieldResolvers\SiteFieldResolver::class,
            \PoP\UserRolesWP\FieldResolvers\SiteFieldResolver::class
        );
    }
}
