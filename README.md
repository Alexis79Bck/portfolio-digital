# Portfolio Digital Laravel + Livewire

Este proyecto es un portfolio digital personal construido con Laravel y Livewire.  
Su objetivo es servir como carta de presentación profesional y plataforma para mostrar proyectos y un blog técnico.

## Características

- Base en Laravel 10 y Livewire para interacción dinámica.  
- Plantilla Blade modular y reusable.  
- Autenticación básica con Laravel Breeze.  
- Gestión de contenido para blog desde dashboard admin.  
- Galería de proyectos con enlaces externos.  
- Configuración para despliegue fácil en hosting compartido o VPS.  

## Requisitos

- PHP >= 8.1  
- Composer  
- Base de datos MySQL o compatible  
- Node.js y npm para assets  

## Instalación

```bash
git clone https://github.com/tu_usuario/portfolio-digital.git
cd portfolio-digital
composer install
npm install
npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
