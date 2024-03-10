import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// Importamos Path
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
            // Importamos Bootstrap 5
            resolve: {
                alias: {
                    '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
                }
            },
        }),
    ],
});
