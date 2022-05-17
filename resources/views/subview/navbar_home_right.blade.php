<li class="nav-item">
    <a class="nav-link" id="switch_dark" style="padding-top:12px" role="button">
        <i id="darkmodeoff" class="fas 
        @if($mode=='light')
        fa-sun
        @else
        fa-moon
        @endif
        "></i>
    </a>
</li>
<!-- <li class="nav-item">
    <a class="nav-link" style="padding-top:10px ;" data-toggle="modal" data-target="#login" role="button">
        <i class="fas fa-user"></i>
    </a>
</li> -->
<script>
    $(document).ready(function() {
        $("#switch_dark").click(function() {
            if ($('body').hasClass('light-mode background_light')) {
                $('body').removeClass('light-mode background_light');
                $('nav').removeClass('navbar-light');
                $('.slick-arrow').removeClass('arrow-light')
                $('#darkmodeoff').removeClass('fa-sun')
                $('body').addClass('dark-mode background_dark');
                $('nav').addClass('navbar-dark navbar-navy');
                $('#darkmodeoff').addClass('fa-moon')
                $('.slick-arrow').addClass('arrow-dark')
                $.post("{{route('mode',['mode'=>'dark'])}}")
            } else {
                $('body').removeClass('dark-mode background_dark');
                $('nav').removeClass('navbar-dark navbar-navy');
                $('#darkmodeoff').removeClass('fa-moon')
                $('.slick-arrow').removeClass('arrow-dark')
                $('body').addClass('light-mode background_light');
                $('nav').addClass('navbar-light ');
                $('#darkmodeoff').addClass('fa-sun')
                $('.slick-arrow').addClass('arrow-light')
                $.post("{{route('mode',['mode'=>'light'])}}")
            }
        });
    });
</script>