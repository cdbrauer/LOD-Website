/************************
Gulp - Installation Instructions

To install Gulp globally:
$ npm install gulp -g

To install dependencies automatically (Requires up to data package.json):
$ npm install gulp --save-dev

To install dependencies manually (Ensure this list matches the plugins list below):
$ npm install gulp-compass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-uglify gulp-imagemin gulp-concat gulp-notify gulp-cache gulp-livereload gulp-util tiny-lr gulp-combine-media-queries gulp-useref gulp-run del gulp-if gulp-rename --save-dev
***********************/

// Load plugins
var gulp = require('gulp'),
  sass = require('gulp-sass'),
  autoprefixer = require('gulp-autoprefixer'),
  minifycss = require('gulp-minify-css'),
  jshint = require('gulp-jshint'),
  uglify = require('gulp-uglify'),
  imagemin = require('gulp-imagemin'),
  concat = require('gulp-concat'),
  gnotify = require('gulp-notify'),
  cache = require('gulp-cache'),
  gutil = require('gulp-util'),
  del = require('del'),
  cmq = require('gulp-combine-media-queries'),
  run = require('gulp-run'),
  useref = require('gulp-useref'),
  gulpif = require('gulp-if'),
  rename = require('gulp-rename'),
  baseUrl = ".";

/**
 * scripts
 **/

gulp.task('scripts', function() {
  return gulp.src(baseUrl + '/src/js/**/*.js')
    // .pipe(uglify())
    .pipe(gulp.dest(baseUrl + '/dest/js'))
    .pipe(gnotify({
      message: 'Scripts Build task complete',
      onLast: true
    }));
});

// Styles
gulp.task('styles', function() {

  return gulp.src(baseUrl + '/src/scss/*.scss')
    .pipe(sass())
    .on('error', function() {
      gnotify.onError().apply(this, arguments);
      this.emit('end');
    })
    .pipe(autoprefixer({
      browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']
    }))
    .pipe(cmq({ log: true })) // Combine the media queries
    .pipe(minifycss())
    .pipe(gulp.dest(baseUrl + '/dest/css'))
    .pipe(gnotify({
      message: 'Styles task complete',
      onLast: true
    }));
});

// Images
gulp.task('images', function() {
  return gulp.src(baseUrl + '/src/img/**/*')
    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest(baseUrl + '/dest/img'))
    .pipe(gnotify({
      message: 'Images task complete',
      onLast: true
    }));
});

// Videos
gulp.task('videos', function() {
  return gulp.src(baseUrl + '/src/vids/**/*')
    .pipe(gulp.dest(baseUrl + '/dest/vids'))
    .pipe(gnotify({
      message: 'Video task complete',
      onLast: true
    }));
});

// HTML
gulp.task('html', function() {
  return gulp.src(baseUrl + '/src/**/*.html')
    .pipe(gulp.dest(baseUrl + '/dest/'))
    .pipe(gnotify({
      message: 'HTML task complete',
      onLast: true
    }));
});

/* Build for repo */
gulp.task('build', ['moveJS', 'createMiniJS']);
// Clean build
gulp.task('cleanBuild', function(cb) {
  del([baseUrl + '/../backgroundVideo/*.js'], cb);
});
// Push to repo folder
gulp.task('moveJS', function() {
  return gulp.src(baseUrl + '/dest/js/backgroundVideo.js')
    .pipe(gulp.dest(baseUrl + '/../backgroundVideo/'))
    .pipe(gnotify({
      message: 'MoveJS task complete',
      onLast: true
    }));
});
// Create minify
gulp.task('createMiniJS', function() {
  return gulp.src(baseUrl + '/dest/js/backgroundVideo.js')
    .pipe(uglify())
    .pipe(rename('backgroundVideo.min.js'))
    .pipe(gulp.dest(baseUrl + '/../backgroundVideo/'))
    .pipe(gnotify({
      message: 'createMiniJS task complete',
      onLast: true
    }));
});

// Clean - Deletes all the files before recompiling to ensure no unused files remain
gulp.task('clean', function(cb) {
  del([baseUrl + '/dest/**'], cb);
});

// Default task
gulp.task('default', ['clean'], function() {
  gulp.start('styles', 'scripts', 'images', 'videos', 'html');
});


// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch(baseUrl + '/src/scss/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch([
    baseUrl + '/src/js/libraries/**/*.js',
    baseUrl + '/src/js/modules/**/*.js'
  ], ['scripts']);

  // Watch image files
  gulp.watch(baseUrl + '/src/img/**/*', ['images']);

  // Watch scripts files
  gulp.watch(baseUrl + '/src/**/*.js', ['scripts']);

  // Watch html files
  gulp.watch(baseUrl + '/src/**/*.html', ['html']);

  // Watch video files
  gulp.watch(baseUrl + '/src/vids/**/*', ['videos']);

});
