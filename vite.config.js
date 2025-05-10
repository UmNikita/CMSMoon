import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/admin.css', 'resources/css/admin_main.css', 'resources/css/admin_settings.css', 
                'resources/css/admin_media.css', 'resources/css/admin_page.css', 'resources/css/admin_user.css', 'resources/css/installation.css',
                'resources/js/installation.js', 'resources/js/installation_two.js', 'resources/css/login.css', 'resources/js/login.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
