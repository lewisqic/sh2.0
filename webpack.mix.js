const mix = require('laravel-mix');
const argv = require('yargs').argv;
const prod = mix.inProduction();
mix.browserSync({
    proxy: 'simplehub2.lh',
    notify: {
        styles: {
            top: 'auto',
            bottom: '0',
            left: '0',
            right: 'auto'
        }
    }
});

const themeOnly = argv.env !== undefined  && argv.env.source === 'theme';


/*************************************
 JAVASCRIPT
 *************************************/
if ( !themeOnly ) {

    /*
    Vendor Libraries
     */
    mix.scripts([
            'node_modules/jquery/dist/jquery.js',
            'node_modules/parsleyjs/dist/parsley.js',
            'node_modules/noty/lib/noty.js',
            'resources/assets/js/vendor/jqColorPicker.min.js'
        ],
        'public/js/vendor.' + (prod ? 'min.' : '') + 'js'
    );

    /*
    Core/Modules
     */
    mix.js([
            'resources/assets/js/core.js',
            'resources/assets/js/theme.js'
        ],
        'public/js/hub.' + (prod ? 'min.' : '') + 'js'
    );

}

/*************************************
 CSS
 *************************************/

/*
Core/Modules
 */
mix.sass(
    'resources/assets/scss/theme.scss',
    'public/css/hub.' + (prod ? 'min.' : '') + 'css'
);


/*************************************
 FILES
 *************************************/

if ( !themeOnly ) {

    mix.copyDirectory('resources/assets/images/', 'public/images/');
    mix.copyDirectory('resources/assets/fonts/', 'public/fonts/');

}