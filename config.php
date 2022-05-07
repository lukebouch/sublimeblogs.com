<?php

return [
    'production' => false,
    'baseUrl' => '',
    'apiUrl' => 'https://api.sublime-blogs.test',
    'title' => 'Sublime Blogs',
    'description' => 'A headless CMS designed specifically for blogs.',
    'collections' => [
        'docs' => [
            'extends' => '_layouts.doc',
        ]
    ],
    'isActive' => function ($page, $path) {
        return Illuminate\Support\Str::endsWith(trimPath($page->getPath()), trimPath($path)) || $page->getUrl() == $path;
    },
];
