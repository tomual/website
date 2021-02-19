// BACKGROUNDS
$(".tiled").click(function(){
    $('body').css("background", "url(" + $(this).attr('src') + ") repeat fixed");
});
$("#reset").click(function(){
    $('body').css("background", "#99CCCC");
});


// BULLETS
$(".pixel").click(function(){
    var src = $(this).attr('src');
    src = src.replace('bullet/', 'bullet/bullets/');
    $('#pixel-demo').css("list-style-image", "url(" + src + ")");
});

$(".aa").click(function(){
    var src = $(this).attr('src');
    src = src.replace('bullet/', 'bullet/bullets/');
    $('#aa-demo').css("list-style-image", "url(" + src + ")");
});
