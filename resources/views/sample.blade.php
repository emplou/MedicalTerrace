@extends('layouts.app_hospital')
@section('content')
@include('modals.modal_edit_hospital')
<link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="lumino/js/bootstrap.min.js"></script>
<br>
    <table class="table" id="list"  width="100%">
        <thead>
            <th>Image</th>
            <th>Medical Institution</th>
            <th>Medical institution English</th>
            <th>Common Name</th>
            <th>ID</th>
            <th>Date Added</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($hospitals as $hosp)
<<<<<<< HEAD
<<<<<<< HEAD
            <!-- <tr>
=======
            <tr>
>>>>>>> e849eef... separate per page
=======
            <tr>
>>>>>>> e849eef808f74fa713956ba8f1bff8fa29fbe892
                <td><img src="{!! $hosp->image !!}" style="width:80px;height:80px;"></td>
                <td>{!! $hosp->medical_ins !!}</td>
                <td>{!! $hosp->name_phonic !!}</td>
                <td>{!! $hosp->common_name !!}</td>
                <td>{!! $hosp->hospital_id !!}</td>
                <td>{!! $hosp->created_at !!}</td>
                <td><a href="#" class="btn btn-info overwrite_hospital" style="background-color:#FCB0BC;border-color:#FCB0BC;min-width:130px;height:70px;" hosp-id="{!! $hosp->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;width:130px;height:70px;">コピーと新しい編集<br>Copy and new edit</a></td>
<<<<<<< HEAD
<<<<<<< HEAD
            </tr> -->
=======
            </tr>
>>>>>>> e849eef... separate per page
=======
            </tr>
>>>>>>> e849eef808f74fa713956ba8f1bff8fa29fbe892
        @endforeach
        </tbody>
    </table>

@endsection