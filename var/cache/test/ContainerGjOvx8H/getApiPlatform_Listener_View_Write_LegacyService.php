<?php

namespace ContainerGjOvx8H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_Write_LegacyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.write.legacy' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\WriteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/EventListener/WriteListener.php';

        return $container->privates['api_platform.listener.view.write.legacy'] = new \ApiPlatform\Core\EventListener\WriteListener(($container->privates['debug.api_platform.data_persister'] ?? $container->load('getDebug_ApiPlatform_DataPersisterService')), ($container->privates['api_platform.iri_converter.legacy'] ?? $container->getApiPlatform_IriConverter_LegacyService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()));
    }
}
