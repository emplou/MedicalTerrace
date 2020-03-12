@extends('layouts.app')
@section('content')
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
        @foreach($daily as $dl)
            <tr>
                <td>{!! $dl->daily_name !!}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{!! $dl->id !!}</td>
                <td>{!! $dl->daily_desc !!}</td>
                <td><a href="#" class="btn btn-info overwrite_hospital" hosp-id="{!! $dl->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success ">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection