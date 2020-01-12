<?php

return [
    'production' => true,
    'baseUrl' => 'https://jp-pino.github.io/ibm-maquinados/',
    'collections' => [],
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
