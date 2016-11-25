var gulp  = require('gulp'),
	  plugins = require('gulp-load-plugins')({ camelize: true }),
	  config  = require('../../gulpconfig');

gulp.task('fonts', function() {
  return gulp.src( config.path.src + 'fonts/**/*(*.ttf|*.woff|*.woff2|*.eot)' )
  .pipe( plugins.changed( config.path.build + 'fonts/' ) )
  .pipe( gulp.dest( config.path.build + 'fonts/' ) );
});
