<head>
    <style>
        .findmargin {
            margin-right: 5px;
        }
    </style>
</head>
<div class="row">
    <section class="col-12">
        <div class="card">
            <div class="card-header">
                <p class="card-title m-0">Advanced find comic</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            @foreach($category as $category_item)
                            <div class="col-md-3 col-sm-4 col-xs-6 mrb10" >
                                <div class="genre-item" title="{{$category_item->slug}}">
                                    <input type="checkbox" data-id="{{$category_item->id}}">
                                    </span>{{$category_item->name}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row" style="margin-top:10px ;">
                            <div class="col-md-5">
                                <p>Number of chapter</p>
                            </div>
                            <div class="col-md-7">
                                <select style="width:100%" name="d" id="a">
                                    <option value="1">&gt; 0 chapter</option>
                                    <option value="50">&gt;= 50 chapter</option>
                                    <option value="100">&gt;= 100 chapter</option>
                                    <option value="200">&gt;= 200 chapter</option>
                                    <option value="300">&gt;= 300 chapter</option>
                                    <option value="400">&gt;= 400 chapter</option>
                                    <option value="500">&gt;= 500 chapter</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px ;">
                            <div class="col-md-5">
                                <p>Status</p>
                            </div>
                            <div class="col-md-7">
                                <select style="width:100%" name="d" id="a">
                                    <option value="all">All</option>
                                    <option value="complete">Complete</option>
                                    <option value="process">Process</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px ;">
                            <div class="col-md-5">
                                <p>Sorted by</p>
                            </div>
                            <div class="col-md-7">
                                <select style="width:100%" name="d" id="a">
                                    <option value="newchap">New chapter</option>
                                    <option value="newcomic">New comic</option>
                                    <option value="mostview">Most view</option>
                                    <option value="mostviewedmonth">Most viewed month</option>
                                    <option value="mostviewedweek">Most viewed week</option>
                                    <option value="mostviewedday">Most viewed day</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px ;">
                            <div class="col-6">
                                <button type="button" class="btn btn-block btn-outline-success"><i class="fas fa-search findmargin"></i>Find</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-block btn-outline-primary"><i class="fas fa-sync-alt findmargin"></i>Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>