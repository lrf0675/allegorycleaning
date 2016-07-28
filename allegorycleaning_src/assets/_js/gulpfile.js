var gulp = require('gulp');
var spritesmith = require('gulp.spritesmith');

gulp.task('sprite', function() {
    var spriteData = 
        gulp.src('../img/sprite/*.*') // source path of the sprite images
            .pipe(spritesmith({
                imgName: '../img/sprite.png',
                cssName: '_sprite.scss',
                cssFormat: 'scss',
                cssVarMap: function(sprite) {
                    sprite.name = 'spr-' + sprite.name;
                }
            }));

    spriteData.img.pipe(gulp.dest('../img')); // output path for the sprite
    spriteData.css.pipe(gulp.dest('../_scss')); // output path for the CSS
});