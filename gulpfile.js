var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var pipeline = require('readable-stream').pipeline;

var path = 'wp-content/themes/maxthunberg-portfolio/';

gulp.task('compress', function () {
  return pipeline(
        gulp.src([
          path + 'js/scripts/*.js',
          path + 'js/components/animations.js',
          path + 'js/components/preloader.js',
          path + 'js/components/notifications.js',
          path + 'js/components/modals.js',
          path + 'js/components/menu.js',
          path + 'js/components/script.js'
        ]),
        concat('script.min.js'),
        uglify({
           mangle: {
              keep_fnames: true // keep function names
           },
           compress: {
              keep_fnames: true // keep function names
           }
        }),
        gulp.dest(path + 'js/')
  );
});
