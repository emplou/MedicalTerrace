@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#edithospital">Edit Hospital Details</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#updatedpt">Update Department</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#updatemedsubj">Update Medical Subject</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#access">Update Access</button>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#accessdet">Edit Access Details</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#specialhours">Update Special Hours</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#updatemedsubj">Update Medical Subject</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#access">Update Access</button>
    </div>
</div>

<a href="#"><img scr="edit_department_image.png"> </a>
<a href="#"><img scr="edit_department_image.png"> </a>
<a href="#"><img scr="edit_department_image.png"> </a>
<a href="#"><img scr="edit_department_image.png"> </a>


<!-- Hospital Modal -->
<div class="modal fade" id="edithospital" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hospital Details</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-2">
            URL自動生成名<br>URL generation
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="url_gen" id="url_gen" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医療機関名<br>Medical institution
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="medical_ins" id="medical_ins" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医療機関英語名<br>Medical institution English
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="medical_ins_eng" id="medical_ins_eng" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            Common name
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="common_name" id="common_name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            郵便番号<br>Postal code
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="postal_code" id="postal_code" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            住所<br>Address
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="address" id="address" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            住所英語表記<br>Address English
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="address_english" id="address_english" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            アクセス<br>Access
            </div>
            <div class="col-10">
                <select class="form- " name="access_trans[]" id="access_trans" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <input type="text" class="form- " name="access_from[]" id="access_from" style="width:200px">
                <input type="text" class="form- " name="access_mins[]" id="access_mins" style="width:200px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            駐車場<br>Parking
            </div>
            <div class="col-10">
                項目 <input type="radio" name="p_radio" id="p_radio" value="料金">
                費用 <input type="radio" name="p_radio" id="p_radio" value="無料">
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
            <input type="text" class="form- " name="email" id="email" style="width:500px">
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
            <input type="text" class="form-control" name="img_caption" id="img_caption" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            画像alt<br>Image alt
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="img_alt" id="img_alt" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医療機関キャッチ<br>Subheading
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="hosp_subheading" id="hosp_subheading" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            本文<br>Text of Subheading
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="text_subheading_hospital" id="text_subheading_hospital" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            区分<br>Division
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="division" id="division" style="width:500px">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Department Modal -->
<div class="modal fade" id="updatedpt" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Department Details</h4>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Medical Subject Modal -->
<div class="modal fade" id="updatemedsubj" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Medical Subject Details</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Access Modal -->
<div class="modal fade" id="access" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Access</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Access Details Modal -->
<div class="modal fade" id="accessdet" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Access Details</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Department Special Examination Modal -->
<div class="modal fade" id="specialhours" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Special Hours Details</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Department Special Examination Modal -->
<div class="modal fade" id="specialhours" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Special Hours Details</h4>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

@endsection