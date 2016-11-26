// ==== SCRIPTS ==== //

var gulp     = require('gulp'),
    jshint   = require('gulp-jshint'),
		concat   = require('gulp-concat'),
		uglify   = require('gulp-uglify'),
  	config   = require('../gulpconfig');

// Check core scripts for errors
gulp.task('scripts-lint', function() {
  /**
   * Linting checks the quality of the code; we only lint custom scripts, not those under the various modules,
   * so we're relying on the original authors to ship quality code
   */
  return gulp.src([
    config.path.src + 'js/app/**/*.js',
    config.path.src + 'js/main.js'
  ])
  .pipe(jshint())
  .pipe(jshint.reporter('default')); // No need to pipe this anywhere
});

// Minify scripts in place
gulp.task('scripts-minify', ['scripts-lint'], function(){
  /* Order in which file are concatenate */
  return gulp.src( [
    config.path.src + 'js/_lib/**/*.js',
    config.path.src + 'js/app/**/*.js',
    config.path.src + 'js/main.js'
  ] )
  /* Name of the js file */
  .pipe( concat( 'main.js' ) )
  /* Where the file should be put */
  .pipe( gulp.dest( config.path.build + 'js/' ) )
  /* Uglify file */
  .pipe( uglify( {} ) )
  /* Where the file should be put */
  .pipe( gulp.dest( config.path.build + 'js/' ) );
});

gulp.task('scripts', ['scripts-minify']);
