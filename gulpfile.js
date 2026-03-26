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

function dev(done) {
    watch('src/scss/**/*.scss', css);
    watch('src/js/**/*.js', javascript);
    done();
}

exports.css = css;
exports.js = javascript;
exports.default = parallel(css, javascript, dev);