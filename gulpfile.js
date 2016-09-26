var gulp = require('gulp'),
    sass = require('gulp-sass'),
    notify = require("gulp-notify"),
    uglify = require("gulp-uglifyjs"),
    bower = require('gulp-bower');

var config = {
    sassPath: './assets/sass',
    bowerDir: './bower_components'
}

gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest(config.bowerDir))
});

gulp.task('css', function() {
    return gulp.src(config.sassPath + '/style.scss')
        .pipe(sass({
            style: 'compressed',
            loadPath: [
                './sass',
                config.bowerDir + '/bootstrap-sass/assets/stylesheets'
            ]
        })
            .on("error", notify.onError(function (error) {
                return "Error: " + error.message;
            })))
        .pipe(gulp.dest('./dist/css'));
});

gulp.task('fonts', function() {
    return gulp.src([
            config.sassPath + '/fonts/*.eot',
            config.sassPath + '/fonts/*.svg',
            config.sassPath + '/fonts/*.ttf',
            config.sassPath + '/fonts/*.svg',
            config.sassPath + '/fonts/*.woff',
            config.sassPath + '/fonts/*.woff2'
        ])
        .pipe(gulp.dest('dist/fonts'));
});

gulp.task('icons', function() {
    return gulp.src(config.bowerDir + '/font-awesome/fonts/**.*')
        .pipe(gulp.dest('dist/fonts'));
});

gulp.task('img', function() {
    return gulp.src([
            './assets/img/*.svg',
            './assets/img/*.jpg',
            './assets/img/*.png',
            './assets/img/*.gif'
        ])
        .pipe(gulp.dest('dist/img'));
});

gulp.task('js', function() {
   return gulp.src([
           config.bowerDir + '/bootstrap-sass/assets/javascripts/bootstrap.min.js',
           config.bowerDir + '/jquery/dist/jquery.min.js',
           config.bowerDir + '/jquery-sticky/jquery.sticky.js'
   ])
       .pipe(gulp.dest('dist/js'));
});

gulp.task('uglify', function() {
    gulp.src('./assets/js/*.js')
        .pipe(uglify('app.min.js', {
            outSourceMap: true
        }))
        .pipe(gulp.dest('dist/js'))
});

// Rerun the task when a file changes
gulp.task('watch', function() {
    gulp.watch(config.sassPath + '/**/*.scss', ['css']);
});

gulp.task('default', ['bower', 'css', 'img', 'js', 'icons', 'uglify']);