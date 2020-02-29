 @extends('master')
 @section('title', 'Device Info')
 @section('heading', 'Device Information')
        @section('content')
        <div class="row">
            <div class="col-md-12">
                     @if($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>{{$message}}</p>
                    </div>
                    @endif
                    <div align="right">
                    <a href="{{route('devices.create')}}" class="btn btn-primary">Add</a>
                    <br />
                    <br />
                </div>
                <table id="table_user" class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Device Name</th>
                    <th>IMEI</th>
                    <th>Model</th>
                    <th>Issue</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($device_info as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->devicename}}</td>
                    <td>{{$row->imei}}</td>
                    <td>{{$row->model}}</td>
                    <td>{{$row->issue_to}}</td>
                    <td><a href="{{action('DeviceController@edit', $row->id)}}" class="btn btn-warning">Edit</a></td>
                     <td>
                    <form method="post" class="delete_form" action="{{action('DeviceController@destroy', $row->id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
@endsection
   </div>
  