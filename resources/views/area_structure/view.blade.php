@extends('master')
@section('heading', 'Team View')
@section('content')   

<div class=" col-md-12">   
        <div class="row">
                @if(count($errors) > 0)

                <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                @endif
        </div>
            <form method="post" action="">
                <div align="right">
                    <a href="{{route('area_structure.index')}}" class="btn btn-color">Back</a>
                    <br><br>
                </div> 
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="name">Team Name</label>
                    <input  type="text" name="team_name" class="form-control border-color" value="{{$view_team->t_name}}" readonly  />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Remarks</label>
                    <input type="text" name="fname" class="form-control border-color" value="{{$view_team->remarks}}" readonly />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Address</label>
                    <input type="text" name="cnic" class="form-control border-color" value="{{$view_team->address}}" readonly />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">City</label>
                    <input type="text" name="phone" class="form-control border-color" value="{{$view_team->city}}" readonly  />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Province</label>
                    <input type="text" name="city" class="form-control border-color" value="{{$view_team->province}}" readonly  />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Country</label>
                    <input type="text" name="profession" class="form-control border-color" value="{{$view_team->country}}" readonly />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Assign To</label>
                    <input type="text" name="profession" class="form-control border-color" value="{{$view_team->assign_to}}" readonly />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Crop</label>
                    <input type="text" name="profession" class="form-control border-color" value="{{$view_team->crop}}" readonly  />
                </div>
            </div>
        </form>
  </div>    
  <script>

@endsection