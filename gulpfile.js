var gulp = require('gulp');
var sass = require('gulp-sass');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
	gulp.src('app/assets/less/main.less')
		.pipe(less())
		.pipe(autoprefixer('last 10 version'))
		.pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
	gulp.watch('app/assets/less/**/*.less', ['css']);
});

gulp.task('default', ['watch']);