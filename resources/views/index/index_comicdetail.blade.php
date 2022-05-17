@extends('index.index_masterHome')
@section('content')
<div class="row">
    <section class="col-lg-8 w3-animate-left">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3 class="m-0">{{$comic->comic_name}}</h3>
                    <span style="font-style: italic;">[{{$comic->updated_at}}]</span>
                </center>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-sm-4 img_detail">
                    <img style="width:100%" src="{{str_replace('https','http',$comic->comic_thumb)}}" alt="img">
                    </div>
                    <div class="col-12 col-sm-8">
                        <div class="row">
                            <div class="col-4">
                                <i class="fas fa-user"></i>
                                Author
                            </div>
                            <div class="col-8">
                                @if(strlen($comic->comic_author)!=0)
                                {{$comic->comic_author}}
                                @else
                                Updating...
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <i class="fas fa-user"></i>
                                Artist
                            </div>
                            <div class="col-8">
                                @if(strlen($comic->comic_artist)!=0)
                                {{$comic->comic_artist}}
                                @else
                                Updating...
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-rss"></i>
                                Status
                            </div>
                            <div class="col-8">
                                Updating...
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-tags"></i>
                                Category
                            </div>
                            <div class="col-8">
                                @if(strlen($comic->comic_category_name)!=0)
                                {{$comic->comic_category_name}}
                                @else
                                Updating...
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-eye"></i>
                                View
                            </div>
                            <div class="col-8">
                                {{$comic->comic_view}}
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            @if(strlen($chapter_min)!=0)
                            <div class="col-6">
                                <a href="{{route('readchapter',['idcomic'=>$comic->comic_slug,'idchapter'=>$chapter_min->chapter_slug])}}">
                                    <button class="btn btn-block btn-outline-success">Read {{$chapter_min->chapter_name}}</button>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('readchapter',['idcomic'=>$comic->comic_slug,'idchapter'=>$chapter_max->chapter_slug])}}">
                                    <button class="btn btn-block btn-outline-success">New Chapter</button>
                                </a>
                            </div>
                            @else
                            <p style="margin: 0 auto; font-size:20px; margin-top:15px">This comic has not had any episodes</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-header">
                        <h5>
                            <i class="far fa-file-alt"></i>
                            Content
                        </h5>
                    </div>
                    <div class="card-body">
                        @if(strlen($comic->comic_description)!=0)
                        {{$comic->comic_description}}
                        @else
                        Updating...
                        @endif
                    </div>
                </div>
                <div style="margin-top:10px ;">
                    <div class="card-header">
                        <h5>
                            <i class="fas fa-list-ol"></i>
                            List Chapter
                        </h5>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Chapter</th>
                                <th>Release Date</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comic_chapter as $comic_chapter_item)
                            <tr>
                                <td><a href="{{route('readchapter',['idcomic'=>$comic_chapter_item->comic_slug,'idchapter'=>$comic_chapter_item->chapter_slug])}}">
                                        {{$comic_chapter_item->chapter_name}}</a>
                                </td>
                                <td class="timeupago">{{$comic_chapter_item->release_date}}</td>
                                <td class="timeupago">{{$comic_chapter_item->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- <div class="card-footer">
                        <button type="button" class="btn btn-block btn-outline-success"><i class="fas fa-plus" style="margin-right:5px;"></i>More</a></button>
                    </div> -->
                </div>
            </div>
    </section>
    <section class="col-lg-4 w3-animate-right">
        @include('subview.history_comic')
        @include('subview.toptrending')
    </section>
</div>
@endsection