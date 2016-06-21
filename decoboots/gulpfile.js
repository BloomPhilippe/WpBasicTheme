var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    minifycss = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util'),
    size = require('gulp-filesize'),
    browserify = require('gulp-browserify');

// css task
gulp.task('styles', function () {
    return gulp.src('scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(rename('main.css'))
        .pipe(minifycss())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('css/'))
        .on('end', function(){
            gutil.log(gutil.colors.yellow('♠ La tâche CSS est terminée.'));
        });
});

gulp.task('browserify', function() {
    // Single entry point to browserify
    gulp.src('js/main.js')
        .pipe(browserify({
          insertGlobals : true,
          debug : !gulp.env.production
        }))
        .pipe(gulp.dest('js/build'))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('js/build'))
        .pipe(size())
        .on('end', function(){
            gutil.log(gutil.colors.yellow('♠ La tâche JavaScript est terminée.'));
        });
});

gulp.task('watch', function()
{
  gulp.watch('scss/*.scss', ['styles']);
  gulp.watch('css/**/*.scss', ['styles']);
  gulp.watch('js/**/*.js', ['browserify']);
  gulp.watch('js/*.js', ['browserify']);
});

// default task
gulp.task('default', function() {
    gulp.start('watch');
});
