<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerO6xw1He\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerO6xw1He/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerO6xw1He.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerO6xw1He\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerO6xw1He\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'O6xw1He',
    'container.build_id' => '706b29fd',
    'container.build_time' => 1551139502,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerO6xw1He');