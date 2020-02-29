@extends('master')
@section('title', 'Farmer Info')
@section('heading', 'Contracted Farmer')
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
                <a href="{{route('contract.create')}}" id="add" class="btn btn-primary">Add</a>
                <br />
                <br />
            </div>
            <table id="myTable" class="table table-bordered table-striped">
            <tr>
                    <th>Sr</th>
                    <th>farmer_id</th>
                    <th>prove</th>
                    <th> file1</th>
                    <th>seed_variety</th>
                    <th>seed_price</th>
                    <th>file2</th>

            </tr>
                                @foreach($data as $row)
                                    <tr><td>{{$row->id}}</td>
                                        <td>{{$row->farmer_id}}</td>
                                        <td>{{$row->prove}}</td>
                                        <td>{{$row->file1}}</td>
                                        <td>{{$row->seed_variety}}</td>
                                        <td>{{$row->seed_price}}</td>
                                        <td>{{$row->file2}}</td>

                                        <td><a href="{{route('contract.store', $row->id)}}" class="btn btn-warning btn-sm">Prove</a>
{{--                                        <td><a href="contract/edit?id={{$row->farmer_id}}" class="btn btn-warning btn-sm">Edit</a>--}}
                                     <td><a href="{{route('contract.edit', $row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                            <form method="post" class="delete_form" action="{{route('contract.destroy', $row->id)}}">
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
<div>
    @endsection
    </div>
