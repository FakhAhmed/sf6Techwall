<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerELReM35\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerELReM35/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerELReM35.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerELReM35\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerELReM35\App_KernelDevDebugContainer([
    'container.build_hash' => 'ELReM35',
    'container.build_id' => 'd1617a40',
    'container.build_time' => 1679235793,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerELReM35');
