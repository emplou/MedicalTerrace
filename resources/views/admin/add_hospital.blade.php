@extends('layouts.app')
@section('content')

<!-- <div class="row">
  <div class="col-sm-8">col-sm-8</div>
  <div class="col-sm-4">col-sm-4</div>
</div> -->

{!! Form::open(['url' => '/save_hospital', 'method' => 'post', 'files' => true]) !!}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="container">
        <div class="row">
            <div class="col-2">
            URL自動生成名<br>URL generation
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="url_gen" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医療機関名<br>Medical institution
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="medical_ins" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医療機関英語名<br>Medical institution English
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="medical_ins_eng" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            Common name
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="common_name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            郵便番号<br>Postal code
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="postal_code" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            住所<br>Address
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="address" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            住所英語表記<br>Address English
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="address_english" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            アクセス<br>Access
            </div>
            <div class="col-10">
                <select class="form- " name="access_trans[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <input type="text" class="form- " name="access_from[]" style="width:200px">
                <input type="text" class="form- " name="access_mins[]" style="width:200px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            駐車場<br>Parking
            </div>
            <div class="col-10">
                項目 <input type="radio" name="p_radio" value="料金">
                費用 <input type="radio" name="p_radio" value="無料">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            問合せ電話番号<br>Inquiry phone number
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="phone_no" style="width:200px">
                <input type="text" class="form- " name="phone_no_one" style="width:200px">
                <input type="text" class="form- " name="phone_no_two" style="width:200px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            FAX<br>Facsimile
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="fax" style="width:200px">
                <input type="text" class="form- " name="fax_one" style="width:200px">
                <input type="text" class="form- " name="fax_two" style="width:200px">
                <input type="checkbox"> 非表示 | Not show
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            Email<br>Email address
            </div>
            <div class="col-10">
            <input type="text" class="form- " name="email" style="width:500px">
            <input type="checkbox"> 非表示 | Not show
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医院外観画像<br>Clinic appearance image 
            </div>
            <div class="col-10">
                <div class="input-group">
                    <input type="text" class="form-control" name="clinic_image_field">
                    <span class="input-group-btn">
                        <input type="file" value="参照... " class="btn btn-search" name="clinic_image">
                    </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            画像キャプション<br>Image Caption 
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="img_caption" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            画像alt<br>Image alt
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="img_alt" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医療機関キャッチ<br>Subheading
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="hosp_subheading" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            本文<br>Text of Subheading
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="text_subheading_hospital" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            区分<br>Division
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="division" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            診療科目一覧<br>Medical Subject List
            </div>
            <div class="col-10">
                <select class="form- " name="med_sbj_list[]" style="width:200px">
                    <option>Medical one</option>
                    <option>Medical two</option>
                    <option>Medical three</option>
                    <option>Medical four</option>
                </select>
                <select class="form- " name="med_sbj_list[]" style="width:200px">
                    <option>Medical one</option>
                    <option>Medical two</option>
                    <option>Medical three</option>
                    <option>Medical four</option>
                </select>
                <select class="form- " name="med_sbj_list[]" style="width:200px">
                    <option>Medical one</option>
                    <option>induMedicalstry two</option>
                    <option>Medical three</option>
                    <option>Medical four</option>
                </select><br>
                <select class="form- " name="med_sbj_list[]" style="width:200px">
                    <option>Medical one</option>
                    <option>Medical two</option>
                    <option>Medical three</option>
                    <option>Medical four</option>
                </select>
                <select class="form- " name="med_sbj_list[]" style="width:200px">
                    <option>Medical one</option>
                    <option>Medical two</option>
                    <option>Medical three</option>
                    <option>Medical four</option>
                </select>
                <select class="form- " name="med_sbj_list[]" style="width:200px">
                    <option>Medical one</option>
                    <option>Medical two</option>
                    <option>Medical three</option>
                    <option>Medical four</option>
                </select><br>
                <input type="text" class="form- " name="med_sbj_list_add[]" style="width:200px">
                <input type="text" class="form- " name="med_sbj_list_add[]" style="width:200px">
                <input type="text" class="form- " name="med_sbj_list_add[]" style="width:200px">
            </div>
        </div>

    <input type="submit" value="Save hospital">

    </div>
</div>
{!! Form::close() !!}

@endsection