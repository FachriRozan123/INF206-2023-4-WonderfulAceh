import { defineConfig } from 'vite';
<<<<<<< HEAD
import laravel, { refreshPaths } from 'laravel-vite-plugin';
=======
import laravel from 'laravel-vite-plugin';
>>>>>>> 2108107010025

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
>>>>>>> 2108107010025
        }),
    ],
});
