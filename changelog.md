## Changelog:

**1.3.0**
* update to Hybrid Core version 2.0.3
* update Tamatebako to version 2.0.0
* remove unused scripts and style. child theme should add it themselves (for version compatibility). sorry for this :(
* Editor Style now using minified stylesheet.
* Add [simple jQuery mobile browser detection](http://shellcreeper.com/simple-mobile-browser-detection-using-javascript/).
* CSS is merged to main stylesheet.
* Remove Grunt, make it clean.
* Make theme layout name translatable.

**1.2.2**
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

**1.2.1**
* Update minified.

**1.2.0**
* Use Grunt (private use): node_modules folder, package.json, and Gruntfile.js is not added in theme.
* Change stylesheet load method.
* add editor-style.css (reset.css + style.css)
* and theme.css (all css loaded in theme into one minified css)
* use POT file for translation, remove po and mo file.
* Fix mbile Sub-Menu Toggle (jQuery)
* Fix Pre element display (overflow) on mobile.
* Fix Editor Style (WP 4.0 Editor Auto resize feature).

**1.1.0**
* add license.txt
* update tamatebako to version 1.0.1
* fix media queries menu, and add dash 1st sub-menu too.
* update translation file.
* add class ".comments-section" to "#comments-template" in "comments.php"
* Update HC to version 2.0.1 + Tamatebako 1.1.0
* Update lang files

**1.0.0**
* Push to version 1.0.0
* now using [Semantic Versioning](http://semver.org/)

**0.1.4**
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

**0.1.3**
* Read more no longer using filter, now using template function.
* Better Accessibility Feature for Menus and Links
* bbPress and BuddyPress Support
* Update translation
* Better Default WP Title
* Update styling for readibility
* Separate load for reset(base) CSS and Menus CSS
* Fix Editor Style

**0.1.2**
* Better style
* Better read more

**0.1.1**
* Fix string function
* Fix css bug
* Add custom header image support

**0.1.0**
* Initial version