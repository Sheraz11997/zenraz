@extends('master')
 @section('heading', 'Area Structure')
@section('content')
<div class=" col-md-12">
         @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{$message}}</p>
            </div>
          @endif
    <form method="post" class="" action="{{url('area_structure')}}">
    <div align="right">
            <a href="{{route('area_structure.index')}}" class="btn btn-color">Back</a>
            <br><br>
        </div> 
        
     {{csrf_field()}}
    
    <div class="row">
        
        <div class="col-md-3 form-group {{ $errors->has('team_name') ? 'has-error' : ''}}">
            <label for="name">Team Name</label>
            <input type="text" class="form-control border-color" name="team_name" id="team_name" style=""  placeholder="Enter team name">
             {!! $errors->first('team_name', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group {{ $errors->has('remarks') ? 'has-error' : ''}}">
            <label for="name">Remarks</label>
            <input type="text" class="form-control border-color" name="remarks" id="remarks" placeholder="Enter Remarks">
             {!! $errors->first('remarks', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group {{ $errors->has('address') ? 'has-error' : ''}}">
            <label for="name">Address</label>
            <input type="text" class="form-control border-color" name="address" id="address" placeholder="Enter Address">
             {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3  form-group {{ $errors->has('city') ? 'has-error' : ''}}">
            <label for="name">City</label>
            <input type="text" class="form-control border-color" name="city" id="city" placeholder="Enter City">
             {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
        </div>
         <div class="col-md-3 form-group {{ $errors->has('province') ? 'has-error' : ''}}">
            <label for="name">Province</label>
            <input type="text" class="form-control border-color" name="province" id="province" placeholder="Enter Province">
             {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
        </div>
         <div class="col-md-3 form-group {{ $errors->has('country') ? 'has-error' : ''}}">
            <label for="name">Country</label>
            <input type="text" class="form-control border-color" name="country" id="country" placeholder="Enter Country">
             {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-3 form-group ">
           <select class="easyui-combogrid " name="assign_to" style="width:100%" data-options="
                    panelWidth: 450,
                    idField: 'id',
                    textField: 'name',
                    url: '/fetch',
                    method: 'get',
                    columns: [[
                        {field:'id',title:'id',width:80},
                        {field:'name',title:'Name',width:120},
                        
                    ]],
                    fitColumns: true,
                    label: 'Assign To:',
                    labelPosition: 'top'
                ">
            </select>
        </div>
        <div class="col-md-3 form-group {{ $errors->has('crop') ? 'has-error' : ''}}">
            <label for="name">Crop</label>
            <input type="text" class="form-control border-color" name="crop" id="crop" placeholder="Enter Crop">
             {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
        <br>
        <input type="hidden" class="form-control border-color" name="name" id="name" value="team">
        <button type="submit" class="btn btn-color">Submit</button>
        </div>
    </div>
    </form>
    
</div>

@endsection