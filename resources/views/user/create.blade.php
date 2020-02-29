@extends('master')
 @section('heading', 'User Data')
@section('content')
<div class=" col-md-12">
         @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{$message}}</p>
            </div>
          @endif
    <form method="post" class="" action="{{url('user')}}">
    <div align="right">
            <a href="{{route('user.index')}}" class="btn btn-color">Back</a>
            <br><br>
        </div> 
        
     {{csrf_field()}}
    
    <div class="row">
        
        <div class="col-md-3 form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name">Name</label>
            <input type="text" class="form-control border-color" name="name" id="name" style=""  placeholder="Enter name">
             {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group {{ $errors->has('fname') ? 'has-error' : ''}}">
            <label for="name">Father Name</label>
            <input type="text" class="form-control border-color" name="fname" id="fname" placeholder="Enter Father Name">
             {!! $errors->first('fname', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group {{ $errors->has('cnic') ? 'has-error' : ''}}">
            <label for="name">CNIC</label>
            <input type="text" class="form-control border-color" name="cnic" id="cnic" placeholder="Enter CNIC Number">
             {!! $errors->first('cnic', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3  form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
            <label for="name">Select Gender</label>
                <select class="form-control border-color" name="gender">
                    <option>select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
             {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-4  form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
            <label for="name">Phone Number</label>
            <input type="number" class="form-control border-color" name="phone" id="phone" placeholder="Enter Phone Number">
             {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
        </div>
         <div class="col-md-4 form-group {{ $errors->has('city') ? 'has-error' : ''}}">
            <label for="name">City</label>
            <input type="text" class="form-control border-color" name="city" id="city" placeholder="Enter City">
             {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
        </div>
         <div class="col-md-4 form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
            <label for="name">Profession</label>
            <input type="text" class="form-control border-color" name="profession" id="profession" placeholder="Enter Profession">
             {!! $errors->first('profession', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            <label for="name">Upload Image</label>
            <input  type="file" onChange="uploadProductImage(this); document.getElementById('image1').src = window.URL.createObjectURL(this.files[0]) "   accept="image/x-png,image/gif,image/jpeg"  class="form-control border-color" name="files" id="first_image" >
            <span id="" style="color:red"></span>
             <input type='hidden' id="first_image_hidden" name="first_image_hidden" />  
        </div>
        <div class="col-md-3 form-group">
        <br>
        <button type="submit" class="btn btn-color">Submit</button>
        </div>
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