// ==== WATCH ==== //

var gulp        = require('gulp'),
    plugins     = require('gulp-load-plugins')({ camelize: true }),
    config      = require('../../gulpconfig');

gulp.task('watch', ['build'], function() {
    gulp.watch(config.path.src + 'scss/**/*.scss', ['styles']);
    gulp.watch(config.path.src + 'js/**/*.js', ['scripts']);
    gulp.watch(config.path.src + 'img/**/*(*.png|*.jpg|*.jpeg|*.gif|*.svg)', ['images']);
});
