@extends('layouts.app')
@section('content')
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
            <tr>
                <td><img src="{!! $hosp->image !!}" style="width:80px;height:80px;"></td>
                <td>{!! $hosp->medical_ins !!}</td>
                <td>{!! $hosp->name_phonic !!}</td>
                <td>{!! $hosp->common_name !!}</td>
                <td>{!! $hosp->hospital_id !!}</td>
                <td>{!! $hosp->created_at !!}</td>
                <td><a href='{{ url("edit_hospital") }}' class="btn btn-info" style="background-color:#FCB0BC;border-color:#FCB0BC;width:130px;height:70px;">病院登録<br>Overwrite Editing</a> <a href="#" class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;width:130px;height:70px;">コピーと新しい編集<br>Copy and new edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection