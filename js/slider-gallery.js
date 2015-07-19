function initCarousel(type, $elem)
{
    var type = type || 1;

    switch (type) {
        case 1:
            var _left = {
                width: 267,
                height: 539,
                marginLeft: 0,
                marginTop: 100,
                marginRight: 100
            };
            var _right = {
                width: 267,
                height: 539,
                marginLeft: 100,
                marginTop: 100,
                marginRight: 0
            };

            var baseParams = {
                width: 1090,
                height: 700,
            };
            break;
        case 2:
            var _left = {
                width: 267,
                height: 539,
                marginLeft: 0,
                marginTop: 100,
                marginRight: -235
            };
            var _right = {
                width: 267,
                height: 539,
                marginLeft: -235,
                marginTop: 100,
                marginRight: 0
            };

            var baseParams = {
                width: 420,
                height: 700,
            };
            break;
    }

    var _center = {
        width: 348,
        height: 700,
        marginLeft: 0,
        marginTop: 0,
        marginRight: 0
    };
    var _outLeft = {
        width: 150,
        height: 100,
        marginLeft: 150,
        marginTop: 200,
        marginRight: -200
    };
    var _outRight = {
        width: 150,
        height: 100,
        marginLeft: -200,
        marginTop: 200,
        marginRight: 50
    };

    var params = {
        align: false,
        items: {
            visible: 3,
            width: 100
        },
        scroll: {
            items: 1,
            duration: 400,
            onBefore: function(data) {
                data.items.old.eq(0).animate(_outLeft);
                data.items.visible.eq(0).animate(_left);
                data.items.visible.eq(1).animate(_center);
                data.items.visible.eq(2).animate(_right).css({zIndex: 1});
                data.items.visible.eq(2).next().css(_outRight).css({zIndex: 0});

                setTimeout(function() {
                    data.items.old.eq(0).css({zIndex: 1});
                    data.items.visible.eq(0).css({zIndex: 2});
                    data.items.visible.eq(1).css({zIndex: 3});
                    data.items.visible.eq(2).css({zIndex: 2});
                }, 200);
            }
        }
    };

    $elem.carouFredSel($.extend(baseParams, params));
    $elem.children().eq(0).css(_left).css({zIndex: 2});
    $elem.children().eq(1).css(_center).css({zIndex: 3});
    $elem.children().eq(2).css(_right).css({zIndex: 2});
    $elem.children().eq(3).css(_outRight).css({zIndex: 1});
}

$(function() {
    // initCarousel(1, $('.carousel'));
    // initCarousel(2, $('.small-iphone-slider'));
    // initCarousel(1, $('.carousel-sing-up'));
    // initCarousel(1, $('.carousel-chats'));
    // initCarousel(1, $('.carousel-contacts'));
    // initCarousel(1, $('.carousel-groups'));
    // initCarousel(1, $('.carousel-dark'));
    // initCarousel(2, $('.carousel-sumsung-small'));
    // initCarousel(1, $('.carousel-sumsung'));
    // initCarousel(1, $('.carousel-sumsung-sing-up'));
    // initCarousel(1, $('.carousel-sumsung-chats'));

    // setTimeout(function() {
    //     $('a[data-tab-carousel]').on('click', function() {
    //         var $this = $(this);
    //         var type = $this.attr('data-tab-carousel-type');
    //         var $elem = $('.' + $this.attr('data-tab-carousel'));
            
    //         console.log(type);
            
    //         initCarousel(type, $elem);
    //     });
    // }, 100);
});

