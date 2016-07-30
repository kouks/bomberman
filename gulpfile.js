var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(function(mix) {

    /*
     | Main class containing all the magic
     */
    mix

      /*
       | Compiling less files (from resources/assets/less to public/css/all.css)
       */
      .less('*.less', 'public/css/all.css')

      /*
       | Mixing JS files by groups (from resources/assets/js too public/js)
       */
      //.scripts(['jquery.min.js', 'main.js'], 'public/js/main.js')

      /*
       | Browser sync plugin <3
       */
      .browserSync({

        /*
         | Make it run on proxy server defined in drivers/etc/hosts
         | Note that there has to be a virtual host set up as well
         */
        proxy: 'http://portfolio.dev/'
      });

  /*
   | Yep that's all.
   | For minification of all .js and .css files run 'gulp --production'
   */
});
