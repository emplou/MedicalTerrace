@extends('layouts.app_sp')
@section('content')
@include('modals.modal_edit_special')
@include('modals.modal_copy_add_special')
@include('modals.modal_add_special')
@include('modals.modal_copy_special')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>
<div class="special-table">
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
        @foreach($special as $sp)
            <tr>
                <td><img src="{!! $sp->sp_img !!}" style="width:80px;height:80px;"></td>
                <td>{!! $sp->sp_title !!}</td>
                <td>{!! $sp->sp_mag !!}</td>
                <td>{!! $sp->sp_id !!}</td>
                @if ($sp->tracking_status == "1")
                <td>Draft</td>
                @elseif ($sp->tracking_status == "2")
                <td>Preview</td>
                @elseif ($sp->tracking_status == "3")
                <td>Approval Request</td>
                @elseif ($sp->tracking_status == "4")
                <td>Approve</td>
                @elseif ($sp->tracking_status == "5")
                <td>Release Reservation</td>
                @elseif ($sp->tracking_status == "6")
                <td>Release</td>
                @endif
                <td><a href="#" class="btn btn-info overwrite_special" sp-id="{!! $sp->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success overwrite_add_special" sp-id="{!! $sp->id !!}" >コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection