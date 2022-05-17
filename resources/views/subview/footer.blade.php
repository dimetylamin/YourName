<div class="footer_style w3-animate-opacity">
    <div class="row">
        @foreach($category as $category_item)
        <a href="{{route('category',['category_name'=>$category_item->name])}}" class="margin_tag">
            <span class="tag">{{$category_item->name}}</span>
        </a>
        @endforeach
    </div>
</div>