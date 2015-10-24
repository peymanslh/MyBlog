// Gulp.js configuration

// include gulp and plugins
var
    gulp = require('gulp'),
    newer = require('gulp-newer'),
    preprocess = require('gulp-preprocess'),
    imagemin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    size = require('gulp-size'),
    del = require('del'),
    pkg = require('./package.json'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer');

// files location
var
    devBuild = ((process.env.NODE_ENV || 'development').trim().toLowerCase() !== 'production'),

    source = 'source/',
    dest = 'assets/',

    images = {
        in: source + 'images/*.*',
        out: dest + 'images/'
    },

    css = {
        in: source + 'scss/*.scss',
        watch: [source + 'scss/**/*'],
        out: dest + 'css/',
        sassOpts: {
            outputStyle: 'compressed',	//nested
            imagePath: '../images',
            precision: 3,
            errLogToConsole: true
        }
    },

    fonts = {
        in: source + 'fonts/*.*',
        out: dest + 'fonts/'
    };

js = {
    in: source + 'javascript/*.*',
    out: dest + 'javascript/'
};

// show build type
console.log(pkg.name + ' ' + pkg.version + ', ' + (devBuild ? 'development' : 'production') + ' build');

// clean the build folder
gulp.task('clean', function () {
    del([
        dest + '*'
    ]);
});


// manage images
gulp.task('images', function () {
    return gulp.src(images.in)
        .pipe(newer(images.out))
        .pipe(imagemin())
        .pipe(gulp.dest(images.out));
});

// copy fonts
gulp.task('fonts', function () {
    return gulp.src(fonts.in)
        .pipe(newer(fonts.out))
        .pipe(gulp.dest(fonts.out));
});

// Copy and minify javascript files
gulp.task('js', function () {
    return gulp.src(js.in)
        .pipe(newer(js.out))
        .pipe(size({title: 'JS in '}))
        .pipe(uglify())
        .pipe(size({title: 'JS out '}))
        .pipe(gulp.dest(js.out));
})

// compile Sass
gulp.task('sass', function () {
    return gulp.src(css.in)
        .pipe(size({title: 'SCSS in '}))
        .pipe(sass(css.sassOpts))
        .pipe(autoprefixer("last 1 version", "> 1%", "ie 8"))
        .pipe(size({title: 'CSS out '}))
        .pipe(gulp.dest(css.out));
});

// default task
gulp.task('default', ['js', 'sass', 'images', 'fonts'], function () {

    // js changes
    gulp.watch(js.in, ['js']);

    // sass changes
    gulp.watch(css.watch, ['sass']);

    // image changes
    gulp.watch(images.in, ['images']);

    // font changes
    gulp.watch(fonts.in, ['fonts']);

});
