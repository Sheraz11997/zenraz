@extends('master')
@section('content')

<div class=" col-md-12">
        <div class="row">
            <br />
            <h3>Edit User Profile</h3>
            <br />
                @if(count($errors) > 0)

                <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                @endif
        </div>
            <form method="post" action="{{route('farmer.update', $farmer->id)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
                @include('farmer._partial')

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update" />
            </div>
        </form>
  </div>
  <script>

@endsection
