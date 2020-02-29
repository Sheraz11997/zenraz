@extends('master')
@section('heading', 'User Profile View')
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
                    <a href="{{route('user.index')}}" class="btn btn-color">Back</a>
                    <br><br>
                </div> 
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="name">Name</label>
                    <input  type="text" name="name" class="form-control border-color" value="{{$user_profile[0]->name}}" readonly placeholder="Enter  Name" />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Father Name</label>
                    <input type="text" name="fname" class="form-control border-color" value="{{$user_profile[0]->fname}}" readonly placeholder="Enter Father Name" />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">CNIC</label>
                    <input type="text" name="cnic" class="form-control border-color" value="{{$user_profile[0]->cnic}}" readonly placeholder="Enter CNIC" />
                </div>
                <div class="col-md-3 form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                    <label for="name">Gender</label>
                    <input type="text" name="cnic" class="form-control border-color" value="{{$user_profile[0]->gender}}" readonly/>
                    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Phone</label>
                    <input type="text" name="phone" class="form-control border-color" value="{{$user_profile[0]->phone}}" readonly placeholder="Enter Phone number" />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">City</label>
                    <input type="text" name="city" class="form-control border-color" value="{{$user_profile[0]->city}}" readonly placeholder="Enter City" />
                </div>
                <div class="col-md-3 form-group">
                    <label for="name">Profession</label>
                    <input type="text" name="profession" class="form-control border-color" value="{{$user_profile[0]->profession}}" readonly placeholder="Enter Profession" />
                </div>
                <div class="col-md-3 form-group"> 
                    @if($user_profile[0]->image!='')
                    <img src="{{ url('/uploads/users/'.$user_profile[0]->image) }}" class="border-color"   id="image5" alt="your image" width="100" height="100"/>
                    @else
                    <img src="{{asset('/static/image.png')}}" id="image" class="border-color" alt="your image" width="100" height="100" />
                    @endif
                </div>
            </div>
        </form>
  </div>    
  <script>

@endsection