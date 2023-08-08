import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/style.scss',
                'resources/js/app.js',
                'resources/js/pages/page-post-dashboard-create.js'
            ],
            refresh: true,
        }),
    ],
});
