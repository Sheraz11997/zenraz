@if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{$message}}</p>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert alert-dander alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{$message}}</p>
    </div>
@endif

