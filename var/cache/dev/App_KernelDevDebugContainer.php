<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAOaRpDg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAOaRpDg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAOaRpDg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAOaRpDg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAOaRpDg\App_KernelDevDebugContainer([
    'container.build_hash' => 'AOaRpDg',
    'container.build_id' => '97af15b1',
    'container.build_time' => 1648652458,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAOaRpDg');
