<?php

namespace ContainerVaoHD0S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPositionTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PositionType' shared autowired service.
     *
     * @return \App\Form\PositionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PositionType.php';

        return $container->privates['App\\Form\\PositionType'] = new \App\Form\PositionType();
    }
}
