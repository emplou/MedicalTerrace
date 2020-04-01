@extends('layouts.app')
@section('content')

<!-- <h1>DASHBOARD </h1> -->
<div class="content-container home">
	<header>
		<h1 class="dashboard">ホーム <br><small> Home</small></h1>
		<div class="right">
			<img src="images/medical-logo.png" alt="">
		</div>
	</header>	
	<div class="sub-header">
		<div class="red">公開速報</div>
		<p>2019/07/18 Special 子どもの夏の感染症が投稿されました。</p>
	</div>
</div>



<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>
<br><br>
    <div class="second-heading">
        <h1>Medical T.編集部 A.Ito 執筆一覧</h1>
        <div class="add-buts">
            <div class="buts">特集 新規<br><span>Special new</span></div>
            <div class="buts">病名 新規<br><span>Illness new</span></div>
            <div class="buts">トピックス  新規<br><span>Topics new</span></div>
            <div class="buts">医師 新規<br><span>Doctor new</span></div>
            <div class="buts">病院 新規<br><span>Hospital new</span></div>
            <div class="buts">ピックアップ新規<br><span>Choose new</span></div>
        </div>
    </div>
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

