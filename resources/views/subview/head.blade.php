<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
<!-- Font Awesome Icons -->

<link rel="stylesheet" href="{{URL::asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="icon" href="{{URL::asset('image/artworks-000206574355-pe3hie-t500x500.jpg')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{URL::asset('dist/css/adminlte.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<link rel="stylesheet" href="{{URL::asset('Css/w3.css')}}">

<!-- <link rel="stylesheet" href="{{URL::asset('Css/css.css')}}"> -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script type="text/javascript" src="{{URL::asset('slick/slick.min.js')}}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/headroom.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/jQuery.headroom.min.js"></script>
<style>
    .marginfas {
        margin-right: 5px;
    }

    .chapter {
        font-size: 13px;
        display: block;
        margin-bottom: 5px;
    }

    .margin_comic {
        margin-bottom: 10px;
    }

    .backgroud_light {
        background-color: #e2e4e8;
    }

    .timeupago {
        color: gray;
        font-style: italic;
    }

    a {
        color: #9370D8;
    }

    a:hover {
        color: orange;
    }

    small {
        color: gray;
    }

    .img_detail {
        max-height: 280px;
        overflow: hidden;
        margin: 0 auto;
        margin-bottom: 10px;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 60px;
        right: 15px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: rgba(0, 0, 0, 0.2);
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 50%;
    }

    #myBtn:hover {
        background-color: grey;
    }

    .background_light {
        width: 100%;
        height: 100%;
        position: absolute;
        background:url("{{URL::asset('image/background-light.png')}}");
        background-size: cover;
        background-attachment: fixed;
    }

    .background_dark {
        width: 100%;
        height: 100%;
        position: absolute;
        background:url("{{URL::asset('image/background-dark.jpg')}}");
        background-size: cover;
        background-attachment: fixed;
    }

    .image_page_load {
        width: 100%;
        height: 100%;
    }

    .tag {
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 10px;
        padding-right: 10px;
        background-color: #EEEEEE;
        border-radius: 20px;
    }

    .image {
        width: auto;
        height: auto;
        position: relative;
        max-height: 230px;
        overflow: hidden;
    }

    .card-img-top {
        border-radius: 3px;
    }

    .comic-title {
        overflow: hidden;
        color: white;
        padding-left: 2px;
        padding-right: 2px;
        width: 100%;
        height: 24px;
        background: rgba(0, 0, 0, 0.4);
        position: absolute;
        bottom: 0px;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .delete_history:hover {
        color: red;
    }

    select {
        color: white;
    }

    .style_name_top {
        overflow: hidden;
        width: 100%;
        height: 42px;
    }

    .new_chapter_view {
        color: white;
        font-size: medium;
    }

    .margin_tag {
        margin-bottom: 10px;
        margin-right: 5px;
    }

    .footer_style {
        padding: 10px;
        margin-bottom: 35px;
    }

    .slick-arrow {
        width: 30px;
        height: 50px;
        /* background-color: rgba(0, 0, 0, 0.3); */
        padding-top: 3px;
        border-radius: 5px;
    }

    .arrow-light {
        background-color: white;
    }

    .arrow-dark {
        background-color: grey;
    }

    .slick-arrow:hover {
        background-color: white;
    }

    .headroom {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        right: 0;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .headroom--unpinned {
        top: -80px;
        -webkit-transition: .25s;
        -o-transition: .25s;
        -moz-transition: .25s;
        -ms-transition: .25s;
        transition: .25s;
        -webkit-transform: translateY(-80px);
        -o-transform: translateY(-80px);
        -moz-transform: translateY(-80px);
        -ms-transform: translateY(-80px);
        transform: translateY(-80px);
    }

    .headroom--pinned {
        top: 0;
        transition-timing-function: cubic-bezier(0.64, 0.57, 0.67, 1.53);
        -webkit-transition: .5s;
        -o-transition: .5s;
        -moz-transition: .5s;
        -ms-transition: .5s;
        transition: .5s;
    }
</style>