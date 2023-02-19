// webpack.mix.js

const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css"
);
mix.js("resources/assets/js/app.js", "public/js").sass(
    "resources/assets/sass/app.scss",
    "public/css"
);

mix.browserSync({
    proxy: "localhost:8000",
});
