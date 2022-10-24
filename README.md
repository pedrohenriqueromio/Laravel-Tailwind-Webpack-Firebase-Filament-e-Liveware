## Estrutura básica para configuração de: 
Laravel, Tailwind, Webpack, Firebase, Filament e Liveware

## Dependencias
Laravel 8x, php-xml, php-mysql

## Migração
php artisan migrate

## Filament
composer require filament/filament
php artisan make:filament-user
admin@admin.com || admin : admin1234

## Modelos
php artisan make:model ex: Post -m

## Criando Resources do filament
php artisan make:filament-resource PostResource

## Criando Storage
php artisan storage:link

## require do Liveware para paginação Ajax
composer require livewire/livewire

## criando componentes para o Liveware
php artisan make:livewire recent-posts-home-grid
php artisan make:livewire category-single

## Configurar o Tailwind CSS
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p

## Adicionando Push notifications 

php artisan make:migration add_column_device_token

https://console.firebase.google.com/project/[name]/settings/cloudmessaging

-habilitar API Cloud Messaging (Legada)
- usar 'Chave do servidor' 

Ir em:
Project > Settings > Cloud Messaging > Server Key

JS -> public/firebase-messaging-sw.js
Back -> app/Http/Controllers/FBNotification.php


## Criar login 
composer require laravel/ui "^3.0" // 3x para v.8
php artisan ui:auth
