// ==== IMAGES ==== //

var gulp 	   = require('gulp'),
		changed  = require('gulp-changed'),
    imagemin = require('gulp-imagemin'),
  	config   = require('../gulpconfig');

// Copy changed images from the source folder to `build` (fast)
gulp.task('images', function() {
  return gulp.src( config.path.src + 'img/**/*(*.png|*.jpg|*.jpeg|*.gif|*.svg)' )
  .pipe( changed( config.path.build + 'img/' ) )
  .pipe( gulp.dest( config.path.build + 'img/' ) );
});

// Optimize images in the `dist` folder (slow)
gulp.task('images-optimize', ['copy-theme'], function() {
  return gulp.src( [
    config.path.dist + '**/*(*.png|*.jpg|*.jpeg|*.gif|*.svg)',
    '!' + config.path.dist + 'screenshot.png'
  ] )
  .pipe( imagemin( {
    optimizationLevel: 7,
    progressive: true,
    interlaced: true
  } ) )
  .pipe( gulp.dest ( config.path.dist ) );
});
