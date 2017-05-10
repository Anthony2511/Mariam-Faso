// Définition des dépendances dont on a besoin pour exécuter les tâches
var
    gulp = require('gulp'),
    babel = require('gulp-babel'),
    imagemin = require('gulp-imagemin'), // Minifier for png, jpg, svg
    tiny = require('gulp-tinypng-nokey'), // Autre minifier mieux que imagemin pour JPG and PNG
    svgmin = require('gulp-svgmin'),
    destclean = require('gulp-dest-clean'),
    newer = require('gulp-newer'),
    size = require('gulp-size'), // Connaître la taille d'un fichier
    imacss = require('gulp-imacss'), // Convert image to DATAuri
    stylus = require('gulp-stylus'), // Preprocesseur stylus
    koutoSwiss = require('kouto-swiss'),
    autoprefixer = require('autoprefixer-stylus'),
    htmlclean = require('gulp-htmlclean'),
    preprocess = require('gulp-preprocess'),
    pkg = require('./package.json'),
    browserSync = require('browser-sync'),
    minify = require('gulp-minify'),
    concat = require('gulp-concat'), // Minificateur JS et COMB
    sourcemaps = require('gulp-sourcemaps'),
    csscomb = require('gulp-csscomb'), // formateur de codage css
    del = require('del');

// Définition de quelques variables générales pour notre gulpfile
var
    devBuild = ((process.env.NODE_ENV || 'development').trim().toLowerCase() !== 'production'),
    // export NODE_ENV=production pour définir la variable
    // echo $NODE_ENV pour afficher la valeur de la variable
    source = 'source/',
    dest = 'build/';

// Définition de quelques variables liées à nos tâches (options de tâches)
var
    imagesOpts = {
        in: source + 'images/*.*',
        out: dest + 'images/',
        watch: source + 'images/*.*'
    },
    svgOpts = {
        in: source + 'images/svg/*.svg',
        out: dest + 'images/svg/',
        watch: source + 'images/svg/*.svg'
    }
    imageUriOpts = {
        in: source + 'images/inline/*.*',
        out: source + 'stylus/images/',
        filename: '_datauri.styl',
        namespace: 'img'
    },
    cssStylus = {
      in: source + 'stylus/main.styl',
      watch: [source + 'stylus/**/*'],
      out: dest + 'css/'
    },

    jsOpts = {
        in: source + 'scripts/*.js',
        watch: [source + 'scripts/*.js'],
        out: dest + "scripts",
        context: {
            devBuild: devBuild
        }
    },

    syncOptions = {
      server: {
        baseDir: dest,
        index: 'index.html'
      },
      open: true,
      notify: true
    };

    function swallowError(error){
        console.log(error.toString());
        this.emit('end');
    }


// Définition des tâches
gulp.task('clean', function () {
    del([dest + '*']);
});

// add .pipe(tiny())

gulp.task('images', function () {
    return gulp.src(imagesOpts.in)
    /*.pipe(destclean(imagesOpts.out))*/
        .pipe(newer(imagesOpts.out))
        .pipe(size({title: 'Images size before compression: ', showFiles: true}))
        .pipe(tiny())
        .pipe(imagemin())
        .pipe(size({title: 'Images size after compression: ', showFiles: true}))
        .pipe(gulp.dest(imagesOpts.out));
});

gulp.task('js', function () {
    return gulp.src(jsOpts.in)
    .pipe( babel() )
    .pipe( gulp.dest( "scripts") );
});
gulp.task('svg', function () {
    return gulp.src(svgOpts.in)
        .pipe(destclean(svgOpts.out))
        .pipe(newer(svgOpts.out))
        .pipe(size({title: 'SVG size before compression:', showFiles: true}))
        .pipe(svgmin({
            plugins: [{
                removeTitle: true
            },
            {
                removeDesc: true
            },
            {
                removeViewBox: true
            }]
        }))
        .pipe(size({title: 'SVG size after compression: ', showFiles: true}))
        .pipe(gulp.dest('./build/images/svg/'));
});

gulp.task('imageuri', function () {
    return gulp.src(imageUriOpts.in)
        .pipe(imagemin())
        .pipe(imacss(imageUriOpts.filename, imageUriOpts.namespace))
        .pipe(gulp.dest(imageUriOpts.out));
});


gulp.task('stylus', function () {
   return gulp.src(cssStylus.in)
        .pipe(stylus({
            use: [autoprefixer('last 7 versions', 'ie 8'), koutoSwiss()],
        }))
        .on('error',swallowError)
        .pipe(csscomb())
        .pipe(gulp.dest(cssStylus.out))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('concat', function () {
           var jsConcat = gulp.src(jsOpts.in)

    if(!devBuild) {
            jsConcat = jsConcat
                    .pipe(sourcemaps.init())
                    .pipe(concat('main.js'))
                    .pipe(minify())
                    .pipe(sourcemaps.write({addComment: false}))
    }
    return jsConcat.pipe(gulp.dest(jsOpts.out));

});

gulp.task('browserSync', function() {
  browserSync(syncOptions);
});

// Tâche par défaut exécutée lorsqu’on tape juste *gulp* dans le terminal
gulp.task('default', ['images','js', 'stylus','browserSync', 'concat', 'svg'], function () {
    gulp.watch(jsOpts.watch, ['concat', browserSync.reload]);
    gulp.watch(imagesOpts.watch, ['images']);
    gulp.watch(svgOpts.watch, ['svg']);
    gulp.watch(cssStylus.watch, ['stylus']);
});
