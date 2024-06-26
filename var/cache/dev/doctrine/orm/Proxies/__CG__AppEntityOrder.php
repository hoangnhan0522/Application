<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Order extends \App\Entity\Order implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'address' => [parent::class, 'address', null],
        "\0".parent::class."\0".'dateAt' => [parent::class, 'dateAt', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'mobile' => [parent::class, 'mobile', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'orderDetails' => [parent::class, 'orderDetails', null],
        "\0".parent::class."\0".'status' => [parent::class, 'status', null],
        "\0".parent::class."\0".'total' => [parent::class, 'total', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        'address' => [parent::class, 'address', null],
        'dateAt' => [parent::class, 'dateAt', null],
        'id' => [parent::class, 'id', null],
        'mobile' => [parent::class, 'mobile', null],
        'name' => [parent::class, 'name', null],
        'orderDetails' => [parent::class, 'orderDetails', null],
        'status' => [parent::class, 'status', null],
        'total' => [parent::class, 'total', null],
        'user' => [parent::class, 'user', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
