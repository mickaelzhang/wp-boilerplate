// ==== STYLES ==== //

var gulp          = require('gulp'),
    plugins       = require('gulp-load-plugins')({ camelize: true }),
    config        = require('../../gulpconfig');

gulp.task('styles', function() {
  /* Where scss file come from */
  return gulp.src( config.path.src + 'scss/**/*.scss' )
  /* Init sourcemaps */
  .pipe( plugins.sourcemaps.init() )
  /* SASS Config */
  .pipe( plugins.sass( {
    includePaths: [
      config.path.src + 'scss/'
    ],
    precision: 6,
    onError: function(err) {
      return console.log(err);
    }
  } ) )
  /* Config for autoprefixer */
  .pipe( plugins.autoprefixer( {
    add: true,
    browsers: ['> 3%', 'last 2 versions', 'ie 9', 'ios 6', 'android 4']
  } ) )
  .pipe( plugins.cssnano() )
  .pipe( plugins.sourcemaps.write('./') )
  /* Where the dist file is put */
  .pipe( gulp.dest( config.path.build + 'css/' ) );
});
