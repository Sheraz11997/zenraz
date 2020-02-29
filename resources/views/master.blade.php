<html>
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('jquery-easyui-1.8.8/themes/default/easyui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('jquery-easyui-1.8.8/themes/icon.css')}}">
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    
<body>
 @include('layouts.header')
 
  <!-- Begin Page Content -->
    <div class="row">
          <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 heading-color"> @yield('heading')</h1>
          </div>
         </div>
       
    </div>
  
        <div class="container">
        <br>
            @yield('content')
            
        </div>
    
    <!-- End of Main Content -->
      @include('layouts.footer')
</body>
</html>
<script src="{{asset('jquery-easyui-1.8.8/jquery.min.js')}}"></script>
 <script src="{{asset('jquery-easyui-1.8.8/jquery.easyui.min.js')}}"></script>
<script>

$(document).ready(function(){
    $('.delete_form').on('submit', function(){
    if(confirm("Are you sure you want to delete it?"))
    {
    return true;
    }
    else
    {
    return false;
    }
    });
});
</script>


