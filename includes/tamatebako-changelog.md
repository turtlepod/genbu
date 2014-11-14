## Tamatebako Changelog:

### 2.0.0
* Fix bug get theme file in debug mode.
* Fix php 5.2 error, utillity function is now in separate php file.
* Remove Head Script: ie8 css, ie9 css, HTML5SHIV js, Respond js. No longer support dinosaur browser. RWRRR!
* Remove Opera Mini body class.
* Remove all debug functionality.
* js status now using print instead of using js file.

### 1.2.2
* Fix RSS Error: change &ndash; to &#150; reported by Jon Evans ( http://tuxtweaks.com ) 24th Sept 2014, via email.
* Do not filter wp_title when viewing feed, but keep using numeric html entities anyway.

### 1.2.0
* Update debug MQ CSS
* No longer using hybrid_locate_theme_file(). use custom function tamatebako_theme_file();.
* Wrap content_error with content-entry-wrap div and use hard-coded div.
* Load min style on debug if regular file not exist.

### 1.1.0
* for HC 2.0.1
* remove dots from content more
* add more inline docs.
* HTML5 support now added via HC
* reset css: gallery icon img add hover opacity.
* fix fitvids load typo (css -> js)
* change priority for enqueue scripts action to 11
* register image loaded script (for masonry and other)
* register web font loader script.

### 1.0.0
* first stable release