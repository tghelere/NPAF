const 	
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    // jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    clean = require('gulp-clean'),
    js = [
        './scripts/plugins/*.js',
        './scripts/main.js',
    ],
    stripCssComments = require('gulp-strip-css-comments'),
    cssmin = require('gulp-cssmin')
    cleanCss = require('gulp-clean-css'),
    gutil = require('gulp-util')


gulp.task('cleanCss', () => {
	return gulp.src('./assets/css/*.css')
	.pipe(clean())
})

gulp.task('cleanJs', () => {
	return gulp.src('./assets/js/*.js')
	.pipe(clean())
})

gulp.task('minify-sass', () => {
	return gulp.src('./sass/**/*.sass')
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))	
	.pipe(stripCssComments({all: true}))
	.pipe(cleanCss())
	.pipe(cssmin())	
	.pipe(gulp.dest('./assets/css/'))
})

// gulp.task('hint', () => {
// 	return gulp.src(js)
//         .pipe(jshint())
//         .pipe(jshint.reporter('default'))
// })

gulp.task('minify-js', ['cleanJs'], () => {
	return gulp.src(js)
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
        .pipe(gulp.dest('./assets/js/'))
})


gulp.task('watch', () => {
	// gulp.watch(js, ['hint'])
	gulp.watch(js, ['minify-js'])
	gulp.watch('./sass/**/*.sass', ['minify-sass'])	
	// gulp.watch('./img/**/*', ['imagemin'])	
	// gulp.watch('./img-style/**/*', ['imagemin-style'])	
})

gulp.task('default', [/*'mv-fonts',*/ 'minify-sass', 'minify-js', /*'hint', 'imagemin', 'imagemin-style',*/ 'watch'])