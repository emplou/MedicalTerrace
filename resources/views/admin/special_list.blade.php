@extends('layouts.app')
@section('content')
@include('modals.modal_edit_special')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>

    <table id="list" class="table table-striped table-bordered" width="100%">
        <thead>
            <th>特集タイトル</th>
            <th>特集ショルダー</th>
            <th>病気カテゴリー</th>
            <th>特集カテゴリー</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($special as $sp)
            <tr>
                <td>{!! $sp->sp_title !!}</td>
                <td>{!! $sp->sp_title_shldr !!}</td>
                <td>{!! $sp->sp_ill_cat !!}</td>
                <td>{!! $sp->sp_cat !!}</td>
                <td><a href="#" class="btn btn-info overwrite_special" class="btn btn-info" style="background-color:#FCB0BC;border-color:#FCB0BC;" sp-id="{!! $sp->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection