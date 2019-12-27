@extends('layouts.app')
@section('content')
    <table id="list" class="table table-striped table-bordered" width="100%">
        <thead>
            <th>Name</th>
            <th>Alphabet Name</th>
            <th>Industry</th>
            <th>Department</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#" class="btn btn-info" style="background-color:#FCB0BC;border-color:#FCB0BC;">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        </tbody>
    </table>

@endsection