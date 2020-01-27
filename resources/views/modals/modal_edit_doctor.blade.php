<!-- Modal -->
<div id="editdoctor" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog modal-lg">
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Edit Doctor</b></h4>
</div>
      <div class="modal-body">
        
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
        <!-- testing -->
        <pre id="result1"></pre>
        <pre id="result2"></pre>
        <!-- end for testing -->
        <br>
        <div class="row">
            <div class="col-2">
            専門医・認定医<br>（取得資格）<br>Certificate
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="certificate[]" id="certificate" style="width:300px">
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
            <input type="text" class="form-control" name="alpha_name" id="alpha_name" style="width:500px">
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
                        <input type="file" value="参照... " class="btn btn-search" name="profile_image">
                    </span>
                </div>
            </div>
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
                <select class="form-control" name="industry" id="industry" style="width:500px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            所属学会<br>Conference
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="conference[]" id="conference[]" style="width:300px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            生年月日<br>Birthday
            </div>
            <div class="col-10">
                <select id="b_year" name="b_year" class="form- " style="width:100px"></select>
                <select id="b_month" name="b_month" class="form- " style="width:100px">
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select id="length b_day" name="b_day" class="form- " style="width:100px"></select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            出生地<br>Place of birth
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="place_birth" id="place_birth" style="width:200px">
                出身地 | Birthplace
                <input type="text" class="form- " name="" style="width:200px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            経歴（学歴）<br>Career（学歴）
            </div>
            <div class="col-10">
                <select id="aca_year c_ac_year[]" name="c_ac_year[]" class="form- " style="width:100px"></select>
                <select name="c_ac_month[]" id="c_ac_month[]" class="form- " style="width:100px">
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                </select>
                <input type="text" id="c_ac_desc[]" name="c_ac_desc[]" class="form- " style="width:500px">
                <br>
                        <select id="aca_year_to c_ac_year_to[]" name="c_ac_year_to[]" class="form- " style="width:100px"></select>
                        <select name="c_ac_month_to[]" id="c_ac_month_to[]" class="form- " style="width:100px">
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    <input type="text" id="c_ac_desc_to[]" name="c_ac_desc_to[]" class="form- " style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            経歴（職歴）<br>Career（職歴）
            </div>
            <div class="col-10">
                <select id="work_year c_we_year[]" name="c_we_year[]" class="form- " style="width:100px"></select>
                <select name="c_we_month[]" id="c_we_month[]" class="form- " style="width:100px">
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                </select>
                <input type="text" id="c_we_desc[]" name="c_we_desc[]" class="form- " style="width:500px">
                <br>
                        <select id="work_year_to c_we_year_to[]" name="c_we_year_to[]" class="form- " style="width:100px"></select>
                        <select name="c_we_month_to[]" id="c_we_month_to[]" class="form- " style="width:100px">
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    <input type="text" id="c_we_desc_to[]" name="c_we_desc_to[]" class="form- " style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            経歴（賞・表彰）<br>Career（賞・表彰）
            </div>
            <div class="col-10">
                <select id="awards_year c_aw_year[]" name="c_aw_year[]" class="form- " style="width:100px"></select>
                <select name="c_aw_month[]" id="c_aw_month[]" class="form- " style="width:100px">
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                </select>
                <input type="text" id="c_aw_desc[]" name="c_aw_desc[]" class="form- " style="width:500px">
                <br>
                        <select id="awards_year_to c_aw_year_to[]" name="c_aw_year_to[]" class="form- " style="width:100px"></select>
                        <select name="c_aw_month_to[]" id="c_aw_month_to[]" class="form- " style="width:100px">
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    <input type="text" id="c_aw_desc_to[]" name="c_aw_desc_to[]" class="form- " style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            最後の行に現在に至る　<br>最後の行に現在に至る
            </div>
            <div class="col-10">
                <input type="checkbox" name="n_order" id="n_order" value="1"> OK <input type="checkbox" id="n_order" name="n_order" value="0"> NO 
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            所属病院・勤務先<br>Hospital・Office
            </div>
            <div class="col-10">
                <select class="form-control" name="hospital_office" id="hospital_office" style="width:500px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            所属診療科・所属科<br>Department
            </div>
            <div class="col-10">
                <select class="form- " name="department[]" id="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" id="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" id="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select><br>
                <select class="form- " name="department[]" id="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" id="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" id="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            医師コメント<br>Doctor Comment
            </div>
            <div class="col-10">
                <textarea class="form- " id="doc_comment" name="doc_comment" onkeyup="countChar(this)" style="width:90%;height:100%;"></textarea>
                <div style="float:right;"><b id="charNum">200</b> <b> / 200 </b> </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <input type="submit" value="保存 | SAVE">
            </div>
        </div>
          
        </div>
      <!-- Modal -->

</div>
  </div>
</div>
