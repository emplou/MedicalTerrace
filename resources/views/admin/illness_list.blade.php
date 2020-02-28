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
            <th>Image</th>
            <th>Title</th>
            <th>Illness Category</th>
            <th>Magazine</th>
            <th>ID</th>
            <th>Status Update</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($illness as $ill)
            <tr>
                <td><img src="{!! $ill->ill_img !!} style="width:80px;height:80px;"></td>
                <td>{!! $ill->ill_name !!}</td>
                <td>{!! $ill->ill_cat !!}</td>
                <td>{!! $ill->ill_magazine !!}</td>
                <td>{!! $ill->ill_id !!}</td>
                @if ($ill->tracking_status == "1")
                <td>Draft</td>
                @elseif ($ill->tracking_status == "2")
                <td>Preview</td>
                @elseif ($ill->tracking_status == "3")
                <td>Approval Request</td>
                @elseif ($ill->tracking_status == "4")
                <td>Approve</td>
                @elseif ($ill->tracking_status == "5")
                <td>Release Reservation</td>
                @elseif ($ill->tracking_status == "6")
                <td>Release</td>
                @endif
                <td><a href="#" class="btn btn-info overwrite_illness" il-id="{!! $ill->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success overwrite_illness_copy" il-id="{!! $ill->id !!}">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection