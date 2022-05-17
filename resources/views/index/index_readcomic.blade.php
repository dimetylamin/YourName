@extends('index.index_masterHome')
@section('content')
<center>
    <div class="col-12 col-md-10 col-lg-7 col-xl-6 row  w3-animate-top" style="margin-bottom:20px">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3 class="m-0">{{$comic->comic_name}}</h3>
                    <span style="font-style: italic;">[{{$comic->updated_at}}]</span>
                </center>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5 col-sm-4 img_detail">
                        <img style="width:100%" src="{{str_replace('https','http',$comic->comic_thumb)}}" alt="{{$comic->comic_name}}">
                    </div>
                    <div class="col-12 col-sm-8">
                        <div class="row">
                            <div class="col-4">
                                <span style="float: left;"><i class="fas fa-user"></i> Author</span>
                            </div>
                            <div class="col-8">
                                <span style="float: left;">@if(strlen($comic->comic_author)!=0)
                                    {{$comic->comic_author}}
                                    @else
                                    Updating...
                                    @endif</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <span style="float: left;"><i class="fas fa-user"></i>
                                    Artist</span>
                            </div>
                            <div class="col-8">
                                <span style="float: left;">@if(strlen($comic->comic_artist)!=0)
                                    {{$comic->comic_artist}}
                                    @else
                                    Updating...
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <span style="float: left;"><i class="fa fa-rss"></i>
                                    Status</span>
                            </div>
                            <div class="col-8">
                                <span style="float: left;">Updating...</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <span style="float: left;"><i class="fa fa-tags"></i> Category</span>
                            </div>
                            <div class="col-8">
                                <span style="float: left;">@if(strlen($comic->comic_category_name)!=0)
                                    {{$comic->comic_category_name}}
                                    @else
                                    Updating...
                                    @endif</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <span style="float: left;"><i class="fa fa-eye"></i>
                                    View</span>
                            </div>
                            <div class="col-8">
                                <span style="float: left;">{{$comic->comic_view}}</span>
                            </div>
                        </div>
                        <div class="col" style="margin-top:10px">
                            <p style="margin: 0 auto">Chapter you are reading: {{$chapter->chapter_name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($comic_page as $comic_page_item)
        <img class="image_page_load" src="http://localhost/YourName/public/reading?img={{$comic_page_item->img_src}}">
        @endforeach
    </div>
</center>
<script>
    function abc(aba) {
        window.location.href = aba.value;
    }
</script>
<div class="container" style="width:100%;position:fixed;bottom:10px;padding-right:20px">
    <div class="col-12 col-md-10 col-lg-7 col-xl-6 row" style="margin:auto">
        @if($chapter->chapter_slug==$min_chapter->chapter_slug)
        <div class="col-3">
            <button class="btn btn-block btn-outline-secondary disabled" style="float: left;margin:0 auto">Prev</button>
        </div>
        @else
        <a href="{{route('prev_comic',['idcomic'=>$comic->comic_slug,'orderchapter'=>$chapter->order])}}" class="col-3">
            <button class="btn btn-block btn-outline-success" style="float: left;margin:0 auto">Prev</button>
        </a>
        @endif
        <select id="list_chapter" onchange="abc(this)" style="width:100%; background:rgba(0,0,0,0.3); margin:0 auto" class="col-6">
            @foreach($listchapter as $listchapter_item)
            <option @if($chapter->chapter_slug==$listchapter_item->chapter_slug)
                selected
                @endif
                value="{{$listchapter_item->chapter_slug}}">{{$listchapter_item->chapter_name}}</option>
            @endforeach
        </select>
        @if($chapter->chapter_slug==$max_chapter->chapter_slug)
        <div class="col-3">
            <button class="btn btn-block btn-outline-secondary disabled" style="float: left;margin:0 auto">Next</button>
        </div>
        @else
        <a href="{{route('next_comic',['idcomic'=>$comic->comic_slug,'orderchapter'=>$chapter->order])}}" class="col-3">
            <button class="btn btn-block btn-outline-success" style="float: left;margin:0 auto">Next</button>
        </a>
        @endif
    </div>
</div>
@endsection