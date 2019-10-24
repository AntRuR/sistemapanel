

      

// gulp
const gulp         = require('gulp'),
      // gutil        = require('gulp-util'),
      argv         = require('yargs').default('p','model').argv;

// stylus
const stylus       = require('gulp-stylus'),
      autoprefixer = require('gulp-autoprefixer'),
      livereload   = require('gulp-livereload');    

const exec         = require('child_process').exec;

const  writeFile   = require('write');

// paths
const folder           = `../${argv.p}`;
const panel_dir       = `${folder}/panel`;
const views_dir       = `${panel_dir}/views`; 
const views_src_dir       = `${views_dir}/src`;
const views_dist_dir       = `${views_dir}/dist`;
const css_dir       = `${panel_dir}/css`;
const stylus_dir      = `${css_dir}/stylus`;
const stylus_source      = `${stylus_dir}/css.styl`;



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
  console.log(command);
  exec(command, function(err, stdout, stderr) {
    // console.log(stdout);
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
const touch_task = () => {

  var filetouch = folder+'/touch.json';
  var touch=require(filetouch);
  var newtouch = ++touch.v;
  console.log("v:"+newtouch);
  writeFile.sync(filetouch, '{"v":"'+newtouch+'"}');

}



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

  gulp.parallel(stylus_task, jade2php_task, touch_task);

  gulp.watch(
      [
        stylus_dir+'/*.styl',
        stylus_dir+'/parts/*.styl'
      ]
    ,
    gulp.series(stylus_task,touch_task)
  );

  gulp.watch(
    views_src_dir+'/*.jade',
    jade2php_task
  );

}





exports.touch = touch_task;
exports.stylus = stylus_task;
exports.php = jade2php_task;
exports.watch = watch_task;
exports.default = watch_task;
