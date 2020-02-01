@extends('layouts.app')
@section('content')

<div class="header-wrapper">
    <div class="left">
        <h2>子どもの夏の感染症<span>ID番号:S00000</span></h2>
        
    </div>
    <div class="right">
        <div>作成日<span>Date</span></div>
        <div class="select">
            <select>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
                <option>0000/00/00</option>
            </select>
        </div>
        <div>最終更新日<span>Update</span></div>
        <div class="select">0000/00/00</div>
    </div>
</div>
<hr />
<div class="form-container">
    <div class="form-progress">
        <ul>
            <li class="active">下書き<br><span>Draft</span></li>
            <li class="active">プレビュー<br><span>Preview</span></li>
            <li>承認依頼<br><span>Approval Request</span></li>
            <li>承認済<br><span>Approved</span></li>
            <li class="rel">公開予約<br><span>Release reservation</span></li>
            <li>公開中<br><span>Release</span></li>
        </ul>
    </div>
<div class="form-pads">
    {!! Form::open(['url' => '/save_hospital', 'method' => 'post', 'files' => true]) !!}

    <!-- Medical Institution -->
    <div class="form-group">
        <label class="control-label cols-15">医療機関名<br><span>Medical institution</span></label>
        <div class="cols-4">
            <input type="text" class="form-control" placeholder="例)メディカルテラスクリニック" name="medical_ins">
        </div>
    </div>

    <!-- Medical Institution English-->
    <div class="form-group">
        <label class="control-label cols-15">医療機関英語名<br><span>Medical institution</span></label>
        <div class="cols-4">
            <input type="text" class="form-control" placeholder="例)medical terrace clinic" name="medical_ins_eng">
        </div>
    </div>

    <!-- URL Generator -->
    <div class="form-group">
        <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
        <div class="cols-4">
            <input type="text" class="form-control" placeholder="例)medical_terrace_clinic" name="url_gen">
        </div>
    </div>

    <!-- Postal Code -->
    <div class="form-group">
        <label class="control-label cols-15">郵便番号<br><span>Postal code</span></label>
        <div class="cols-4">
            <input type="text" class="form-control" placeholder="例)medical_terrace_clinic" name="postal_code">
        </div>
    </div>


    <div id="locationField">
      <input id="autocomplete"
             placeholder="Enter your address"
             onFocus="geolocate()"
             type="text"/>
    </div>
    <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number" disabled="true"/></td>
        <td class="wideField" colspan="2"><input class="field" id="route" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" id="locality" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"/></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"/></td>
      </tr>
    </table>

<!-- =========================================== -->
        <div class="container">
   

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
            <!-- Department area -->
            <br>
            <div class="row">
                <div class="col-2">
                診療科目<br>Medical subject
                </div>
                <div class="col-10">
                    <select class="form- " name="department" style="width:200px">
                        <option>Medical one</option>
                        <option>Medical two</option>
                        <option>Medical three</option>
                        <option>Medical four</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                診療科目別キャッチ<br>Subheading
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="med_subj_subheading" style="width:500px">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                診療科目別キャッチ<br>Subheading
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="med_subj_text_subheading_hospital" style="width:500px">
                    <input type="file" class="btn btn-info" name="department_image">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                診療科目別 外来受付時間<br>Examination date
                </div>
                <div class="col-10">
                    <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                    <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
                    診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~
                    月 <input type="checkbox" name="tag_season[]">
                    火 <input type="checkbox" name="tag_season[]">
                    水 <input type="checkbox" name="tag_season[]">
                    木 <input type="checkbox" name="tag_season[]">
                    金 <input type="checkbox" name="tag_season[]">
                    土 <input type="checkbox" name="tag_season[]">
                    日 <input type="checkbox" name="tag_season[]">
                    祝 <input type="checkbox" name="tag_season[]">
                    <br>
                    <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                    <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
                    診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~ 
                    月 <input type="checkbox" name="tag_season[]">
                    火 <input type="checkbox" name="tag_season[]">
                    水 <input type="checkbox" name="tag_season[]">
                    木 <input type="checkbox" name="tag_season[]">
                    金 <input type="checkbox" name="tag_season[]">
                    土 <input type="checkbox" name="tag_season[]">
                    日 <input type="checkbox" name="tag_season[]">
                    祝 <input type="checkbox" name="tag_season[]">
                    <br>
                    <input type="text" class="form- " name="exam_comment" style="width:200px"> ※受診内容により日・時間が異なる場合に記載
                    <br>
                    <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                    <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
                    診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~
                    月 <input type="checkbox" name="tag_season[]">
                    火 <input type="checkbox" name="tag_season[]">
                    水 <input type="checkbox" name="tag_season[]">
                    木 <input type="checkbox" name="tag_season[]">
                    金 <input type="checkbox" name="tag_season[]">
                    土 <input type="checkbox" name="tag_season[]">
                    日 <input type="checkbox" name="tag_season[]">
                    祝 <input type="checkbox" name="tag_season[]">
                </div>
            </div>
            <!-- End of Department area -->
            <br>
            <!-- Feature area -->
            <div class="row">
                <div class="col-2">
                特徴タイトル<br>Subheading
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="feature_title" style="width:500px">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                特徴本文<br>Text of Subheading
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="feature_text_subheading_hospital" style="width:500px">
                    <input type="file" class="btn btn-warning" name="feature_image">
                </div>
            </div>
            <!-- End of Feature Area -->
            <br>
            <!-- Equipment Area -->
            <div class="row">
                <div class="col-2">
                設備・機器<br>Equipment
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="equipment_subheading" style="width:500px">
                    <input type="text" class="form-control" name="equipment_text_subheading_hospital" style="width:500px">
                    <input type="file" class="btn btn-success" name="equipment_image">
                </div>
            </div>
            <!-- End for equipment area -->
            <br>
            <!-- Staff Area -->
            <div class="row">
                <div class="col-2">
                スタッフリード<br>Staff Subheading
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="staff_subheading_hospital" style="width:500px">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                スタッフコメント<br>Staff comment
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="staff_comment_hospital" style="width:500px">
                    <input type="file" class="btn btn-danger" name="staff_image">
                </div>
            </div>
            <!-- End of staff area -->
            <br>
            <div class="row">
                <div class="col-2">
                院内処方の有無<br>In-hospital prescription
                </div>
                <div class="col-10">
                    <input type="radio" class=" " name="pres"> 有 
                    <input type="radio" class=" " name="pres"> 一部有 
                    <input type="radio" class=" " name="pres"> 無 
                </div>
            </div>



        

        </div>
<div class="form-nopads">
    <!-- Editor Page -->
        <div class="editor-page">
            <div class="form-group">
                <label class="control-label cols-15">エディター担当者<br><span>Editor</span></label>
                <div class="cols-5">   
                    <input type="text" name="editor" class="form-control green" placeholder="Medical T. 編集部 A.Ito">&nbsp;&nbsp;&nbsp;
                </div>
                <div class="cols-2"><button type="button" class="btn-prime editor"></button></div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">メモ<br><span>Note</span></label>
                <div class="cols-5">   
                    <textarea class="form-control" rows="10" name="note"></textarea>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" name="save" value="" class="save-btn">
    <div id="totop" class="float-btn"></div>
    <div id="tobottom" class="float-btn"></div>
</div>
    {!! Form::close() !!}
</div>
    @endsection