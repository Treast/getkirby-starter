const mix = require("laravel-mix");

mix
  .disableNotifications()
  .setPublicPath("assets")
  .sass("resources/scss/main.scss", "main.css")
  .js("resources/js/app.js", "app.js")
  .minify(["assets/app.js", "assets/main.css"])
  .browserSync({
    proxy: "kirby.localhost",
    watch: true,
    files: ["resources/**/*", "site/**/*", "content/**/*"],
  });
