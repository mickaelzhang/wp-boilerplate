// ==== MAIN ==== //

var gulp = require('gulp');

// Default task
gulp.task('default', ['watch']);

// Build a working copy of the theme
gulp.task('build', ['images', 'scripts', 'styles', 'fonts']);

// Dist task chain: wipe -> build -> clean -> copy -> compress images
// NOTE: this is a resource-intensive task!
gulp.task('dist', ['images-optimize']);
