var gulp = require('gulp');

// plugins
var jshint = require('gulp-jshint');

gulp.task('default', function() {
  // place code
});

gulp.task('jshint', function() {
  gulp.src('./src/js/main.js')
  .pipe(jshint())
  .pipe(jshint.reporter('default'));
});
