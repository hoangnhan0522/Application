<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \App\Entity\Product implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'carts' => [parent::class, 'carts', null],
        "\0".parent::class."\0".'category' => [parent::class, 'category', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'image' => [parent::class, 'image', null],
        "\0".parent::class."\0".'orderDetails' => [parent::class, 'orderDetails', null],
        "\0".parent::class."\0".'price' => [parent::class, 'price', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        'carts' => [parent::class, 'carts', null],
        'category' => [parent::class, 'category', null],
        'description' => [parent::class, 'description', null],
        'id' => [parent::class, 'id', null],
        'image' => [parent::class, 'image', null],
        'orderDetails' => [parent::class, 'orderDetails', null],
        'price' => [parent::class, 'price', null],
        'title' => [parent::class, 'title', null],
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
