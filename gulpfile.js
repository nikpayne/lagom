var gulp = require('gulp');

// plugins
var jshint = require('gulp-jshint'),
    changed = require('gulp-changed'),
    plumber = require('gulp-plumber'),
    imagemin = require('gulp-imagemin'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
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
  .pipe(gulp.dest('./assets/js'))
  .pipe(browserSync.stream());
});

gulp.task('compile-css', function() {
  var onError = function (err) {
    gutil.beep();
    this.emit('end');
  };
  return gulp.src('./src/scss/app.scss')
  .pipe(plumber({ errorHandler: onError }))
  .pipe(sass({
    includePaths: [
      './bower_components/foundation/scss'
    ]
  }).on('error', sass.logError))
  .pipe(minifyCSS({
    keepBreaks: true
  }))
  .pipe(gulp.dest('./assets/css'))
  .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  gulp.watch('./src/scss/**/*.scss', ['compile-css'] );
  gulp.watch('./src/js/**/*.js', ['compile-js'] );
});

gulp.task('browser-sync', function() {
  browserSync({
    proxy: 'localhost/painpoints'
  });
  gulp.watch('**/*.php').on('change', function () { browserSync.reload(); });
});

gulp.task('default', ['browser-sync'], function() {
  gulp.watch(['./src/scss/partials/*.scss', './src/scss/*.scss'], ['compile-css'] );
  gulp.watch('./src/js/**/*.js', ['compile-js'] );
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
