// Grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    compass = require('gulp-compass');
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    browserSync = require('browser-sync'); //リロード
    jshint = require('gulp-jshint'), //構文チェック
    stylish = require('jshint-stylish'), //をスタイリッシュに
    uglify = require('gulp-uglify'), //圧縮
    concat = require('gulp-concat'),　//まとめる
    rename = require('gulp-rename'), //minをつける
    plumber = require('gulp-plumber') //エラー中断を回避



var SCSS_FILE   = './library/scss/**/*.scss';


// Compile Sass, Autoprefix and minify
gulp.task('styles', function() {
  gulp.src([SCSS_FILE])
    .pipe(plumber(function(error) {
            gutil.log(gutil.colors.red(error.message));
            this.emit('end');
    }))

    .pipe(compass({
            config_file : 'config.rb',
            comments : false,
            css : './library/css/',
            sass: './library/scss/'
    }))
    .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(gulp.dest('./library/css/'))     
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('./library/css/'))

});    











// JSHint, concat, and minify JavaScript
gulp.task('scripts', function() {
   gulp.src([   
           // Grab your custom scripts
          './library/js/*.js'
  ])
    .pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./library/js/min'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./library/js/min'))
});    





//sync
gulp.task('browser-sync', function () {
    browserSync({
        proxy: "http://192.168.33.10/"
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});





gulp.task('default', ['browser-sync'], function () {


// Watch .scss files
  gulp.watch('./library/scss/**/*.scss', ['styles']);
gulp.watch('./library/scss/**/*.scss', ['bs-reload']);
  // Watch site-js files
  gulp.watch('./library/js/*.js', ['scripts']);
  gulp.watch(['*.php'], ['bs-reload']);
  gulp.watch(['./library/images/**/*'], ['bs-reload']);

});




