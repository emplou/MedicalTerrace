@extends('layouts.app')
@section('content')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>
<br>
    <table class="table" id="list"  width="100%">
        <thead>
            <th>Equipment Name</th>
            <th>ID</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($equipment as $eq)
            <tr>
                <td>{!! $eq->eq_name !!}</td>
                <td>{!! $eq->id !!}</td>
                <td>{!! $eq->created_at !!}</td>
                <td><a href="#" class="btn btn-info overwrite_hospital" hosp-id="{!! $eq->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success ">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection