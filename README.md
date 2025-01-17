_s_pie
===

This is a starter theme forked from `_s`, or `underscores`, adapted to include some setup for a hybrid SPA/WP theme built with Vue.js. My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A modern workflow with a pre-made command-line interface to turn your project into a more pleasant experience.
* A just right amount of lean, well-commented, modern, HTML5 templates.
* Page templates moved from the theme root into the `templates` directory.
* Template parts, including header, fooer and sidebar, moved into the `template-parts` directory.
* A custom header implementation in `inc/custom-header.php`. Just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template part.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample layouts in `sass/layouts/` made using CSS Grid for a sidebar on either side of your content. Just uncomment the layout of your choice in `sass/style.scss`.
Note: `.no-sidebar` styles are automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Installation
---------------

### Requirements

`_s_starter` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.
6. Search for `\_S` (in uppercase) to capture namespaces and replace with: `\MegatheriumIsAwesome`.

Then, update the stylesheet header in `style.css`, the links in `template-parts/footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `_s_pie`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ yarn install
```

Copy `.env.example` to `.env`, adding your ACF Pro licence key

If you wish to use `yarn deploy` to move your files to a remote server, make sure that you add the appropriate credentials and paths to the script in `package.json`.

### Available CLI commands

`_s_starter` comes packed with CLI commands tailored for WordPress theme development :

- `yarn watch` : watches all SASS files and recompiles them to css when they change.
- `yarn build` : compiles all SASS files ready for production.
- `yarn deploy` : deploys files to a server (will need access credntials and path set within package.json).
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `yarn v-lint` : checks all SASS and JS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/).

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
