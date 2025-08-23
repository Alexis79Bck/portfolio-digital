<?php

use Illuminate\Support\Facades\Route;

/**
 * ✅ Test: Comprobar que las rutas públicas existen y responden con 200
 */
test('las rutas públicas cargan correctamente', function () {
    $routes = [
        'home'     => '/',
        'about'    => '/about',
        'projects' => '/projects',
        'blog'     => '/blog',
    ];

    foreach ($routes as $name => $uri) {
        $this->get($uri)->assertStatus(200);
    }
});

/**
 * ✅ Test: Comprobar que las vistas contienen el texto esperado
 */
test('las vistas muestran contenido esperado', function () {
    $pages = [
        '/'         => 'HOME PAGE',
        '/about'    => 'ABOUT PAGE',
        '/projects' => 'PROJECTS PAGE',
        '/blog'     => 'BLOG PAGE',
    ];

    foreach ($pages as $uri => $text) {
        $this->get($uri)->assertSee($text);
    }
});

/**
 * ✅ Test: El layout base incluye las secciones necesarias
 */
test('el layout base incluye las secciones de blade', function () {
    $view = $this->view('layouts.app'); // ajusta si tu layout se llama distinto

    $view->assertSee('@yield("content")', false); // false = no escapar Blade
    $view->assertSee('@include("partials.navbar")', false); // ejemplo de partial
});
