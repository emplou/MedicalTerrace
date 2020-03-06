@extends('layouts.app')
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
           
        @endforeach
        </tbody>
    </table>

@endsection