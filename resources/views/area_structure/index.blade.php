 @extends('master')
 @section('title', 'Area Structure')
@section('navheading', 'Heading')
 @section('heading', 'Area Structure')
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
                    <a href="{{route('area_structure.create')}}" class="btn btn-color"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    <br />
                    <br />
                </div>
                <h3>Teams</h3>
                @foreach($teams as $row)
                
                    
                        <a class="btn btn-color" style="width:25%;margin-top:20px;" href="">
                                
                                {{$row->t_name}}   
                                <br>
                                {{$row->address}}<br>
                                {{$row->assign_to}}
                            
                        </a>
                        
                
                @endforeach
                
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
  