


/*
 ________  ___  ________  _________  _______   _____ ______   ________  ________  ________  ________   _______   ___
|\   ____\|\  \|\   ____\|\___   ___\\  ___ \ |\   _ \  _   \|\   __  \|\   __  \|\   __  \|\   ___  \|\  ___ \ |\  \
\ \  \___|\ \  \ \  \___|\|___ \  \_\ \   __/|\ \  \\\__\ \  \ \  \|\  \ \  \|\  \ \  \|\  \ \  \\ \  \ \   __/|\ \  \
 \ \_____  \ \  \ \_____  \   \ \  \ \ \  \_|/_\ \  \\|__| \  \ \   __  \ \   ____\ \   __  \ \  \\ \  \ \  \_|/_\ \  \
  \|____|\  \ \  \|____|\  \   \ \  \ \ \  \_|\ \ \  \    \ \  \ \  \ \  \ \  \___|\ \  \ \  \ \  \\ \  \ \  \_|\ \ \  \____
    ____\_\  \ \__\____\_\  \   \ \__\ \ \_______\ \__\    \ \__\ \__\ \__\ \__\    \ \__\ \__\ \__\\ \__\ \_______\ \_______\
   |\_________\|__|\_________\   \|__|  \|_______|\|__|     \|__|\|__|\|__|\|__|     \|__|\|__|\|__| \|__|\|_______|\|_______|
   \|_________|   \|_________|


*/


/*
########  ######## ########  ######## ##    ## ########  ######## ##    ##  ######  #### ########  ######
##     ## ##       ##     ## ##       ###   ## ##     ## ##       ###   ## ##    ##  ##  ##       ##    ##
##     ## ##       ##     ## ##       ####  ## ##     ## ##       ####  ## ##        ##  ##       ##
##     ## ######   ########  ######   ## ## ## ##     ## ######   ## ## ## ##        ##  ######    ######
##     ## ##       ##        ##       ##  #### ##     ## ##       ##  #### ##        ##  ##             ##
##     ## ##       ##        ##       ##   ### ##     ## ##       ##   ### ##    ##  ##  ##       ##    ##
########  ######## ##        ######## ##    ## ########  ######## ##    ##  ######  #### ########  ######
*/
// gulp
const gulp         = require('gulp'),
      // gutil        = require('gulp-util'),
      argv         = require('yargs').default('p','model').argv,
      chalk        = require('chalk'),
      keys         = require('gulp-keylistener'),
      atg          = require('ascii-text-generator');

// stylus
const stylus       = require('gulp-stylus'),
      autoprefixer = require('gulp-autoprefixer'),
      livereload   = require('gulp-livereload');    
// babel
const babel        = require('gulp-babel');
// browserify;
const browserify   = require('browserify'),
      babelify     = require('babelify'),
      uglify       = require('gulp-uglify'),
      source       = require('vinyl-source-stream'),
      rollup       = require('rollup-stream'),
      buffer       = require('vinyl-buffer'),
      webpack      = require('webpack-stream');

const exec         = require('child_process').exec;

const  writeFile   = require('write');


/*
##     ##    ###    ########   ######
##     ##   ## ##   ##     ## ##    ##
##     ##  ##   ##  ##     ## ##
##     ## ##     ## ########   ######
 ##   ##  ######### ##   ##         ##
  ## ##   ##     ## ##    ##  ##    ##
   ###    ##     ## ##     ##  ######
*/

// paths
const folder         = `../${argv.p}`;
const panel_dir      = `../work-panel/source`;

const views_dir      = `${panel_dir}/views`; 
const css_dir        = `${panel_dir}/public/css`;
const js_dir         = `${panel_dir}/public/js`;

// jade
const views_src_dir  = `${panel_dir}/sources/jad`;
const views_dist_dir = `${views_dir}/dist`;

// stylus
const stylus_dir     = `${panel_dir}/sources/stylus`;
const stylus_source  = `${stylus_dir}/css.styl`;

// babel
const babel_dir      = `${panel_dir}/sources/babel`;
const babel_source   = `${babel_dir}/app.js`;











/*
 ######  ######## ##    ## ##       ##     ##  ###### 
##    ##    ##     ##  ##  ##       ##     ## ##    ##
##          ##      ####   ##       ##     ## ##
 ######     ##       ##    ##       ##     ##  ######
      ##    ##       ##    ##       ##     ##       ##
##    ##    ##       ##    ##       ##     ## ##    ##
 ######     ##       ##    ########  #######   ######
*/
const stylus_task = () => {

  touch_task('css');

  return gulp.src(stylus_source)
    .pipe(stylus({
      'include css': true,
      'compress': false
    }))
    .pipe(autoprefixer()) 
    .pipe(gulp.dest(css_dir))
    .pipe(livereload());

    
}


/*
      ##    ###    ########  ########  #######  ########  ##     ## ########
      ##   ## ##   ##     ## ##       ##     ## ##     ## ##     ## ##     ##
      ##  ##   ##  ##     ## ##              ## ##     ## ##     ## ##     ##
      ## ##     ## ##     ## ######    #######  ########  ######### ########
##    ## ######### ##     ## ##       ##        ##        ##     ## ##
##    ## ##     ## ##     ## ##       ##        ##        ##     ## ##
 ######  ##     ## ########  ######## ######### ##        ##     ## ##
*/
const jade2php_task = ()=>{

  const command = 'jade2php --pretty --omit-php-runtime --omit-php-extractor  ' + views_src_dir + '/*.jade  --out ' + views_dist_dir;
  console.log(chalk.bgMagenta(" building php views  .... "));
  // console.log(command);
  return exec(command, function(err, stdout, stderr) {
    console.log(stderr);
  });

}


/*
########  #######  ##     ##  ######  ##     ##
   ##    ##     ## ##     ## ##    ## ##     ##
   ##    ##     ## ##     ## ##       ##     ##
   ##    ##     ## ##     ## ##       #########
   ##    ##     ## ##     ## ##       ##     ##
   ##    ##     ## ##     ## ##    ## ##     ##
   ##     #######   #######   ######  ##     ##
*/
const touch_task = (some=null) => {

  var filetouch = folder+'/touch.json';
  var touch=require(filetouch);
  var newtouch = ++touch.v;
  console.log(chalk.bgRed(" building "+some+" .... ")+chalk.blue(" v:"+newtouch));
  writeFile.sync(filetouch, '{"v":"'+newtouch+'"}');

}


/*
##      ## ######## ########  ########     ###     ######  ##    ##
##  ##  ## ##       ##     ## ##     ##   ## ##   ##    ## ##   ##
##  ##  ## ##       ##     ## ##     ##  ##   ##  ##       ##  ##
##  ##  ## ######   ########  ########  ##     ## ##       #####
##  ##  ## ##       ##     ## ##        ######### ##       ##  ##
##  ##  ## ##       ##     ## ##        ##     ## ##    ## ##   ##
 ###  ###  ######## ########  ##        ##     ##  ######  ##    ##
*/
const webpack_task= () => {

  touch_task('webpack');

  return gulp.src(babel_source)
    .pipe(webpack({
      mode:'development',
      // mode:'production',
      module: {
        rules: [
          {
            test: /\.(js)$/,
            exclude: /node_modules/,
            use: ['babel-loader']
          }
        ]
      },      
      output: {
        filename: 'bundle.js'
      }
    }))
    .pipe(gulp.dest(`${js_dir}`))
    .pipe(livereload());

};


/*
##      ##    ###    ########  ######  ##     ##
##  ##  ##   ## ##      ##    ##    ## ##     ##
##  ##  ##  ##   ##     ##    ##       ##     ##
##  ##  ## ##     ##    ##    ##       #########
##  ##  ## #########    ##    ##       ##     ##
##  ##  ## ##     ##    ##    ##    ## ##     ##
 ###  ###  ##     ##    ##     ######  ##     ##
*/
const watch_task = () => {

  hello_task();

  livereload.listen();

  // stylus
  gulp.watch(
      [
        stylus_dir+'/*.styl',
        stylus_dir+'/parts/*.styl',
        stylus_dir+'/apps/*.styl'
      ]
    ,
    stylus_task
  );

  // babel
  gulp.watch(
    [
      babel_dir+'/**/*.js',
    ]
    ,
    webpack_task
  );  

  // jade
  gulp.watch(
    views_src_dir+'/*.jade',
    jade2php_task
  );

  /*
  keys((ch, key)=> {
    if (key.ctrl && key.name === 'p') {
      console.log('pppppp');
    }
  })
  */

}

/*
##     ## ######## ##       ##        #######
##     ## ##       ##       ##       ##     ##
##     ## ##       ##       ##       ##     ##
######### ######   ##       ##       ##     ##
##     ## ##       ##       ##       ##     ##
##     ## ##       ##       ##       ##     ##
##     ## ######## ######## ########  #######
*/
const hello_task = ()=>{
  
  return console.log(chalk.yellow(atg(argv.p,"3")));

}


exports.touch   = touch_task;
exports.stylus  = stylus_task;
exports.webpack = webpack_task;
exports.php     = jade2php_task;
exports.watch   = watch_task;
exports.default = gulp.series(stylus_task,webpack_task,jade2php_task,watch_task);

