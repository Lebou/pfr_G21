<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY5EmAzf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY5EmAzf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY5EmAzf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY5EmAzf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerY5EmAzf\App_KernelDevDebugContainer([
    'container.build_hash' => 'Y5EmAzf',
    'container.build_id' => '115327b0',
    'container.build_time' => 1598364387,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY5EmAzf');
