<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
