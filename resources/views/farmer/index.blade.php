 @extends('master')
 @section('title', 'Farmer Info')
 @section('heading', 'Farmer Profile')
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
                    <a href="{{route('farmer.create')}}" id="add" class="btn btn-primary">Add</a>
                    <br />
                    <br />
                </div>
                <table id="myTable" class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Farmer Name</th>
                    <th>CNIC No</th>
                    <th>Territory/BPA</th>
                    <th>Owned Acerage</th>
                    <th>Leased Acerage</th>
                    <th>Total Acerage</th>
                    <th>SANIFA Acreage</th>
                    <th>Water Resources</th>
                    <th>Status</th>
                    <th>Contract</th>
                    <th>Action</th>
                </tr>

                @foreach($farmers as $row)

                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->cnic}}</td>
                    <td>{{$row->territorry}}</td>
                    <td>{{$row->owned_acreage}}</td>
                    <td>{{$row->leased_acreage}}</td>
                    <td>{{$row->total_acreage}}</td>
                    <td>{{$row->sanifa_acreage}}</td>
                    <td>{{$row->water_resources}}</td>
                    <td>No Values</td>
                    <td><a href="contract/create?id={{$row->id}}" class="btn btn-warning btn-sm">Contract</a>
                    <td><a href="{{route('farmer.edit', $row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <form method="post" class="delete_form" action="{{route('farmer.destroy', $row->id)}}">
                        {{csrf_field()}}
                        <br>
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
                </table>
            </div>
        </div>

@endsection
   </div>
