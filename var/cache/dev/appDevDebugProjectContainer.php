<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCvhuxlq\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCvhuxlq/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCvhuxlq.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCvhuxlq\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerCvhuxlq\appDevDebugProjectContainer([
    'container.build_hash' => 'Cvhuxlq',
    'container.build_id' => 'ca326d29',
    'container.build_time' => 1592768012,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCvhuxlq');