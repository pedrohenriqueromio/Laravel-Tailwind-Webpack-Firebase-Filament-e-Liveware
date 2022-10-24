const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js', )
    // .js('resources/js/firebase.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);

mix.webpackConfig({
    output: {
        library: 'libraryName',
        libraryTarget: 'umd',
        umdNamedDefine: true,
        globalObject: 'this'
    }
})