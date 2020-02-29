@extends('master')
@section('heading', 'Edit User Profile')
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
            <form method="post" action="{{url('user', $id)}}">
                <div align="right">
                    <a href="{{route('user.index')}}" class="btn btn-color">Back</a>
                    <br><br>
                </div>
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control border-color" value="{{$user_profile->name}}" placeholder="Enter  Name" />
            </div>
            <div class="col-md-3 form-group">
                <label for="name">Father Name</label>
                <input type="text" name="fname" class="form-control border-color" value="{{$user_profile->fname}}" placeholder="Enter Father Name" />
            </div>
            <div class="col-md-3 form-group">
                <label for="name">CNIC</label>
                <input type="text" name="cnic" class="form-control border-color" value="{{$user_profile->cnic}}" placeholder="Enter CNIC" />
            </div>
            <div class="col-md-3 form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                <label for="name">Select Gender</label>
                    <select class="form-control border-color"  name="gender">
                       <option value="Male" <?php if($user_profile->gender=="Male") echo 'selected="selected"'; ?>>Male</option>
                       <option value="Female" <?php if($user_profile->gender=="Female") echo 'selected="selected"'; ?>>Female</option>
                    </select>
                {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
             </div>
            <div class="col-md-4 form-group">
                <label for="name">Phone</label>
                <input type="text" name="phone" class="form-control border-color" value="{{$user_profile->phone}}" placeholder="Enter Phone number" />
            </div>
            <div class="col-md-4 form-group">
                <label for="name">City</label>
                <input type="text" name="city" class="form-control border-color" value="{{$user_profile->city}}" placeholder="Enter City" />
            </div>
            <div class="col-md-4 form-group">
                <label for="name">Profession</label>
                <input type="text" name="profession" class="form-control border-color" value="{{$user_profile->profession}}" placeholder="Enter Profession" />
            </div>
        </div>
        <div class="row">
            
                <div class="col-md-3 form-group">
                    <label for="name">Upload Image</label>
                    <input  type="file" onChange="uploadProductImage(this); document.getElementById('image1').src = window.URL.createObjectURL(this.files[0]) "   accept="image/x-png,image/gif,image/jpeg"  class="form-control border-color" name="files" id="first_image" >
                    <span id="" style="color:red"></span>
                    <input type='hidden' id="first_image_hidden" name="first_image_hidden" />  
                </div>
                @if($user_profile->image!='')
                <img src="{{ url('/uploads/users/'.$user_profile->image) }}" class="border-color"  id="image5" alt="your image" width="100" height="100"/>
                @else
                <img src="{{asset('/static/image.png')}}" id="image" class="border-color" alt="your image" width="100" height="100" />
                @endif
        </div>
        <div class="row">
            <div class="form-group">
                <input type="submit" class="btn btn-color" value="Edit" />
            </div>
        </form>
  </div>    
 <script>
     function uploadProductImage(element){  
		//   debugger;
		var selectedItemId = '#'+$(element).attr('id');
        var file_data = $(selectedItemId).prop('files')[0];    
        var form_data = new FormData();   
        form_data.append('file', file_data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax
                ({  
                    
                    
                    url: "{{url('/upload/image')}}", 
                    type: "POST", 
                   
                    data:form_data,
                  
                    processData: false, 
                    contentType: false,
                    dataType: "text",  
                    success:function(data){  
						 //debugger;
						$(selectedItemId+'_hidden').val(data);
                    },
                    error: function (response) {
                    console.log(response);
                }
                });  
}; 
</script>

@endsection