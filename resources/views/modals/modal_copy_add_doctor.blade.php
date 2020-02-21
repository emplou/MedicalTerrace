<!-- Modal -->
<div id="copyAdddoctor" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog edit">
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: white; background-color: #046C9D">
<h4 class="modal-title"><b>Copy Add Doctor</b></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
      <div class="modal-body">
      <div class="header-wrapper">
      <div class="left">
        <!-- <h2>子どもの夏の感染症<span>ID番号:S00000</span></h2> -->
        <div id="authorID"></div>
        
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
      {!! Form::open(['url' => '/save_copy_doctor', 'method' => 'post', 'files' => true]) !!}
      <input type="hidden" name="docID" id="twodocID" value=" ">
      <input type="hidden" name="statusAuth" id="statusAuth" value="">
      <div  class="form-group">
            <div class="cols-2">
            URL自動生成名<br>URL generation
            </div>
            <div class="cols-5">
            <input type="text" class="form-control" name="url_generation" id="twourl_generation" style="width:500px">
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            職位<br>Status
            </div>
            <div class="cols-5">
            <input type="text" class="form-control" name="status" id="twostatus" style="width:500px">
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            専門医・認定医<br>（取得資格）<br>Certificate
            </div>
            <div class="cols-5">
                <!-- <input type="text" class="form- " name="certificate[]" id="certificate00" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate01" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate02" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate03" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate04" style="width:300px">
                <input type="text" class="form- " name="certificate[]" id="certificate05" style="width:300px"> -->
                <div id="twoinput_container"></div>
                <div id="copycertificate"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success copyaddcert1"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            氏名<br>Name
            </div>
            <div class="cols-5">
            <input type="text" class="form-control" name="name" id="twoname" style="width:500px">
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            ローマ字（名・氏）<br>Alphabet Name 
            </div>
            <div class="cols-5">
            <input type="text" class="form-control" name="alphabet_name" id="twoalpha_name" style="width:500px">
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            プロフィール画像<br>Profile image 
            </div>
            <div class="cols-5">
                <div class="input-group">
                    <input type="text" class="form-control" name="profile_image_field" id="profile_image_field">
                    <span class="input-group-btn">
                        <!-- <button class="btn btn-search" type="button"> 参照... </button> -->
                        <input type="file" value="参照... " class="btn btn-search" name="profile_image">
                    </span>
                </div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            画像キャプション<br>Image Caption 
            </div>
            <div class="cols-5">
            <input type="text" class="form-control" name="img_caption" id="twoimg_caption" style="width:500px">
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            画像alt<br>Image alt
            </div>
            <div class="cols-5">
            <input type="text" class="form-control" name="img_alt" id="twoimg_alt" style="width:500px">
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            業種<br>Industry
            </div>
            <div class="cols-5">
                <div id="twoinput_industry"></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            所属学会<br>Conference
            </div>
            <div class="cols-5">
                <!-- <input type="text" class="form- " name="conference[]" id="conference" style="width:300px"> -->
                <div id="twoinput_conference"></div>
                <div id="copyaddconference"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success copyaddconf2"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            生年月日<br>Birthday
            </div>
            <div class="cols-5">
                <!-- <select id="b_year" name="b_year" class="form- " style="width:100px"></select>
                <select id="b_month" name="b_month" class="form- " style="width:100px">
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
                    <select id="length b_day" name="b_day" class="form- " style="width:100px"></select> -->
                    <div id="twobday_input"></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            出生地<br>Place of birth
            </div>
            <div class="cols-5">
                <input type="text" class="form- " name="place_birth" id="twoplace_birth" style="width:200px">
                出身地 | Birthplace
                <input type="text" class="form- " name="" style="width:200px">
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            経歴（学歴）<br>Career（学歴）
            </div>
            <div class="cols-5">
                    <div id="twoinput_career_one"></div>
                    <div id="copyc_ac"></div>
                    <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success copyadd3"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            経歴（職歴）<br>Career（職歴）
            </div>
            <div class="cols-5">
                <div id="twoinput_career_two"></div>
                <div id="copyc_we"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success copyadd44"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            経歴（賞・表彰）<br>Career（賞・表彰）
            </div>
            <div class="cols-5">
                <div id="twoinput_career_three"></div>
                <div id="copyc_aw"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success copyadd55"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            最後の行に現在に至る　<br>最後の行に現在に至る
            </div>
            <div class="cols-5">
                <input type="checkbox" name="n_order" id="twon_order_one" value="1"> OK <input type="checkbox" id="twon_order" name="n_order" value="0"> NO 
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            所属病院・勤務先<br>Hospital・Office
            </div>
            <div class="cols-5">
                <!-- <select class="form-control" name="hospital_office" id="hospital_office" style="width:500px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select> -->
                <div id="hospital_off_field_two"></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            所属診療科・所属科<br>Department
            </div>
            <div class="cols-5">
                <div id="twoinput_department"></div>
                <div id="copydpt_div"></div>
                <div class="cols-1 relative" style="float:right;"><button type="button" class="btn btn-success copyadd_dpt_doc"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="cols-2">
            医師コメント<br>Doctor Comment
            </div>
            <div class="cols-5">
                <textarea class="form- " id="twodoc_comment" name="doc_comment" onkeyup="countChar(this)" style="width:90%;height:100%;"></textarea>
                <div style="float:right;"><b id="charNum">200</b> <b> / 200 </b> </div>
            </div>
        </div>
        <br>
        <div  class="form-group">
            <div class="col-12" align="center">
                <input type="submit" value="保存 | UPDATE" class="btn btn-danger">
            </div>
        </div>
        <br>
          
        </div>
      <!-- Modal -->
      {!! Form::close() !!}
</div>
  </div>
</div>
</div>
</div>
