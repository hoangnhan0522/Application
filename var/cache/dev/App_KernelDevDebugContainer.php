<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXWoxaM1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXWoxaM1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXWoxaM1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXWoxaM1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXWoxaM1\App_KernelDevDebugContainer([
    'container.build_hash' => 'XWoxaM1',
    'container.build_id' => '19e37c41',
    'container.build_time' => 1712018401,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXWoxaM1');
