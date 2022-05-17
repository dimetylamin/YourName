@extends('index.index_masterHome')
@section('content')
<div class="row  w3-animate-top">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0">
                    @if($tag=='new_comic')
                    New Comic
                    @elseif($tag=='comic_trending')
                    Comic Trending
                    @else
                    Comic Completed
                    @endif
                </h5>
            </div>
            <div class="card-body row">
                @if($tag=='new_comic')
                <div class="col-4"><a href="{{route('comic_top',['val'=>'new_comic'])}}"><button type="button" class="btn btn-block btn-outline-success active">New Comic</button></a></div>
                <div class="col-4"><a href="{{route('comic_top',['val'=>'comic_trending'])}}"><button type="button" class="btn btn-block btn-outline-success">Trending</button></a></div>
                <div class="col-4"><a href="{{route('comic_top',['val'=>'comic_completed'])}}"><button type="button" class="btn btn-block btn-outline-success">Completed</button></a></div>
                @elseif($tag=='comic_trending')
                <div class="col-4"><a href="{{route('comic_top',['val'=>'new_comic'])}}"><button type="button" class="btn btn-block btn-outline-success">New Comic</button></a></div>
                <div class="col-4"><a href="{{route('comic_top',['val'=>'comic_trending'])}}"><button type="button" class="btn btn-block btn-outline-success active">Trending</button></a></div>
                <div class="col-4"><a href="{{route('comic_top',['val'=>'comic_completed'])}}"><button type="button" class="btn btn-block btn-outline-success">Completed</button></a></div>
                @else
                <div class="col-4"><a href="{{route('comic_top',['val'=>'new_comic'])}}"><button type="button" class="btn btn-block btn-outline-success">New Comic</button></a></div>
                <div class="col-4"><a href="{{route('comic_top',['val'=>'comic_trending'])}}"><button type="button" class="btn btn-block btn-outline-success">Trending</button></a></div>
                <div class="col-4"><a href="{{route('comic_top',['val'=>'comic_completed'])}}"><button type="button" class="btn btn-block btn-outline-success active">Completed</button></a></div>
                @endif
            </div>
            <div class="card-body">
                <div class="row" style="margin-bottom:10px">
                    @foreach($comic as $comic_item)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 margin_comic">
                        @include('subview.COMIC_VIEW')
                    </div>
                    @endforeach
                </div>
                <div style="float:right">
                    {{$comic->appends(request()->input())->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection