const { src, dest, watch, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const terser = require('gulp-terser-js');

function css(done) {
    src('src/scss/**/*.scss')
        .pipe(sass())
        .pipe(dest('public/build/css'));
    done();
}

function javascript(done) {
    src('src/js/**/*.js')
        .pipe(terser())
        .pipe(dest('public/build/js'));
    done();
}

function imagenes(done) {
    src('src/img/**/*')
        .pipe(dest('public/build/img'));
    done();
}

function dev(done) {
    watch('src/scss/**/*.scss', css);
    watch('src/js/**/*.js', javascript);
    watch('src/img/**/*', imagenes); // <-- 1. Faltaba decirle a Gulp que vigile las imágenes
    done();
}

exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes; // <-- 2. Faltaba exportar la función

// 3. Faltaba meter "imagenes" dentro del parallel para que arranque al escribir 'gulp'
exports.default = parallel(css, javascript, imagenes, dev);