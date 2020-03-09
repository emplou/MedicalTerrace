@extends('layouts.app')
@section('content')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>
<br>
    <table class="table" id="list"  width="100%">
        <thead>
            <th>Image</th>
            <th>Magazine Name</th>
            <th>ID</th>
            <th>Date Added</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($hospitals as $hosp)
            <tr>
                <td><img src="{!! $hosp->image !!}" style="width:80px;height:80px;"></td>
                <td>{!! $hosp->common_name !!}</td>
                <td>{!! $hosp->hospital_id !!}</td>
                <td>{!! $hosp->created_at !!}</td>
                <td><a href="#" class="btn btn-info overwrite_hospital" hosp-id="{!! $hosp->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success ">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection