const mix = require('laravel-mix');

let directory_bundle = path.normalize('public/');
mix.setPublicPath(directory_bundle);

let build_scss = [
    {
        from: '/resources/sass/pages/home/index.scss',
        to: 'css/home.css'
    },
    {
        from: '/resources/sass/pages/listing/index.scss',
        to: 'css/listing.css'
    },
    {
        from: '/resources/sass/pages/detail/index.scss',
        to: 'css/detail.css'
    },
    {
        from: '/resources/sass/pages/login/index.scss',
        to: 'css/login.css'
    },
    {
        from: '/resources/sass/pages/register/index.scss',
        to: 'css/register.css'
    }
];

let build_js = [
    {
        from: '/resources/js/pages/home/index.js',
        to: 'js/home.js'
    },
    {
        from: '/resources/js/pages/listing/index.js',
        to: 'js/listing.js'
    },
    {
        from: '/resources/js/pages/detail/index.js',
        to: 'js/detail.js'
    },
    {
        from: '/resources/js/pages/login/index.js',
        to: 'js/login.js'
    },
    {
        from: '/resources/js/pages/register/index.js',
        to: 'js/register.js'
    }
];

build_scss.map((index) => {
    let from = __dirname + index.from;
    let to = index.to;
    mix.sass(from, to);
});

build_js.map((index) => {
    let from = __dirname + index.from;
    let to = index.to;
    if (Array.isArray(index.from)) {
        from = [];
        index.from.forEach(file => {
            from.push(__dirname + file);
        });
    }
    mix.js(from, to)
});


mix.options({
    processCssUrls: false
}).autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
});
if (mix.inProduction()) {
    mix.version();
}

mix.webpackConfig({
    resolve: {
        alias: {
            'jquery': path.join(__dirname, 'node_modules/jquery/src/jquery')
        }
    }
});
