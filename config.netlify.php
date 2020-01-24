<?php

return [
    'production' => true,
    'baseUrl' => 'https://goofy-goldstine-45d1a2.netlify.com/',
    'collections' => [],
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
