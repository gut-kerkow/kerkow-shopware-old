<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQDvdqMx\srcShopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQDvdqMx/srcShopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQDvdqMx.legacy');

    return;
}

if (!\class_exists(srcShopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQDvdqMx\srcShopware_Production_KernelDevDebugContainer::class, srcShopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerQDvdqMx\srcShopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'QDvdqMx',
    'container.build_id' => '7bd0c38c',
    'container.build_time' => 1597930484,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQDvdqMx');
