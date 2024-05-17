import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/admin/scss/app.scss',
                'resources/admin/js/app.js'
            ],
            refresh: true,
        }),
    ],resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~popperjs/core': path.resolve(__dirname, 'node_modules/popperjs/core'),
            '~swiper': path.resolve(__dirname, 'node_modules/swiper'),
            'vanilla-lazyload': path.resolve(__dirname, 'node_modules/vanilla-lazyload'),
            'lightbox': path.resolve(__dirname, 'node_modules/lightbox'),
            'jquery': path.resolve(__dirname, 'node_modules/jquery'),
            'magnificPopup': path.resolve(__dirname, 'node_modules/magnific-popup'),
            'sweetalert2': path.resolve(__dirname, 'node_modules/sweetalert2'),
            'datatables': path.resolve(__dirname, 'node_modules/datatables.net-bs5'),
            'tinymce': path.resolve(__dirname, 'node_modules/tinymce'),
        }
    },
});
