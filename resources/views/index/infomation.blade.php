@extends('index.index_masterHome')
@section('content')
<section class="content">
    <div class="error-page" style="color:black">
        <h2 class="headline text-warning"> 404</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> {{$infomation}}.</h3>

            <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="{{route('home')}}">return to Home</a>
                or return to previous page.
            </p>

            <button type="button" id="return" class="btn btn-block btn-outline-warning">
                return to the previous page</button>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
</section>
<script>
    $(document).ready(function() {
        $('#return').click(function() {
            history.back();
        })
    })
</script>
@endsection