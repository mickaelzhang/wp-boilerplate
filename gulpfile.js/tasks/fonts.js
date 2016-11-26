var gulp    = require('gulp'),
		changed = require('gulp-changed'),
	  config  = require('../gulpconfig');

gulp.task('fonts', function() {
  return gulp.src( config.path.src + 'fonts/**/*(*.ttf|*.woff|*.woff2|*.eot)' )
  .pipe( changed( config.path.build + 'fonts/' ) )
  .pipe( gulp.dest( config.path.build + 'fonts/' ) );
});
