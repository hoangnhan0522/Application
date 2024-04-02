<?php

namespace ContainerVaoHD0S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hrv7FUZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hrv7FUZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hrv7FUZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cart' => ['privates', '.errored..service_locator.hrv7FUZ.App\\Entity\\Cart', NULL, 'Cannot autowire service ".service_locator.hrv7FUZ": it needs an instance of "App\\Entity\\Cart" but this type has been excluded in "config/services.yaml".'],
        ], [
            'cart' => 'App\\Entity\\Cart',
        ]);
    }
}
