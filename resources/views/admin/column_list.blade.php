@extends('layouts.app')
@section('content')
@include('modals.modal_edit_illness')
@include('modals.modal_copy_add_illness')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>

    <table id="list" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>イメージ</th>
            <th>タイトル</th>
            <th>フォルダ</th>
            <th>カテゴリー</th>
            <th>掲載誌</th>
            <th>ID</th>
            <th>ステイタス更新日</th>
            <th>編集</th>
        </thead>
        <tbody>
        @foreach($columns as $col)
            <tr>
                <td>{!! $col->column_name !!}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{!! $col->id !!}</td>
                <td>{!! $col->column_desc !!}</td>
                <td><a href="#" class="btn btn-info overwrite_illness" style="background-color:#FCB0BC;border-color:#FCB0BC;" il-id="{!! $col->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success overwrite_illness_copy" il-id="{!! $col->id !!}" style="background-color:#6ebaba;border-color:#6ebaba;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection