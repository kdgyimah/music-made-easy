/*jshint esversion: 6 */

const gulp   = require('gulp');
const sass   = require("gulp-sass");
const concat = require("gulp-concat");


gulp.task('css', function () {
    return gulp
        .src([
            './src/css/**/*.scss'
        ])
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(concat('king.css'))
        .pipe(gulp.dest('./assets/css'));
});


gulp.task('build', gulp.parallel(['css']));

gulp.task('serve', function() { gulp.watch("./src/css/**/*.scss", gulp.parallel(["css"])); });