<?php

namespace ContainerAbd3QxE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_SerializeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.serialize' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\SerializeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/SerializeListener.php';

        return $container->privates['api_platform.listener.view.serialize'] = new \ApiPlatform\Symfony\EventListener\SerializeListener(($container->privates['serializer'] ?? $container->getSerializerService()), ($container->privates['api_platform.serializer.context_builder.filter'] ?? $container->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()));
    }
}
