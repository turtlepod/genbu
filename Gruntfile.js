module.exports = function(grunt) {

	/* Load all tasks */
	require('load-grunt-tasks')(grunt);

	/* Project Configuration */
	grunt.initConfig({

		/* === Read package.json === */
		pkg: grunt.file.readJSON('package.json'),

		/* === grunt-contrib-uglify : Minify Javascripts === */
		uglify: {
			alljs: {
				files: {
					'js/fitvids.min.js': ['js/fitvids.js'],
					'js/flexslider.min.js': ['js/flexslider.js'],
					'js/html5shiv.min.js': ['js/html5shiv.js'],
					'js/imagesloaded.min.js': ['js/imagesloaded.js'],
					'js/respond.min.js': ['js/respond.js'],
					'js/theme.min.js': ['js/theme.js'],
					'js/webfontloader.min.js': ['js/webfontloader.js'],
				}
			},
		}, // end grunt-contrib-uglify

		/* === grunt-contrib-cssmin : Minify CSS === */
		cssmin : {
			style: {
				src: 'style.css',
				dest: 'style.min.css'
			},
			mediaqueries: {
				src: 'media-queries.css',
				dest: 'media-queries.min.css'
			},
			allcss: {
				expand: true,
				cwd: 'css/',
				dest: 'css/',
				src: ['*.css', '!*.min.css', '!debug-media-queries.css'],
				ext: '.min.css'
			}
		}, // end grunt-contrib-cssmin


		/* ===== SAVE THEME AS ZIP FILE IN "_ZIP" FOLDER ===== */

		/* === grunt-contrib-clean : Delete everything in "_zip/{themename}" folder === */
		clean: {
			main: ['_zip/<%= pkg.name %>']
		}, // end grunt-contrib-clean

		/* === grunt-contrib-copy : Copy all theme files in "_zip/{themename}" folder === */
		copy: {
			main: {
				src: [
					'**',
					'!node_modules/**',
					'!_zip/**',
					'!.git/**',
					'!.svn/**',
					'!*.bat',
					'!Gruntfile.js',
					'!package.json',
					'!.gitignore',
					'!.gitmodules',
					'!**/Gruntfile.js',
					'!**/package.json',
					'!**/*~'
				],
			dest: '_zip/<%= pkg.name %>/'
		  }
		}, // end grunt-contrib-copy


		/* === grunt-contrib-compress : make zip file of "_zip/{themename}" folder to "_zip/{themename}.{version}.zip" === */
		compress: {
			main: {
				expand: true,
				cwd: '_zip/<%= pkg.name %>/',
				src: ['**/*'],
				dest: '<%= pkg.name %>/',
				options: {
					mode: 'zip',
					archive: './_zip/<%= pkg.name %>.<%= pkg.version %>.zip'
				},
			}
		}, // end grunt-contrib-compress

	}); //end Project Configuration

	/* Register Default Task: Do All */
	grunt.registerTask( 'default', [ 'uglify', 'cssmin', 'clean', 'copy', 'compress' ] );

	/* Register Minification Task */
	grunt.registerTask( 'minify', [ 'uglify', 'cssmin' ] );

	/* Register ZIP Build Task */
	grunt.registerTask( 'zip', [ 'clean', 'copy', 'compress' ] );

};