const fileinclude = require('gulp-file-include');
const gulp = require('gulp');
const rename = require("gulp-rename");
const cleanCSS = require('gulp-clean-css');
const clean = require('gulp-clean');
const imagemin = require('gulp-imagemin');
 
 
gulp.task('clean', function () {
    return gulp.src('./dist', {read: false})
        .pipe(clean());
});

gulp.task('renameCss', function() {
  return gulp.src("./header_styles.css")
    .pipe(cleanCSS({debug: true}, (details) => {
      console.log(`${details.name}: ${details.stats.originalSize}`);
      console.log(`${details.name}: ${details.stats.minifiedSize}`);
    }))
    .pipe(rename("header_styles.html"))
    .pipe(gulp.dest("./"));
});

gulp.task('fileinclude', function() {
  return gulp.src(['index.php'])
    .pipe(fileinclude({
      prefix: '>>>',
      basepath: './'
    }))
    .pipe(gulp.dest('./dist'));
});

 
gulp.task('minify-css', () => {
  return gulp.src(['./*.css', '!header_styles.css'])
    .pipe(gulp.dest('./dist'));
});

gulp.task('minify-images', () => {
  return gulp.src('img/*')
    .pipe(imagemin({verbose: 'true'}))
    .pipe(gulp.dest('dist/img'))
});

gulp.task('copyFonts', () => {
  return gulp.src('./fonts')
    .pipe(gulp.dest('dist/'))
});


gulp.task('build', gulp.series('clean', 'renameCss', 'fileinclude', 'minify-css', 'minify-images', 'copyFonts', function (done) {
}));



// ###############################################
// 'use strict'

// var gulp        = require('gulp');
// var fileinclude = require('gulp-file-include');
// var uglify      = require('gulp-uglify');
// var browserSync = require('browser-sync');
// var concatCss	  = require('gulp-concat-css');
// var cssnano		  = require('gulp-cssnano');
// var rename		  = require('gulp-rename');


// var paths = {
//   css:  ['app/css/*.css'],
//   html: ['app/html/*.html', 'app/html/components/*.html'],
//   js:   ['app/js/*.js']
// };


// gulp.task('fileinclude', function() {
//   return gulp.src(['app/html/*.html', '!app/html/_*.html'])
//     .pipe(fileinclude({
//       prefix: '@@',
//       basepath: 'app/html'
//     }))
//     .pipe(gulp.dest('dist/'))
//     .pipe(browserSync.reload({stream: true}));
// });


// gulp.task('fileincludeJs', function() {
//   return gulp.src(['app/js/*.js', '!app/js/_*.js'])
//     .pipe(fileinclude({
//       prefix: '@@',
//       basepath: 'app/js'
//     }))
//     // .pipe(uglify())
//     .pipe(gulp.dest('dist/js/'))
//     .pipe(browserSync.reload({stream: true}));
// });

// gulp.task('concatCss', function () {
//   return gulp.src('app/css/*.css')
//     .pipe(concatCss("main.css"))
// 	  .pipe(cssnano())
// 	  .pipe(rename({suffix: '.min'}))
//     .pipe(gulp.dest('dist/css/'))
//     .pipe(browserSync.reload({stream: true}));
// });


// gulp.task('browser-sync', function() {
// 	browserSync({
// 		server: {
// 			baseDir: 'dist'
// 		}
// 	});
// });


// gulp.task('watch', ['browser-sync', 'concatCss', 'fileinclude', 'fileincludeJs'], function() {
// 	gulp.watch(paths.css, ['concatCss']);
// 	gulp.watch(paths.html, ['fileinclude', browserSync.reload]);
//   gulp.watch(paths.js, ['fileincludeJs']);
// });