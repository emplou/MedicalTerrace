@extends('layouts.app')
@section('content')
<br>
    <table id="list"  class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Illness</th>
            <th>Illness Category</th>
            <th>Illness Shoulder</th>
            <th>Illness Phonetic</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($illness as $ill)
            <tr>
                <td>{!! $ill->ill_name !!}</td>
                <td>{!! $ill->ill_cat !!}</td>
                <td>{!! $ill->ill_shoulder !!}</td>
                <td>{!! $ill->ill_ph !!}</td>
                <!-- <td></td> -->
                <td><a href="#" class="btn btn-info" style="background-color:#FCB0BC;border-color:#FCB0BC;" ill-id="{!! $ill->id !!}">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection