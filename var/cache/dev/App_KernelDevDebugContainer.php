<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIh2WVXu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIh2WVXu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIh2WVXu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIh2WVXu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIh2WVXu\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ih2WVXu',
    'container.build_id' => '951d7603',
    'container.build_time' => 1700512272,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIh2WVXu');
