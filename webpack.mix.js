const mix = require("laravel-mix");
require("laravel-mix-workbox");

mix
  .disableNotifications()
  .sass("resources/scss/main.scss", "assets/main.css")
  .js("resources/js/app.js", "assets/app.js")
  .minify(["assets/app.js", "assets/main.css"])
  .browserSync({
    proxy: "kirby.localhost",
    watch: true,
    files: ["resources/**/*", "site/**/*", "content/**/*"],
  })
  .options({
    fileLoaderDirs: {
      fonts: "assets/fonts",
      images: "assets/images",
    },
  })
  .generateSW({
    sourcemap: false,
  });
