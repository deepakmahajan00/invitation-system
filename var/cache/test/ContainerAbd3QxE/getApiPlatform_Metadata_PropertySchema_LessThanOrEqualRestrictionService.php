<?php

namespace ContainerAbd3QxE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Metadata_PropertySchema_LessThanOrEqualRestrictionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.metadata.property_schema.less_than_or_equal_restriction' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanOrEqualRestriction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaRestrictionMetadataInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaLessThanOrEqualRestriction.php';

        return $container->privates['api_platform.metadata.property_schema.less_than_or_equal_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanOrEqualRestriction();
    }
}
