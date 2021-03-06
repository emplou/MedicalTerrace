@extends('layouts.app')
@section('content')
@include('modals.modal_edit_illness')
@include('modals.modal_copy_add_illness')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>

    <table id="list" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Column</th>
            <th>Column Category</th>
            <th>Column Shoulder</th>
            <th>Column Phonetic</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($illness as $ill)
            <tr>
                <td>{!! $ill->ill_name !!}</td>
                <td>{!! $ill->ill_cat !!}</td>
                <td>{!! $ill->ill_shoulder !!}</td>
                <td>{!! $ill->ill_ph !!}</td>
                <td><a href="#" class="btn btn-info overwrite_illness" style="background-color:#FCB0BC;border-color:#FCB0BC;" il-id="{!! $ill->ill_id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success overwrite_illness_copy" il-id="{!! $ill->ill_id !!}" style="background-color:#6ebaba;border-color:#6ebaba;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection