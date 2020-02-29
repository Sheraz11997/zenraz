 @extends('master')
 @section('title', 'User Info')
@section('navheading', 'Heading')
 @section('heading', 'User Profile')
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
                    <a href="{{route('user.create')}}" class="btn btn-color">Add</a>
                    <br />
                    <br />
                </div>
                <table id="myTable" class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>User Name</th>
                    <th>Father Name</th>
                    <th>CNIC No</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>City</th>
                    <th>Profession</th>
                    <th>Action</th>
                    
                </tr>
                @foreach($user_profile as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->fname}}</td>
                    <td>{{$row->cnic}}</td>
                    <td>{{$row->gender}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->city}}</td>
                    <td>{{$row->profession}}</td>
                    <td>
                        <a href="{{url('/view/user', $row->id)}}"  class="btn btn-warning btn-sm "><i class="fas fa-eye"></i></a>
                        <a href="{{url('user/edit', $row->id)}}" class="btn btn-color btn-sm"><i class="fas fa-pen"></i></span></a>
                        <a href="{{url('/delete/user', $row->id)}}" id="delete"  class="btn btn-danger btn-sm delete_form"><i class="fas fa-trash-alt "></i></a>
                        
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
       $("a.grouped_elements").fancybox();
        $("#ImageInput").change(function () {
            readURL(this);
        });
        $(document).on("click", ".close-icon", function () {
            ref = $(this).parent().data('ref');
            input = $("");
            $("input.afiles").each(function () {
                if (ref === $(this).val()) {
                    $(this).remove();
                }
            });
            $(this).parent().remove();
        });
    $('#delete').on('submit', function(){
        if(confirm("Are you sure you want to delete it?"))
        {
        return true;
        }
        else
        {
        return false;
        }
    });
} );
   </script>
@endsection
   </div>
  