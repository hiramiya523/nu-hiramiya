var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function() {
  gulp.watch('./sass/**/*.scss', gulp.task('sass'));
});

// 初版・2刷の方へ
// gulp v4 から上記の書き方に変更されています
// 本書P.51に乗っている gulp v3 の書き方
// gulp.task('sass:watch', function() {
//   gulp.watch('./sass/**/*.scss', ['sass']);
// });
