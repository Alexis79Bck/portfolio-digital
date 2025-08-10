<?php

use function Pest\Laravel\get;

$pages = [
    ['name' => 'home', 'text' => 'HOME PAGE'],
    ['name' => 'about', 'text' => 'ABOUT PAGE'],
    ['name' => 'projects', 'text' => 'PROJECTS PAGE'],
    ['name' => 'blog', 'text' => 'BLOG PAGE'],
];

test('Todas las rutas se cargan exitosamente', function () use ($pages) {
    foreach ($pages as $page) {
        get(route($page['name']))
            ->assertStatus(200)
            ->assertSee($page['text']);
    }
});
