import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/admin.css', 'resources/css/admin_main.css', 'resources/css/admin_settings.css', 'resources/css/admin_media.css'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
