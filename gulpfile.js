var gulp = require('gulp');

// plugins
var jshint = require('gulp-jshint'),
    changed = require('gulp-changed'),
    plumber = require('gulp-plumber'),
    imagemin = require('gulp-imagemin'),
    compileSASS = require('gulp-sass'),
    minifyCSS = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

gulp.task('compile-js' , function() {
  return gulp.src('./src/js/*.js')
  .pipe(plumber())
  .pipe(uglify())
  .pipe(concat('app.js'))
  .pipe(gulp.dest('./assets/js'));
});

gulp.task('compile-css', function() {
  return gulp.src('./src/scss/*.scss')
  .pipe(plumber())
  .pipe(compileSASS())
  .pipe(minifyCSS({
    keepBreaks: true
  }))
  .pipe(gulp.dest('./assets/css'))
});

gulp.task('watch', function() {
  gulp.watch('./src/scss/*.scss', ['compile-css'] );
  gulp.watch('./src/js/*.js', ['compile-js'] );
});

gulp.task('connect-sync', function() {
  var toWatch = [
    './assets/app.css',
    './assets/app.js',
    './*.php'
  ]
  browserSync({
    proxy: 'localhost/painpoints'
  });
  gulp.watch('**/*.php').on('change', function () { browserSync.reload(); });
});

gulp.task('default', ['compile-css', 'compile-js', 'connect-sync'], function() {
  gulp.watch('./src/scss/*.scss', ['compile-css'] );
  gulp.watch('./src/js/*.js', ['compile-js'] );
});


//-----------------------------------------------------------

// jshint: reports javacript errors, like a browser console might
gulp.task('jshint', function() {
  gulp.src('./src/js/*.js')
  .pipe(plumber())
  .pipe(jshint())
  .pipe(jshint.reporter('default'));
});

// changed: checks to see which files change, and pipes them to a folder
gulp.task('changed', function() {
  return gulp.src('./src/js/*')
  .pipe(plumber())
  .pipe(changed('./assets/js'))
  .pipe(gulp.dest('./assets/js'));
});

// compresses images with imagemin to make them smaller
gulp.task('compress-images', function() {
  return gulp.src('./src/img/*')
  .pipe(plumber())
  .pipe(imagemin({ progressive: true }))
  .pipe(gulp.dest('./assets/img'));
});
