# Genbu WordPress Theme

## About:

**Author:** David Chandra Purnama ( [@turtlepod](http://twitter.com/turtlepod) / [shellcreeper.com](http://shellcreeper.com/) )

Genbu theme is an clean and simple responsive theme built with search-engine optimization (SEO) in mind by utilizing the most current HTML5 conventions and [Schema.org](http://schema.org) microdata.

It's modular, you can use it as robust parent theme or as theme base for your project.

More info: [Genbu Theme](http://genbutheme.com/)

### Theme Layout and Sidebar:

Genbu is powered with 9 Layout, You can set the layout globally via WordPress customize.
* Content (No Sidebar)
* Content / Sidebar 1
* Sidebar 1 / Content
* Sidebar 2 / Content
* Content / Sidebar 2
* Sidebar 2 / Content / Sidebar 1 (Default)
* Sidebar 2 / Sidebar 1 / Content
* Content / Sidebar 1 / Sidebar 2
* Sidebar 1 / Content / Sidebar 2

Info:
* **Content**: Main content of the page.
* **Sidebar 1**: Primary Sidebar (300px width).
* **Sidebar 2**: Secondary Sidebar (160px width).

### Navigation Menus:

Genbu have two navigation menus.
* **Primary Navigation**: located below header with search form on the right side. On mobile device will use toggle and using menu name as toggle. When not set, it will display link to home page.
* **Footer Links**: will be displayed as simple links in footer area. If not set, will not displayed.

### Custom Background:

Genbu have custom background feature you can set custom background via WP Customize or background settings page.

### Custom Header Image:

Genbu have custom background header feature you can set custom header image via WP Customize or header settings page.
* **As banner image**: when displaying the header text, the header image will be used as banner image below site title and description.
* **As logo**: when not using header text, header image will be used as logo.

### Editor Style:

Genbu is using editor style, so you'll see what you get in your WordPress visual editor.

### Translation Ready:

You can translate Genbu using provided po and mo file.


### Links

* [Github project page](https://github.com/turtlepod/genbu)
* [Theme page](http://genbutheme.com/)
* Need a custom theme or plugin for your WordPress website? [I can help](http://shellcreeper.com/services/).

## Copyright & license

This theme is licensed under the [GNU General Public License](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 (GPL) or later.

2014 © [Genbu Media](http://genbu.me/). All rights reserved.

## Changelog:

### 1.2.2
* use tamatebako_theme_file() and not hybrid_locate_theme_file().
* change hook "genbu_after_theme_setup" to "genbu_after_setup_theme".
* Clean up content folder, add singular template for all post format.
* Fix content error notice (404 pages).
* Add skip to content in plugins template files.
* Quick fix of sub menu toggle.
* Now using GIT and no longer SVN
* Fix Tamatebako, see includes/tamatebako-changelog.md for detail.
* Update Hybrid Core to version 2.0.2
* Remove wp_link_pages args in content/*.
* Remove all blank index.html

### 1.2.1
* Update minified.

### 1.2.0
* Use Grunt (private use): node_modules folder, package.json, and Gruntfile.js is not added in theme.
* Change stylesheet load method.
* add editor-style.css (reset.css + style.css)
* and theme.css (all css loaded in theme into one minified css)
* use POT file for translation, remove po and mo file.
* Fix mbile Sub-Menu Toggle (jQuery)
* Fix Pre element display (overflow) on mobile.
* Fix Editor Style (WP 4.0 Editor Auto resize feature).

### 1.1.0
* add license.txt
* update tamatebako to version 1.0.1
* fix media queries menu, and add dash 1st sub-menu too.
* update translation file.
* add class ".comments-section" to "#comments-template" in "comments.php"
* Update HC to version 2.0.1 + Tamatebako 1.1.0
* Update lang files

### 1.0.0
* Push to version 1.0.0
* now using [Semantic Versioning](http://semver.org/)

### 0.1.4
* Disable comment error on Page (post type).
* Add basic support for WooCommerce Plugin.
* Add basic support for The Events Calendar Plugin.
* Add basic support for Easy Digital Downloads Plugin.
* Add basic support for Custom Content Portfolio Plugin.
* Fix search form (menu) toggle, now using link instead of button.
* Remove Utility functions from template, add examples in docs folder.
* Change global for widget num to tamatebako.
* Fix tag footer to div in entry footer for plural pages.
* Change header tag to div in comment meta.
* Fix threaded comments style
* Add basic support and style for Post Formats.
* Add thumbnail for post archive.
* Better layout structure to enable grid/columns in displaying posts list.
* Add base structure and example for grid and masonry in displaying posts list.
* Add flexslider and examples in how to use it.
* Restructure "tamatebako"; better inline docs; remove "edit *" filter.

### 0.1.3
* Read more no longer using filter, now using template function.
* Better Accessibility Feature for Menus and Links
* bbPress and BuddyPress Support
* Update translation
* Better Default WP Title
* Update styling for readibility
* Separate load for reset(base) CSS and Menus CSS
* Fix Editor Style

### 0.1.2
* Better style
* Better read more

### 0.1.1
* Fix string function
* Fix css bug
* Add custom header image support

### 0.1.0
* Initial version
