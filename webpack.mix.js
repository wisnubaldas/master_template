let mix = require('laravel-mix');
mix.copy('resources/assets', 'public/assets');
mix.sass('resources/assets/scss/style.scss', 'public/assets/css/style.css').options({
    processCssUrls: false
});
