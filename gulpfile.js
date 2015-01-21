var gulp=require("gulp");
var minifycss=require("gulp-minify-css");
var autoprefixer=require("gulp-autoprefixer");
gulp.task('css',function(){
return gulp.src("public/css/main.css")
		.pipe(autoprefixer("last 15 version"))
		.pipe(minifycss())
		.pipe(gulp.dest("public/css/min"));

});
gulp.task("default",function(){
	gulp.run("css");
});
