<div class="row" style="padding-left:10px">
    @foreach($category as $category_item)
    <div class="col-4" style="padding:5px">
        <a href="{{route('category',['category_name'=>$category_item->name])}}">{{$category_item->name}}</a>
    </div>
    @endforeach
</div>