@extends('master')
@section('content')
<div class=" col-md-12">
    <h3 aling="center">Device  Data</h3>
    <br />
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{$message}}</p>
            </div>
          @endif
    <form method="post" class="" action="{{url('devices')}}">
         <div align="right">
            <a href="{{route('devices.index')}}" class="btn btn-primary">Back</a>
             <br><br>
        </div> 
       
     {{csrf_field()}}
      <div class="row">
        <div class="col-md-3 form-group {{ $errors->has('devicename') ? 'has-error' : ''}}">
            <label for="devicename">Device Name</label>
            <input type="text" class="form-control" name="devicename" id="device"  placeholder="Device name">
             {!! $errors->first('devicename', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group {{ $errors->has('imei') ? 'has-error' : ''}}">
            <label for="imei">IMEI</label>
            <input type="text" class="form-control" name="imei" id="imei" placeholder="Enter IMEI Number">
             {!! $errors->first('imei', '<p class="help-block">:message</p>') !!}
        </div>
         <div class="col-md-3 form-group {{ $errors->has('model') ? 'has-error' : ''}}">
            <label for="model">Modal</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Enter Model">
             {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group {{ $errors->has('issueto') ? 'has-error' : ''}}">
            <label for="model">Issue To</label>
            <input type="text" class="form-control" name="issueto" id="issueto" placeholder="Issue To">
             {!! $errors->first('issueto', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
</div>
@endsection