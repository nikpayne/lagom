var gulp = require('gulp');

// plugins
var jshint = require('gulp-jshint');
var changed = require('gulp-changed');
var plumber = require('gulp-plumber');
var imagemin = require('gulp-imagemin');

var SRC = './src/js/main.js',
    DEST = 'dest';

// jshint: reports javacript errors, like a browser console might
gulp.task('jshint', function() {
  gulp.src('./src/js/*.js')
  .pipe(plumber())
  .pipe(jshint())
  .pipe(jshint.reporter('default'));
});

// changed: checks to see which files change, and pipes them to a folder
gulp.task('changed', function() {
  return gulp.src(SRC)
  .pipe(plumber())
  .pipe(changed(DEST))
  .pipe(gulp.dest(DEST));
});

gulp.task('compress-images', function() {
  return gulp.src('pre-img/*')
  .pipe(imagemin({ progressive: true }))
  .pipe(gulp.dest('images'));
});

// watch: watches the system for file changes
gulp.task('watch', function() {
  gulp.watch(SRC, ['changed']);
});

gulp.task('default', ['jshint', 'watch']);
