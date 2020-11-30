

<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url('js/tinymce/tinymce.min.js') ?>"></script>
<script src="<?php echo base_url('js/plugins.js') ?>"></script>
<script src="<?php echo base_url('js/main.js') ?>"></script>

<link rel="stylesheet" href="//dbrekalo.github.io/simpleLightbox/dist/simpleLightbox.min.css">
<script src="//dbrekalo.github.io/simpleLightbox/dist/simpleLightbox.min.js"></script>

<script type="text/javascript">
    var $items = $('.post img');
    var lightbox = $('a.thumbnail').simpleLightbox({
        nextOnImageClick: false,
        nextBtnClass: ' d-none',
        prevBtnClass: ' d-none',
    }).data('simpleLightbox');
    
    $items.on('click', function (e) {
        $.SimpleLightbox.open({
            items: [e.target.src]
        });
    });

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        var topDistance = $('body').offset().top;
        if ( (topDistance + 500) < scrollTop ) {
            if(!$('.table-of-contents:visible').length) {
                $('.table-of-contents').fadeIn();
            }
        } else {
            if($('.table-of-contents:visible').length) {
                $('.table-of-contents').fadeOut();
            }
        }
    });
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WH3SL76');</script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WH3SL76"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>