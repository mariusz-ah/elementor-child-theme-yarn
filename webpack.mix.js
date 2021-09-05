const mix = require('laravel-mix');

mix.js('assets/js/script.js', 'assets/js')
.sass('assets/scss/style.scss', 'assets/css')
// .sass('assets/scss/style_main.scss', 'assets/css')
  .options({ processCssUrls: false })
  .setPublicPath('public');

