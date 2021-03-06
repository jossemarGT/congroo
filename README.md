# Congroo

The wordpress base them for [jossemarGT website](http://jossemargt.com), build with  [Roots starter theme](https://github.com/roots/roots) based on [HTML5 Boilerplate](http://html5boilerplate.com/) & [Bootstrap](http://getbootstrap.com/).

You're free to use it.

## Recommended plugins

### [JSON API](https://wordpress.org/plugins/json-api/)
Install and enable this plugin for **full functionality**. Yes, is a dependency.

### [Soil](https://github.com/roots/soil)
Install this plugin to enable *additional* features:

* Root relative URLs
* Nice search (`/search/query/`)
* Cleaner output of `wp_head` and enqueued assets markup

## Theme development
```
git clone https://github.com/jossemarGT/congroo.git
cd congroo
npm install
grunt watch
```
Don't forget to put `define('WP_ENV', 'development');` in the `wp-config.php` file.

### Available Grunt commands

* `grunt dev` — Compile LESS to CSS, concatenate and validate JS
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Create minified assets that are used on non-development environments

### Any (dev) problem?
Read the roots documentation:

* [Roots 101](http://roots.io/roots-101/) — A guide to installing Roots, the files, and theme organization
* [Theme Wrapper](http://roots.io/an-introduction-to-the-roots-theme-wrapper/) — Learn all about the theme wrapper
* [Build Script](http://roots.io/using-grunt-for-wordpress-theme-development/) — A look into how Roots uses Grunt
* [Roots Sidebar](http://roots.io/the-roots-sidebar/) — Understand how to display or hide the sidebar in Roots
