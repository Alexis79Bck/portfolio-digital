<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

beforeEach(function () {
    // Si en algún momento quieres migrar DB con seeder para pruebas:
    // $this->artisan('migrate:fresh --seed');
});

/**
 * 🔹 1. Rutas principales responden correctamente
 */
it('las rutas públicas responden con status 200', function ($route) {
    $this->get(route($route))
        ->assertStatus(200);
})->with([
    'home',
    'about',
    'projects',
    'blog',
]);

/**
 * 🔹 2. Layout base se carga correctamente
 */
it('el layout base app.blade.php renderiza correctamente', function () {
    $view = $this->view('layouts.app', ['title' => 'Titulo de Prueba']);
    $view->assertSee('Titulo de Prueba');
    $view->assertSee('<body', false);
});

/**
 * 🔹 3. Navbar contiene los enlaces principales
 */
it('la navbar contiene los enlaces principales', function () {
    $this->get(route('home'))
        ->assertSee(route('about'))
        ->assertSee(route('projects'))
        ->assertSee(route('blog'));
});

/**
 * 🔹 4. Todas las páginas tienen un footer consistente
 */
it('todas las paginas comparten el mismo footer', function ($route) {
    $this->get(route($route))
        ->assertSee('© 2025 Mi Proyecto'); // Ajusta este texto al de tu footer real
})->with([
    'home',
    'about',
    'projects',
    'blog',
]);

/**
 * 🔹 5. Verificar carga de assets principales (CSS/JS)
 */
it('las vistas incluyen los assets principales', function () {
    $this->get(route('home'))
        ->assertSee('resources/css/app.css')
        ->assertSee('resources/js/app.js');
});

/**
 * 🔹 6. Formularios: el de contacto contiene campos y CSRF
 */
it('el formulario de contacto contiene campos y token csrf', function () {
    $this->get(route('contact'))
        ->assertSee('name="name"', false)
        ->assertSee('name="email"', false)
        ->assertSee('csrf-token');
});

/**
 * 🔹 7. Cada página tiene un <title> diferente
 */
it('cada pagina define correctamente el title', function ($route, $title) {
    $this->get(route($route))->assertSee("<title>{$title}</title>", false);
})->with([
    ['home', 'HOME PAGE'],
    ['about', 'ABOUT PAGE'],
    ['projects', 'PROJECTS PAGE'],
    ['blog', 'BLOG PAGE'],
]);

