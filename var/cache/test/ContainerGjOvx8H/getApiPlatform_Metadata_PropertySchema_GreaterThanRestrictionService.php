<?php

namespace ContainerGjOvx8H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Metadata_PropertySchema_GreaterThanRestrictionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.metadata.property_schema.greater_than_restriction' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanRestriction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaRestrictionMetadataInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaGreaterThanRestriction.php';

        return $container->privates['api_platform.metadata.property_schema.greater_than_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanRestriction();
    }
}
