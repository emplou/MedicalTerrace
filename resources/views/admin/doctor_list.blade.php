@extends('layouts.app')
@section('content')
@include('modals.modal_edit_doctor')
@include('modals.modal_copy_add_doctor')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>
<br>
    <table class="table" id="list" width="100%">
        <thead>
            <th>Image</th>
            <th>Alphabet Name</th>
            <th>Status</th>
            <th>Industry</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($doctors as $doc)
            <tr>
                <td><img src="{!! $doc->image !!}" style="width:80px;height:80px;"></td>
                <td>{!! $doc->alphabet_name !!}</td>
                <td>{!! $doc->status !!}</td>
                <td>{!! $doc->industry !!}</td>
                <td><a href="#" class="btn btn-info overwrite" doc-id="{!! $doc->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success overwrite_add" doc-id="{!! $doc->id !!}">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>




@endsection