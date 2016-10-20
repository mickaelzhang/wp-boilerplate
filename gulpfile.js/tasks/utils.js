// ==== UTILITIES ==== //

var gulp        = require('gulp'),
    plugins     = require('gulp-load-plugins')({ camelize: true }),
    del         = require('del'),
    config      = require('../../gulpconfig');

// Totally wipe the contents of the `dist` folder to prepare for a clean build
gulp.task('wipe-dist', function() {
    // Clean this out before creating a new distribution copy
    return del([
        config.path.dist
    ]);
});

// Clean out junk files after build
gulp.task('clean-build', ['build', 'wipe-dist'], function() {
    return del([ // A glob pattern matching junk files to clean out of `build`; feel free to add to this array
        config.path.theme + '**/.DS_Store',
    ]);
});

// Copy files from the `build` folder to `dist/[project]`
gulp.task('copy-theme', ['clean-build'], function() {
    return gulp.src([
        config.path.theme + '**/*',
        '!' + config.path.theme + '**/*.map',
        '!' + config.path.theme + '**/composer.lock',
        '!' + config.path.theme + '{src,src/**}',
        '!' + config.path.theme + '{vendor,vendor/**}'
    ])
    .pipe(gulp.dest(
        config.path.dist + 'ressources/themes/' + config.theme.name + '/'
    ));
});
