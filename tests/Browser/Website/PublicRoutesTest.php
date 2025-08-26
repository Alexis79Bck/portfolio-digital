<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PublicRoutesTest extends DuskTestCase
{
    /**
     * Prueba que las rutas públicas cargan exitosamente y muestran el texto esperado.
     *
     * @return void
     */
    public function testPublicRoutesLoadSuccessfully()
    {
        $pages = [
            ['name' => 'home', 'text' => 'HOME PAGE'],
            ['name' => 'about', 'text' => 'ABOUT PAGE'],
            ['name' => 'projects', 'text' => 'PROJECTS PAGE'],
            ['name' => 'blog', 'text' => 'BLOG PAGE'],
        ];

        foreach ($pages as $page) {
            $this->browse(function (Browser $browser) use ($page) {
                $browser->visit(route($page['name']))
                        ->assertSee($page['text']);
            });
        }
    }
}
