@extends('layouts.app')
@section('content')
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
                <td><a href="#" class="btn btn-info overwrite" style="background-color:#FCB0BC;border-color:#FCB0BC;width:130px;height:70px;" doc-id="{!! $doc->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;width:130px;height:70px;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


<div id="editdoctor" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog modal-lg">
  
				
<!-- Modal content-->
    <div class="modal-content">
    
    </div>
  </div>
</div>

@endsection