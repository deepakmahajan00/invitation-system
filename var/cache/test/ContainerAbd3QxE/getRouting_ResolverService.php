<?php

namespace ContainerAbd3QxE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_ResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';

        $container->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($container->privates['routing.loader.xml'] ?? $container->load('getRouting_Loader_XmlService')));
        $instance->addLoader(($container->privates['routing.loader.yml'] ?? $container->load('getRouting_Loader_YmlService')));
        $instance->addLoader(($container->privates['routing.loader.php'] ?? $container->load('getRouting_Loader_PhpService')));
        $instance->addLoader(($container->privates['routing.loader.glob'] ?? $container->load('getRouting_Loader_GlobService')));
        $instance->addLoader(($container->privates['routing.loader.directory'] ?? $container->load('getRouting_Loader_DirectoryService')));
        $instance->addLoader(($container->privates['routing.loader.container'] ?? $container->load('getRouting_Loader_ContainerService')));
        $instance->addLoader(($container->privates['api_platform.route_loader.legacy'] ?? $container->load('getApiPlatform_RouteLoader_LegacyService')));
        $instance->addLoader(($container->privates['routing.loader.annotation'] ?? $container->load('getRouting_Loader_AnnotationService')));
        $instance->addLoader(($container->privates['routing.loader.annotation.directory'] ?? $container->load('getRouting_Loader_Annotation_DirectoryService')));
        $instance->addLoader(($container->privates['routing.loader.annotation.file'] ?? $container->load('getRouting_Loader_Annotation_FileService')));

        return $instance;
    }
}
