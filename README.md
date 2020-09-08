Webpack encore example
===========

This example is a skeleton for projects which use webpack encore as a standalone

The example provides you following functionality:
- Common npm packages ([jQuery](https://www.npmjs.com/package/jquery), [Bootstrap](https://www.npmjs.com/package/bootstrap))
- Sass compiler
- Uglify css and js
- Gzip compression with [compression-webpack-plugin](https://www.npmjs.com/package/compression-webpack-plugin)
- Static asset revisioning by appending content hash to filenames
- Sourcemaps
- PWA Support with [Workbox](https://www.npmjs.com/package/workbox-webpack-plugin)

Read more at the offical [docs](https://symfony.com/doc/current/frontend.html)


## Installation

Clone the project
```
git clone https://github.com/FabianSchmick/webpack-encore-example.git
```

## Usage

Configure your npm packages and webpack-config to your preferences

### While you develop
Use the watch command ``npm run watch`` to compile your assets while developing.

### In production
Run ``npm run build`` to minify and gzip your assets
