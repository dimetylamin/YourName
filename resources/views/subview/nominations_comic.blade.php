<script>
    $(document).ready(function() {
        $('.slider').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            arrows: true,
            prevArrow: "<img class='a-left control-c prev slick-prev' src='https://www.flaticon.com/svg/static/icons/svg/271/271220.svg'>",
            nextArrow: "<img class='a-right control-c next slick-next' src='https://www.flaticon.com/svg/static/icons/svg/271/271228.svg'>",
            speed: 400,
            pauseOnDotsHover: true,
            pauseOnHover: true,
            slidesToShow: 6,
            slidesToScroll: 6,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }, {
                    breakpoint: 0,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
    });
</script>
<div class="slider">
    @foreach($nominations_comic as $nominations_comic_item)
    <a href="{{route('comic_detail',['idcomic'=>$nominations_comic_item->comic_slug])}}">
        <img title="{{$nominations_comic_item->comic_name}}" class="card-img-top col" src="{{$nominations_comic_item->comic_thumb}}">
    </a>
    @endforeach
</div>