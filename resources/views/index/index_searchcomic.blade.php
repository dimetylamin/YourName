@extends('index.index_masterHome')
@section('content')<div class="row">
    <div class="col-lg-8  w3-animate-left">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">
                            Comic search results</h5>
                    </div>
                    <div class="card-body">
                        <!-- nội dung -->
                        <div class="row" style="margin-bottom:10px">
                            @foreach($comic as $comic_item)
                            <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 margin_comic">
                                @include('subview.COMIC_VIEW')
                            </div>
                            @endforeach
                        </div>
                        <div class="row" style="float: right;">
                            {{$comic->links('vendor.pagination.bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4  w3-animate-right">
        @include('subview.history_comic')
        @include('subview.toptrending')
    </div>
</div>

@endsection