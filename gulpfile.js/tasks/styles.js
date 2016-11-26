// ==== STYLES ==== //

var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		cssnano      = require('gulp-cssnano'),
		sourcemaps   = require('gulp-sourcemaps'),
    config       = require('../../gulpconfig');

gulp.task('styles', function() {
  /* Where scss file come from */
  return gulp.src( config.path.src + 'scss/**/*.scss' )
  /* Init sourcemaps */
  .pipe( sourcemaps.init() )
  /* SASS Config */
  .pipe( sass( {
    includePaths: [
      config.path.src + 'scss/'
    ],
    precision: 6,
    onError: function(err) {
      return console.log(err);
    }
  } ) )
  /* Config for autoprefixer */
  .pipe( autoprefixer( {
    add: true,
    browsers: ['> 3%', 'last 2 versions', 'ie 9', 'ios 6', 'android 4']
  } ) )
  .pipe( cssnano() )
  .pipe( sourcemaps.write('./') )
  /* Where the dist file is put */
  .pipe( gulp.dest( config.path.build + 'css/' ) );
});
