<li class="nav-item
@if($tag_nav=='home')
active
@endif
">
    <a href="{{route('home')}}" class="nav-link">
        Home
    </a>
</li>
<li class="nav-item 
@if($tag_nav=='category')
active
@endif
dropdown">
    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
        Category
    </a>
    <ul class="dropdown-menu border-0 shadow" style="width:375px; margin-bottom:10px">
        @include('subview.category')
    </ul>
</li>
<!-- <li class="nav-item">
    <a href="{{route('find')}}" class="nav-link">
        Find
    </a>
</li> -->
<div class="form-inline ml-0 ml-md-3">
    <form action="{{route('search')}}" method="get" style="margin: 0 auto; width:100%">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" style="color:#9370D8" type="search" placeholder="Search" aria-label="Search" name="input_search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>