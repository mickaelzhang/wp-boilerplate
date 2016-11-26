var gulp        = require('gulp'),
    browsersync = require('browser-sync'),
    config      = require('../gulpconfig');

gulp.task('browsersync', ['build'], function() {
	browsersync({
		files: [
			config.path.theme+'**'
		],
    notify: true,
    open: true,
		browser: "google chrome",
    port: 3000,
    proxy: config.proxy,
    watchOptions: {
      debounceDelay: 2000
    }
	});
});
