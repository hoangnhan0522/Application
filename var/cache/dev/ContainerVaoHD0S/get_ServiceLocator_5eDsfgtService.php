<?php

namespace ContainerVaoHD0S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5eDsfgtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5eDsfgt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5eDsfgt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'position' => ['privates', '.errored..service_locator.5eDsfgt.App\\Entity\\Position', NULL, 'Cannot autowire service ".service_locator.5eDsfgt": it needs an instance of "App\\Entity\\Position" but this type has been excluded in "config/services.yaml".'],
        ], [
            'position' => 'App\\Entity\\Position',
        ]);
    }
}
