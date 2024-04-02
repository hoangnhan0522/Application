<?php

namespace ContainerVaoHD0S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__F4rJwrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..f4rJwr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..f4rJwr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contact' => ['privates', '.errored..service_locator..f4rJwr.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator..f4rJwr": it needs an instance of "App\\Entity\\Contact" but this type has been excluded in "config/services.yaml".'],
        ], [
            'contact' => 'App\\Entity\\Contact',
        ]);
    }
}
