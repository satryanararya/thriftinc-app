// webpack.mix.js

const mix = require('laravel-mix');
const vitePlugin = require('vite-plugin-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.vite({
    plugins: [vitePlugin],
});
