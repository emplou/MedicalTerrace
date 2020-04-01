@extends('layouts.app_il')
@section('content')
@include('modals.modal_edit_illness')
@include('modals.modal_copy_add_illness')
@include('modals.modal_add_illness')
@include('modals.modal_copy_illness')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>

    <table id="list" class="table table-striped table-bordered" width="100%">
        <thead>
            <th>Illness</th>
            <th>Illness Category</th>
            <th>Illness Shoulder</th>
            <th>Illness Phonetic</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($illness as $ill)
            <tr>
                <td>{!! $ill->ill_name !!}</td>
                <td>{!! $ill->ill_cat !!}</td>
                <td>{!! $ill->ill_shoulder !!}</td>
                <td>{!! $ill->ill_ph !!}</td>
                <td><a href="#" class="btn btn-info overwrite_illness" il-id="{!! $ill->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success overwrite_illness_copy" il-id="{!! $ill->id !!}">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection