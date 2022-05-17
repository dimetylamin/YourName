<div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">New Comic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Trending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Completed</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-four-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                <table class="table table-striped table-valign-middle">
                    <tbody>
                        @foreach($comic_new as $comic_new_item)
                        <tr>
                            <td>
                                <div style="max-height:80px; width:55px; overflow:hidden">
                                    <a title="{{$comic_new_item->comic_name}}" href="{{route('comic_detail',['idcomic'=>$comic_new_item->comic_slug])}}"><img src="{{$comic_new_item->comic_thumb}}" style="width:100%" alt="{{$comic_new_item->comic_name}}"></a>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('comic_detail',['idcomic'=>$comic_new_item->comic_slug])}}">
                                    <p title="{{$comic_new_item->comic_name}}" class="style_name_top">{{$comic_new_item->comic_name}}</p>
                                </a>
                                <!-- <a href="#"> -->
                                <small style="float: left;">New: {{$comic_new_item->new_chapter}}</small>
                                <!-- </a> -->
                                <small style="float: right;"><i class="fas fa-eye marginfas"></i>{{$comic_new_item->comic_view}}</small>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('comic_top',['val'=>'new_comic'])}}"><button type="button" class="btn btn-block btn-outline-success"><i class="fas fa-plus"></i> More</button></a>
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                <table class="table table-striped table-valign-middle">
                    <tbody>
                        @foreach($hot_comic as $hot_comic_item)
                        <tr>
                            <td>
                                <div style="max-height:80px; width:55px; overflow:hidden">
                                    <a title="{{$hot_comic_item->comic_name}}" href="{{route('comic_detail',['idcomic'=>$hot_comic_item->comic_slug])}}"><img src="{{$hot_comic_item->comic_thumb}}" style="width:100%" alt="{{$hot_comic_item->comic_name}}"></a>

                                </div>
                            </td>
                            <td>
                                <a href="{{route('comic_detail',['idcomic'=>$hot_comic_item->comic_slug])}}">
                                    <p title="{{$hot_comic_item->comic_name}}" class="style_name_top">{{$hot_comic_item->comic_name}}</p>
                                </a>
                                <!-- <a href="#"> -->
                                <small style="float: left;">New: {{$hot_comic_item->new_chapter}}</small>
                                <!-- </a> -->
                                <small style="float: right;"><i class="fas fa-eye marginfas"></i>{{$hot_comic_item->comic_view}}</small>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('comic_top',['val'=>'comic_trending'])}}"><button type="button" class="btn btn-block btn-outline-success"><i class="fas fa-plus"></i> More</button></a>

            </div>
            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                <table class="table table-striped table-valign-middle">
                    <tbody>
                        @foreach($completed_comic as $completed_comic_item)
                        <tr>
                            <td>
                                <div style="max-height:80px; width:55px; overflow:hidden">
                                    <a title="{{$completed_comic_item->comic_name}}" href="{{route('comic_detail',['idcomic'=>$completed_comic_item->comic_slug])}}"><img src="{{$completed_comic_item->comic_thumb}}" style="width:100%" alt="{{$completed_comic_item->comic_name}}"></a>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('comic_detail',['idcomic'=>$completed_comic_item->comic_slug])}}">
                                    <p title="{{$completed_comic_item->comic_name}}" class="style_name_top">{{$completed_comic_item->comic_name}}</p>
                                </a>
                                <!-- <a href="#"> -->
                                <small style="float: left;">New: {{$completed_comic_item->new_chapter}}</small>
                                <!-- </a> -->

                                <small style="float: right;"><i class="fas fa-eye marginfas"></i>{{$completed_comic_item->comic_view}}</small>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('comic_top',['val'=>'comic_completed'])}}"><button type="button" class="btn btn-block btn-outline-success"><i class="fas fa-plus"></i> More</button></a>
            </div>
        </div>
    </div>
</div>