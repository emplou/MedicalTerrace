@extends('layouts.app')
@section('content')
<br>
    <table class="table" id="list"  width="100%">
        <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Medical institution English</th>
            <th>Address</th>
            <th>ID</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>Medical institution name</td>
                <td>Medical institution English</td>
                <td>Common namessss</td>
                <td>Address</td>
                <td>Surgical Department</td>
                <td><a href='{{ url("edit_hospital") }}' class="btn btn-info" style="background-color:#FCB0BC;border-color:#FCB0BC;">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        </tbody>
    </table>

@endsection