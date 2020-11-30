// BACKGROUNDS

$(".tiled").click(function(){
    $('body').css("background", "url(" + $(this).attr('src') + ") repeat fixed");
});
$("#reset").click(function(){
    $('body').css("background", "#FFF");
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

// GALLERY

function lightbox(image)
{
    var shadow = document.getElementById('shadow');
    var lightbox = document.getElementById('lightbox');
    var lightboxImage = document.getElementById('lightbox-image');
    shadow.style.display = 'block';
    lightbox.style.display = 'inline-block';
    lightboxImage.style.display = 'inline-block';
    lightboxImage.src = image.src;
}

function closeLightbox()
{
    var shadow = document.getElementById('shadow');
    var lightbox = document.getElementById('lightbox');
    var lightboxImage = document.getElementById('lightbox-image');
    shadow.style.display = 'none';
    lightbox.style.display = 'none';
    lightboxImage.style.display = 'none';
    lightboxImage.src = '';
}

// TINYMCE

tinymce.init({
    selector: '.tinymce',
    width: 900,
    height: 500,
    plugins : 'link image lists',
    toolbar: 'undo redo | styleselect | bold italic underline strikethrough | link image | bullist numlist',
    menubar: false,
    statusbar: false,
    style_formats: [
        {title: 'Header', format: 'h2'},
        {title: 'Subheading', format: 'h3'},
        {title: 'Minor Heading', format: 'h4'}
    ]
});

var original;
$('img.preview').hover( function() {
    original = $(this).attr('src');
    $(this).attr('src', $(this).data('mouseover'));
}, function() {
    $(this).attr('src', original);
    original = '';
})