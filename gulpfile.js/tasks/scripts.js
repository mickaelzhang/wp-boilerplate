// ==== SCRIPTS ==== //
var gulp     = require('gulp'),
		browserify = require("browserify"),
		babelify = require("babelify"),
		source = require('vinyl-source-stream'),
		gutil = require('gulp-util'),
		config   = require('../gulpconfig');

gulp.task('scripts', function() {
	browserify({ debug: true })
		.transform(babelify)
		.require(config.path.src+'js/main.js', { entry: true })
		.bundle()
		.on('error',gutil.log)
		.pipe(source('main.js'))
    .pipe(gulp.dest(config.path.build+'js'));
});
