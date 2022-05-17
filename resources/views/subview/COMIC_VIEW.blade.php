<div class="image">
    <a title="{{$comic_item->comic_name}}" href="{{route('comic_detail',['idcomic'=>$comic_item->comic_slug])}}">
        <div class="comic-title">
            <center>
                <span class="new_chapter_view"><img style="width:17px;height:17px" src="{{URL::asset('icon/new.png')}}"> {{$comic_item->new_chapter}}</span>
                <i style="margin-right:2px" title="{{$comic_item->comic_view}}" class="far fa-eye"></i>
                <span class="new_chapter_view">{{$comic_item->comic_view}}</span>
            </center>
        </div>
        <img class="card-img-top" src="{{str_replace('https','http',$comic_item->comic_thumb)}}" alt="{{$comic_item->comic_name}}">
    </a>
</div>
<a title="{{$comic_item->comic_name}}" href="{{route('comic_detail',['idcomic'=>$comic_item->comic_slug])}}">
    <p>{{$comic_item->comic_name}}</p>
</a>