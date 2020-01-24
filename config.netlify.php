<?php

return [
    'production' => true,
    'baseUrl' => '/',
    'collections' => [],
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
