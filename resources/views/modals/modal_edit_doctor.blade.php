<<<<<<< HEAD
@include('modals.modal_add_doctor')
<!-- Modal -->
<div id="editdoctor" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog edit">
=======
<!-- Modal -->
<div id="editdoctor" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog modal-lg">
>>>>>>> e849eef... separate per page
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
<h4 class="modal-title"><b>Edit Doctor</b></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<<<<<<< HEAD
    <div class="modal-body">
    <div class="header-wrapper">
        <div class="left">
            <h2>子どもの夏の感染症<span>ID番号:S00000</span></h2>
            <!-- <h2>{!! Auth::user()->name !!}<span>ID番号:S00000{!! Auth::user()->id !!}</span></h2> -->
            <div id="copyauthorID"></div>
            
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
    <div class="form-container  add">
        <div class="form-progress" width="100px">
            <ul>
                <li class="active">下書き<br><span>Draft</span></li>
                <li>承認依頼<br><span>Approval Request</span></li>
                <li>承認済<br><span>Approved</span></li>
                <li class="rel">公開予約<br><span>Post reservation</span></li>
                <li>公開中<br><span>Posted Complete</span></li>
            </ul>
        </div>
    <div class="form-pads">
      {!! Form::open(['url' => '/save_edit_doctor', 'method' => 'post', 'files' => true]) !!}
      <input type="hidden" name="docID" id="docID" value="">
      <input type="hidden" name="statusAuth" id="statusAuth" value="">
      <div class="form-group">
        <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
            <div class="cols-4">
            <input type="text" class="form-control" name="url_generation" id="url_generation"   style="width:300px">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label cols-15">職位<br><span>Position</span></label>
            <div class="cols-4">  
            <input type="text" class="form-control" name="status" id="status"   style="width:300px">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="sp10 cols-4">          
                <input type="text" class="form-control" id="sub_head1b two" placeholder="選択項目にない場合に入力" name="sub_position">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15">専門医・認定医<br>(取得資格)<br><span>Certificate</span></label>
            <div class="sp10 cols-6">
                <div id="input_container"></div>
                <div id="editcertificate"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success editaddcert1"><span class="lnr lnr-plus-circle"></span></button></div>
            
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label cols-15">氏名<br><span>Name</span></label>
            <div class="cols-4">
            <input type="text" class="form-control" name="name" id="name"  >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15">ローマ字（名・氏<br><span>Alphabet Name </span></label>
            <div class="cols-4">
            <input type="text" class="form-control" name="alphabet_name" id="alpha_name"  >
            </div>
        </div>
        <!-- <br>
        <div class="form-group">
            <div class="cols-2">
            プロフィール画像<br>Profile image 
            </div>
            <div class="cols-5">
                <div class="input-group">
                    <input type="text" class="form-control" name="profile_image_field" id="profile_image_field">
                    <span class="input-group-btn">
=======
      <div class="modal-body">
      {!! Form::open(['url' => '/save_edit_doctor', 'method' => 'post', 'files' => true]) !!}
      <input type="hidden" name="docID" id="docID" value=" ">
      <div class="row">
            <div class="col-2">
            URL自動生成名<br>URL generation
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="url_generation" id="url_generation" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            職位<br>Status
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="status" id="status" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            専門医・認定医<br>（取得資格）<br>Certificate
            </div>
            <div class="col-10">
                <!-- <input type="text" class="form- " name="certificate[]" id="certificate00" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate01" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate02" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate03" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate04" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate05" style="width:300px"> -->
                <div id="input_container"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            氏名<br>Name
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="name" id="name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            ローマ字（名・氏）<br>Alphabet Name 
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="alphabet_name" id="alpha_name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            プロフィール画像<br>Profile image 
            </div>
            <div class="col-10">
                <div class="input-group">
                    <input type="text" class="form-control" name="profile_image_field" id="profile_image_field">
                    <span class="input-group-btn">
                        <!-- <button class="btn btn-search" type="button"> 参照... </button> -->
>>>>>>> e849eef... separate per page
                        <input type="file" value="参照... " class="btn btn-search" name="profile_image">
                    </span>
                </div>
            </div>
<<<<<<< HEAD
        </div> -->

        <div class="form-group">
            <label class="control-label cols-15">プロフィール画像<br><span>Profile image </span></label>
            <div class="cols-45">          
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl" name="profile_image">
                <label class="custom-file-label" for="customFileLang">ドラッグ&ドロップ、または参照で画像を追加してください</label>
                </div>

            </div>
        </div>



        <div class="form-group">
            <label class="control-label cols-15"> 画像キャプション<br><span>Image Caption </span></label>
            <div class="cols-4">
            <input type="text" class="form-control" name="img_caption" id="img_caption"  >
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label cols-15"> 画像alt<br><span>Image Alt </span></label>
            <div class="cols-4">
            <input type="text" class="form-control" name="img_alt" id="img_alt"  >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15">業種<br><span>Industry</span></label>
            <div class="sp10 cols-4">    
=======
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            画像キャプション<br>Image Caption 
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
            業種<br>Industry
            </div>
            <div class="col-10">
>>>>>>> e849eef... separate per page
                <div id="input_industry"></div>
            </div>
        </div>
        <br>
<<<<<<< HEAD
        <div class="form-group">
            <label class="control-label cols-15">所属学会<br><span>Conference</span></label>
            <div class="sp10 cols-6">
                <!-- <input type="text" class="form- " name="conference[]" id="conference" style="width:300px"> -->
                <div id="input_conference"></div>
                <div id="editaddconference"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success editaddconf2"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-2">
            生年月日<br>Birthday
            </div>
            <div class="cols-5">
                <!-- <select id="b_year" name="b_year" class="form- " ></select>
                <select id="b_month" name="b_month" class="form- " >
=======
        <div class="row">
            <div class="col-2">
            所属学会<br>Conference
            </div>
            <div class="col-10">
                <!-- <input type="text" class="form- " name="conference[]" id="conference" style="width:300px"> -->
                <div id="input_conference"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            生年月日<br>Birthday
            </div>
            <div class="col-10">
                <!-- <select id="b_year" name="b_year" class="form- " style="width:100px"></select>
                <select id="b_month" name="b_month" class="form- " style="width:100px">
>>>>>>> e849eef... separate per page
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="0September9">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
<<<<<<< HEAD
                    <select id="length b_day" name="b_day" class="form- " ></select> -->
=======
                    <select id="length b_day" name="b_day" class="form- " style="width:100px"></select> -->
>>>>>>> e849eef... separate per page
                    <div id="bday_input"></div>
            </div>
        </div>
        <br>
<<<<<<< HEAD
        <div class="form-group">
            <div class="cols-2">
            出生地<br>Place of birth
            </div>
            <div class="cols-5">
=======
        <div class="row">
            <div class="col-2">
            出生地<br>Place of birth
            </div>
            <div class="col-10">
>>>>>>> e849eef... separate per page
                <input type="text" class="form- " name="place_birth" id="place_birth" style="width:200px">
                出身地 | Birthplace
                <input type="text" class="form- " name="" style="width:200px">
            </div>
        </div>
        <br>
<<<<<<< HEAD
        <div class="form-group">
            <div class="cols-2">
            経歴（学歴）<br>Career（学歴）
            </div>
            <div class="cols-5">
                    <div id="input_career_one"></div>
                    <div id="editc_ac"></div>
                    <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success editadd3"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-2">
            経歴（職歴）<br>Career（職歴）
            </div>
            <div class="cols-5">
                <div id="input_career_two"></div>
                <div id="editc_we"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success editadd44"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-2">
            経歴（賞・表彰）<br>Career（賞・表彰）
            </div>
            <div class="cols-5">
                <div id="input_career_three"></div>
                <div id="editc_aw"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success editadd55"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-2">
            最後の行に現在に至る　<br>最後の行に現在に至る
            </div>
            <div class="cols-5">
                <input type="checkbox" name="n_order" id="n_order_one" value="1"> OK <input type="checkbox" id="n_order" name="n_order" value="0"> NO 
            </div>

            <div class="sidediv cols-35">
                <!-- <div class="maxnum"><b id="charNum">&emsp;200</b> <b> / 200 </b> </div> -->
                <div class="sidebots">
                    <a class="prevbutton previewEditDoc" type="button" class="btn-prime" href="#previewAddDoctor">Preview</a>
                    <button type="button" class="btn-prime release1">Release</button>
                    <button type="button" class="btn-prime release2">Release</button>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-2">
            所属病院・勤務先<br>Hospital・Office
            </div>
            <div class="cols-5">
                <!-- <select class="form-control" name="hospital_office" id="hospital_office"  >
=======
        <div class="row">
            <div class="col-2">
            経歴（学歴）<br>Career（学歴）
            </div>
            <div class="col-10">
                    <div id="input_career_one"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            経歴（職歴）<br>Career（職歴）
            </div>
            <div class="col-10">
                <div id="input_career_two"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            経歴（賞・表彰）<br>Career（賞・表彰）
            </div>
            <div class="col-10">
                <div id="input_career_three"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            最後の行に現在に至る　<br>最後の行に現在に至る
            </div>
            <div class="col-10">
                <input type="checkbox" name="n_order" id="n_order_one" value="1"> OK <input type="checkbox" id="n_order" name="n_order" value="0"> NO 
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            所属病院・勤務先<br>Hospital・Office
            </div>
            <div class="col-10">
                <!-- <select class="form-control" name="hospital_office" id="hospital_office" style="width:500px">
>>>>>>> e849eef... separate per page
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select> -->
                <div id="hospital_off_field"></div>
            </div>
        </div>
        <br>
<<<<<<< HEAD
        <div class="form-group">
            <div class="cols-2">
            所属診療科・所属科<br>Department
            </div>
            <div class="cols-5">
                <div id="input_department"></div>
                <div id="editdpt_div"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success editadd_dpt_doc"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-2">
            医師コメント<br>Doctor Comment
            </div>
            <div class="cols-5">
=======
        <div class="row">
            <div class="col-2">
            所属診療科・所属科<br>Department
            </div>
            <div class="col-10">
                <div id="input_department"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医師コメント<br>Doctor Comment
            </div>
            <div class="col-10">
>>>>>>> e849eef... separate per page
                <textarea class="form- " id="doc_comment" name="doc_comment" onkeyup="countChar(this)" style="width:90%;height:100%;"></textarea>
                <div style="float:right;"><b id="charNum">200</b> <b> / 200 </b> </div>
            </div>
        </div>
        <br>
<<<<<<< HEAD
        <div class="form-group">
=======
        <div class="row">
>>>>>>> e849eef... separate per page
            <div class="col-12" align="center">
                <input type="submit" value="保存 | UPDATE" class="btn btn-danger">
            </div>
        </div>
        <br>
          
        </div>
      <!-- Modal -->
      {!! Form::close() !!}
<<<<<<< HEAD
      </div>
</div>
  </div>
</div>
</div>
=======
</div>
  </div>
</div>
>>>>>>> e849eef... separate per page
