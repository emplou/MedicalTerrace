@extends('layouts.app')
@section('content')
@include('modals.modal_edit_hospital')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>
<br>
    <table class="table" id="list"  width="100%">
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
        @foreach($hospitals as $hosp)
            <tr>
                <td><img src="{!! $hosp->image !!}" style="width:80px;height:80px;"></td>
                <td>{!! $hosp->medical_ins !!}</td>
                <td>{!! $hosp->name_phonic !!}</td>
                <td></td>
                <td>{!! $hosp->common_name !!}</td>
                <td>{!! $hosp->id !!}</td>
                <td>{!! $hosp->created_at !!}</td>
                <td><a href="#" class="btn btn-info overwrite_hospital" hosp-id="{!! $hosp->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success ">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection