@extends('master')
@section('content')   

<div class=" col-md-12">   
        <div class="row">
            <br />
            <h3>Edit Device Information</h3>
            <br />
                @if(count($errors) > 0)

                <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                @endif
        </div>
            <form method="post" action="{{action('DeviceController@update', $id)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group">
                <label for="name">Device Name</label>
                <input type="text" name="devicename" class="form-control" value="{{$device_info[0]->devicename}}" placeholder="Enter Device Name" />
            </div>
            <div class="form-group">
                <label for="name">IMEI</label>
                <input type="text" name="imei" class="form-control" value="{{$device_info[0]->imei}}" placeholder="Enter IMEI Number" />
            </div>
            <div class="form-group">
                <label for="name">Model</label>
                <input type="text" name="model" class="form-control" value="{{$device_info[0]->model}}" placeholder="Enter Model Name" />
            </div>
            <div class="form-group">
                <label for="name">Issue To</label>
                <input type="text" name="issueto" class="form-control" value="{{$device_info[0]->issue_to}}" placeholder="Issue to" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
  </div>    
  <script>

@endsection