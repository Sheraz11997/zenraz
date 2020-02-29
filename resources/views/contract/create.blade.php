@extends('master')
@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-7"><h3>Seasonal Contract Detail</h3></div>
            <div class="col-md-2">
                <button type="button" id="search" class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
    <div class=" col-md-12">

        <br />
        @include('includes/message')
        @include('includes/validation-errors')
        {!! Form::open(['route' => 'contract.store']) !!}
        <div align="left">
            <a href="{{route('contract.index')}}" class="btn btn-primary">Back</a>
            <br><br>
        </div>
        {!! Form::hidden('farmer_id', $farmerId); !!}
        @include('contract._partial')
        <div class="col-md-3 form-group">
            <br>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </div>

        {!! Form::close() !!}
    </div>
@endsection
