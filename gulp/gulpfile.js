

      

// gulp
const gulp         = require('gulp'),
      argv         = require('yargs').default('p','model').argv,
      gutil        = require('gulp-util');

// stylus
const stylus       = require('gulp-stylus'),
      autoprefixer = require('gulp-autoprefixer'),
      livereload   = require('gulp-livereload');    

const  writeFile   = require('write');


const folder           = `../${argv.p}`;
const panel_dir       = `${folder}/panel`;
const css_dir       = `${panel_dir}/css`;
const stylus_dir      = `${css_dir}/stylus`;
const stylus_source      = `${stylus_dir}/css.styl`;
const css_dist = `${css_dir}/css.css`
// var sass = require('gulp-sass');
// var concat = require('gulp-concat');
// var minifyCSS = require('gulp-minify-css');
// var version= require('./package.json');

//npm install gulp --save --only=dev
gulp.task('variables', ()=> {
    console.log(`folder ${folder}`);
    console.log(`panel_dir ${panel_dir}`);
    console.log(`css_dir ${css_dir}`);
    console.log(`stylus_dir ${stylus_dir}`);
    console.log(`stylus_source ${stylus_source}`);
    console.log(`css_dist ${css_dist}`);
});


// Stylus
gulp.task('stylus', () => {

    gulp.src(stylus_source)
      .pipe(stylus({
        'include css': true,
        'compress': false
      }))
      .pipe(autoprefixer()) 
      .pipe(gulp.dest(css_dir))
      .pipe(livereload());
  
});

// gulp.task('sass', function(){
//   return gulp.src('scss/**/*.scss')
//     .pipe(sass()) // Converts Sass to CSS with gulp-sass
//     .pipe(gulp.dest('public/stylesheets'))
// });

// //npm install gulp-concat

// gulp.task('style', function(){
//   return gulp.src('scss/**/*.scss')
//     .pipe(sass()) // Converts Sass to CSS with gulp-sass
//     .pipe(concat('style_main.css'))
//     .pipe(gulp.dest('public/stylesheets'))
// });


// //npm install gulp-minify-css

// gulp.task('style_min', function(){
//   return gulp.src('scss/**/*.scss')
//     .pipe(sass()) // Converts Sass to CSS with gulp-sass
//     .pipe(minifyCSS())
//     .pipe(concat('style_main_'+version.version+'.min.css'))
//     .pipe(gulp.dest('public/stylesheets'))
// });


//gulp watch

// gulp.task('watch', ['style_min'], function (){

//   gulp.watch('scss/**/*.scss', ['style_min']);

// });

// Touch
gulp.task('touch', () => {

  var filetouch = folder+'/touch.json';
  var touch=require(filetouch);
  var newtouch = ++touch.v;
  console.log("v:"+newtouch);
  writeFile.sync(filetouch, '{"v":"'+newtouch+'"}');

});


gulp.watch([
  comp_dir+'/**/*.styl',
  stylus_dir+'/*.styl',
  stylus_dir+'/**/*.styl',
  work_stylus_dir+'/**/*.styl',
  external_stylus
  ], 
  [
    'stylus',
    'touch',
  ]
);


module.exports = gulp