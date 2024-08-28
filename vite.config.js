import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/custom.js',
                'resources/js/custom.js',
                'resources/js/main.js',
                'resources/js/aos.js',
                'resources/js/mouse.js',
                'resources/js/swiper.js',
                
                'resources/js/plugin.js',
                'resources/js/homesetting.js',
                'resources/js/website.js',
                'resources/js/comment.js',
                'resources/css/aos.css',
                'resources/css/output.css',
                'resources/css/preview.css',
                'resources/css/style.css',
                'resources/css/swiper.css',
                


            ],
            refresh: true,
        }),
    ],
});
