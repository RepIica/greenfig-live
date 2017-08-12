$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        navigation : false,
        slideSpeed : 800,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay : 5000,
        stopOnHover : true,
        pagination : false,
        transitionStyle : "fade"
    });

    $(".navlink").hover(function(){
        $(this).find(".in-nav-item").addClass("zoomIn animated").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
            function(){
                $(this).removeClass('zoomIn animated');
            });
    });
});

//scroll to trigger back to top button
var pxScrolled = 200;
var duration = 500;

$(window).scroll(function() {
    if ($(this).scrollTop() > pxScrolled) {
        $('.fab-container').css({'bottom': '0px', 'transition': '.3s'});
    } else {
        $('.fab-container').css({'bottom': '-72px'});
    } 
});

$('.top').click(function() {
    $('body').animate({scrollTop: 0}, duration);
});

//Initialize Swiper 
var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true
});
galleryTop.params.control = galleryThumbs;
galleryThumbs.params.control = galleryTop;

