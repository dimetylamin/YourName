<div class="card">
    <div class="card-header">
        <h5 class="card-title m-0">Reading history</h5>
        <a href="{{route('delete_all_cookie')}}" style="float: right;">Remove all</a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-valign-middle">
            <tbody>
                @if($history!=null)
                @foreach($history as $history_item)
                <tr>
                    <td style="height: 100px; width:80px;">
                        <img src="{{$history_item->comic_thumb}}" style="width:100%; height:100%">
                    </td>
                    <td>
                        <a href="{{route('comic_detail',['idcomic'=>$history_item->id])}}">
                            <p title="{{$history_item->comic_name}}" class="style_name_top">{{$history_item->comic_name}}</p>
                        </a>
                        <a href="#">
                            <small style="float: left">{{$history_item -> chapter_name}}</small></a>
                    </td>

                    <td role="button" class="delete_history">
                        <a href="{{route('remove_cookie',['idcomic'=>$history_item->id])}}">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                @endif

            </tbody>
        </table>
    </div>
</div>