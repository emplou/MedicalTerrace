<!-- Modal -->
<div id="edithospital" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog edit">
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
    <h4 class="modal-title"><b>Edit and Overwrite Hospital Detailsss</b></h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
      <div class="modal-body">
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
        <!-- URL Generator -->
<div class="form-container add">
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
    <div class="form-group">
        <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
        <div class="cols-4">
            <input type="text" class="form-control" placeholder="例)medical_terrace_clinic" name="url_gen" id="url_gen" required>
        </div>
    </div>

    <!-- Medical Institution -->
    <div class="form-group">
        <label class="control-label cols-15">医療機関名<br><span>Medical institution</span></label>
        <div class="cols-4">
            <input type="text" class="form-control" placeholder="例)メディカルテラスクリニック" id="medical_ins" name="medical_ins" required>
        </div>
    </div>

    <!-- Medical Institution English-->
    <div class="form-group">
        <label class="control-label cols-15">医療機関英語名<br><span>Medical institution</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="例)medical terrace clinic" id="medical_ins_eng" name="medical_ins_eng" required>
        </div>
    </div>

    <!-- Common Name -->
    <div class="form-group">
        <label class="control-label cols-15">一般名<br><span>Common Name</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="" id="common_name" name="common_name" required>
        </div>
    </div>

    <!-- Postal Code -->
    <div class="form-group">
        <label class="control-label cols-15">郵便番号<br><span>Postal code</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="ハイフンなし半角数字" id="postal_code" name="postal_code" required>
        </div>
    </div>

    <!-- Address -->
    <div class="form-group">
        <label class="control-label cols-15">住所<br><span>Address</span></label>
        <div class="cols-5">
            <input id="autocomplete_search" name="address" type="text" class="form-control address"  placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div>

    <!-- Address English -->
    <div class="form-group">
        <label class="control-label cols-15">住所英語表記<br><span>Address English</span></label>
        <div class="cols-5">
            <input id="autocomplete_search" name="address_english" type="text" class="form-control address_english" placeholder="Search"  required/>
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div>

    <!-- Branch Address -->
    <div class="form-group">
        <label class="control-label cols-15">住所<br><span>Branch Address</span></label>
        <div class="cols-2">
            <input type="text" class="form-control" placeholder="例)メディテラ診療所" name="branch_name[]">
        </div>
        <div class="cols-4">
            <input id="autocomplete_search" name="branch_address[]" type="text" class="form-control" placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div>

    <!-- Branch Address English -->
    <div class="form-group">
        <label class="control-label cols-15">住所英語表記<br><span>Branch Address English</span></label>
        <div class="cols-2">
            <input type="text" class="form-control" placeholder="例)mediterra clinic" name="branch_name_eng[]">
        </div>
        <div class="cols-4">
            <input id="autocomplete_search" name="branch_address_eng[]" type="text" class="form-control" placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
        <div class="cols-1 relative"><button type="button" class="btn btn-success addbranch"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>
    <div id="branch"></div>

    <hr />

    <!-- Clinic Appearance image -->
    <div class="form-group">
        <label class="control-label cols-15">医院外観画像<br><span>Clinic Appearance image </span></label>
        <div class="cols-5">  
            <div class="upload-image">        
                <input type="file" name="clinic_image" id="file-7" class="inputfile"  required>
                <label for="file-7"><span class="archive-name">ドラッグ&ドロップ、または参照で画像を追加してください</span><span class="btn-inputfile"> 参照...</span></label>
            </div>
        </div>
    </div>

    <!-- Image Caption -->
    <div class="form-group">
        <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="ハイフンなし半角数字" name="img_caption"  id="img_caption" required>
        </div>
    </div>

     <!-- Image Alt -->
    <div class="form-group">
        <label class="control-label cols-15">画像alt<br><span>Image Alt</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="ハイフンなし半角数字" name="img_alt" id="img_alt" required>
        </div>
    </div>


    <!-- Inquiry Phone number -->
    <div class="form-group">
        <label class="control-label cols-15">問合せ電話番号<br><span>Inquiry Phone Number</span></label>
        <div class="cols-5">
            <div class="cols-2">
                <input type="text" class="form-control" name="phone_no">
            </div>
            <div class="cols-05 center"><big>-</big></div>
            <div class="cols-2">
                <input type="text" class="form-control" name="phone_no_one">
            </div>
            <div class="cols-05 center"><big>-</big></div>
            <div class="cols-2">
                <input type="text" class="form-control" name="phone_no_two">
            </div>
        </div>
    </div>


   

    

    <!-- Fax -->
    <div class="form-group check">
        <label class="control-label cols-15">FAX<br><span>Facsimile</span></label>
        <div class="cols-5">
            <div class="cols-2">
                <input type="text" class="form-control" name="fax">
            </div>
            <div class="cols-05 center"><big>-</big></div>
            <div class="cols-2">
                <input type="text" class="form-control" name="fax_one">
            </div>
            <div class="cols-05 center"><big>-</big></div>
            <div class="cols-2">
                <input type="text" class="form-control" name="fax_two">
            </div>
            <div class="cols-2 check3">
                <input type="checkbox" id="non2" name="asn" value="0"> 
                <label for="non2">非表示<br><span>Not Show</span></label>
            </div>
        </div>
    </div>

    <!-- Email -->
    <div class="form-group check">
        <label class="control-label cols-15">Email<br><span>Email Address</span></label>
        <div class="cols-35">
            <input type="text" class="form-control" placeholder="" name="email"  id="email" required>
        </div>
         <div class="cols-2 check3">
            <input type="checkbox" id="non3" name="asn" value="0"> 
            <label for="non3">非表示<br><span>Not Show</span></label>
        </div>
    </div>

    <!-- URL -->
    <div class="form-group check">
        <label class="control-label cols-15">URL<br><span>URL</span></label>
        <div class="cols-35">
            <input type="text" class="form-control" placeholder="" name="url_hosp" required>
        </div>
         <div class="cols-2 check3">
            <input type="checkbox" id="non4" name="asn" value="0"> 
            <label for="non4">非表示<br><span>Not Show</span></label>
        </div>
    </div>

    
    <div id="addanother">
        <!-- Subheading -->
        <div class="form-group">
            <label class="control-label cols-15"> 医療機関キャッチ<br><span>Subheading</span></label>
            <div class="cols-5">          
                <textarea class="form-control sm2" name="hosp_subheading" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
            </div>
            <div class="cols-2">          
                <span id="rchars4">0</span>/46
            </div>
        </div>

        <!-- Text of Subheading -->
        <div class="form-group editor">
            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
            <div class="cols-6">   
                <!-- add new textarea here -->
                <div class="cols-10">        
                    <textarea class="form-control ck" name="textheading_lead" id="textheading_lead" placeholder="メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。"></textarea>
                </div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck1"><span class="lnr lnr-plus-circle"></span></button></div> 
        </div>
    </div>
    <div id="addnewdiv"></div>

    <hr />

    <!-- Division -->
    <div class="form-group">
        <label class="control-label cols-15">区分<br><span>Division</span></label>
        <div class="cols-4">
            <select class="form-control" name="division">
                <option value="0">選択してください</option>
            </select>
        </div>
    </div>

    <!-- Tag(department) -->
    <div class="form-group">
        <label class="control-label cols-15">タグ<br> 診療科目一覧<br><span>Medical Subject List</span></label>
        <div class="cols-7"> 
            <div id="addanother2">
                <div class="cols-3">
                    <select class="form- " name="med_sbj_list[]">
                        <option>選択してください</option>
                        <option>Medical one</option>
                        <option>Medical two</option>
                        <option>Medical three</option>
                        <option>Medical four</option>
                    </select>
                </div>
                <div class="cols-3">
                    <select class="form- " name="med_sbj_list[]">
                        <option>選択してください</option>
                        <option>Medical one</option>
                        <option>Medical two</option>
                        <option>Medical three</option>
                        <option>Medical four</option>
                    </select>
                </div>
                <div class="cols-3">
                    <select class="form- " name="med_sbj_list[]">
                        <option>選択してください</option>
                        <option>Medical one</option>
                        <option>Medical two</option>
                        <option>Medical three</option>
                        <option>Medical four</option>
                    </select>
                </div>
                <div id="mednewdiv1"></div>
                <div id="addanothermed1">
                    <div class="cols-3">
                        <select class="form- " name="med_sbj_list[]">
                            <option>選択してください</option>
                            <option>Medical one</option>
                            <option>Medical two</option>
                            <option>Medical three</option>
                            <option>Medical four</option>
                        </select>
                    </div>
                    <div class="cols-3">
                        <select class="form- " name="med_sbj_list[]">
                            <option>選択してください</option>
                            <option>Medical one</option>
                            <option>Medical two</option>
                            <option>Medical three</option>
                            <option>Medical four</option>
                        </select>
                    </div>
                    <div class="cols-3">
                        <select class="form- " name="med_sbj_list[]">
                            <option>選択してください</option>
                            <option>Medical one</option>
                            <option>Medical two</option>
                            <option>Medical three</option>
                            <option>Medical four</option>
                        </select>
                    </div>
                </div>
                <div class="cols-1 relative">
                    <button type="button" class="btn btn-success addmed1"><span class="lnr lnr-plus-circle"></span></button>
                </div>
                 <div id="mednewdiv2"></div>
                <div id="addanothermed2">
                    <div class="cols-3">
                        <input type="text" class="form- " placeholder="選択項目にない場合に入力" name="med_sbj_list_add[]">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form- " name="med_sbj_list_add[]">
                    </div>
                    <div class="cols-3">
                        <input type="text" class="form- " name="med_sbj_list_add[]">
                    </div>
                </div>
                <div class="cols-1 relative">
                    <button type="button" class="btn btn-success addmed2"><span class="lnr lnr-plus-circle"></span></button>
                </div>
        </div>
    </div>

    <div id="addanother4">
    <!-- Medical Subject -->
    <div class="form-group">
        <label class="control-label cols-15">診療科目<br><span>Medical Subject</span></label>
        <div class="cols-4">
            <select class="form-control" name="department[]">
                <option value="0">選択してください</option>
                @foreach($department as $dpt)
                <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Subheading 2-->
    <div class="form-group">
        <label class="control-label cols-15"> 医療機関キャッチ<br><span>Subheading</span></label>
        <div class="cols-6">          
            <textarea class="form-control sm2" name="ex_med_subj_subheading[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
        </div>
        <div class="cols-2">          
            <span id="rchars4">0</span>/46
        </div>
    </div>


    <!-- Text of Subheading 2-->
    <div class="form-group editor">
        <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
        <div class="cols-6">   
            <!-- add new textarea here -->
            
            <div id="addanother1">
                <div class="cols-10">        
                    <textarea class="form-control" name="med_subj_text_subheading_hospital[0]" id="txt_ckeditor" placeholder="メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。"></textarea>
                </div>
            </div>
        </div>
    </div>

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55">
            <div class="upload-image blue">        
                <input type="file" name="dpt_subject_image" id="file-8" class="inputfile2"  required>
                <label for="file-8"><span class="archive-name2"></span><span class="btn-inputfile"> </span></label>
            </div>
            <!-- <div class="upload-btn-wrapper">
                <button class="bton"></button>
                <input type="file" name="dpt_subject_image" />
            </div> -->
            
        </div>
    </div>

   
    <div class="form-group check fix">
        <div class="control-label cols-15">
        診療科目別<br>外来受付時間<br><span>Examination date</span>
        </div>
        <div class="cols-8">
            <input type="text" name="from[]" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
            <input type="text" name="to[]" data-toggle="timepicker" class="form- " style="width:100px"> 
            診療 <input type="text" name="start[]" data-toggle="timepicker" class="form-" style="width:100px"> ~
            月 <input type="checkbox" id="tag_season1" name="weekdays[]"><label for="tag_season1"></label>
            火 <input type="checkbox" id="tag_season2" name="weekdays[]"><label for="tag_season2"></label>
            水 <input type="checkbox" id="tag_season3" name="weekdays[]"><label for="tag_season3"></label>
            木 <input type="checkbox" id="tag_season4" name="weekdays[]"><label for="tag_season4"></label>
            金 <input type="checkbox" id="tag_season5" name="weekdays[]"><label for="tag_season5"></label>
            土 <input type="checkbox" id="tag_season6" name="weekdays[]"><label for="tag_season6"></label>
            日 <input type="checkbox" id="tag_season7" name="weekdays[]"><label for="tag_season7"></label>
            祝 <input type="checkbox" id="tag_season8" name="weekdays[]"><label for="tag_season8"></label>
        </div>
        <div class="cols-8">
            <input type="text" name="from[]" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
            <input type="text" name="to[]" data-toggle="timepicker" class="form- " style="width:100px"> 
            診療 <input type="text" name="start[]" data-toggle="timepicker" class="form-" style="width:100px"> ~ 
            月 <input type="checkbox" id="tag_season9" name="weekdays[]"><label for="tag_season9"></label>
            火 <input type="checkbox" id="tag_season10" name="weekdays[]"><label for="tag_season10"></label>
            水 <input type="checkbox" id="tag_season11" name="weekdays[]"><label for="tag_season11"></label>
            木 <input type="checkbox" id="tag_season12" name="weekdays[]"><label for="tag_season12"></label>
            金 <input type="checkbox" id="tag_season13" name="weekdays[]"><label for="tag_season13"></label>
            土 <input type="checkbox" id="tag_season14" name="weekdays[]"><label for="tag_season14"></label>
            日 <input type="checkbox" id="tag_season15"name="weekdays[]"><label for="tag_season15"></label>
            祝 <input type="checkbox" id="tag_season16"name="weekdays[]"><label for="tag_season16"></label>
            </div>
            <div class="cols-15"></div>
            <div class="cols-8">
                
            <div class="cols-6"><input type="text" class="form- " name="special_hours[]"> </div>
            <div class="cols-3">    
            ※受診内容により日・時間が異なる場合に記載
            </div>
                <input type="text" name="spfrom[]" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                <input type="text" name="spto[]" data-toggle="timepicker" class="form- " style="width:100px"> 
                診療 <input type="text" name="spstart[]" data-toggle="timepicker" class="form-" style="width:100px"> ~
                月 <input type="checkbox" id="tag_season17" name="spweekdays[]"><label for="tag_season17"></label>
                火 <input type="checkbox" id="tag_season18" name="spweekdays[]"><label for="tag_season18"></label>
                水 <input type="checkbox" id="tag_season19" name="spweekdays[]"><label for="tag_season19"></label>
                木 <input type="checkbox" id="tag_season20" name="spweekdays[]"><label for="tag_season20"></label>
                金 <input type="checkbox" id="tag_season21" name="spweekdays[]"><label for="tag_season21"></label>
                土 <input type="checkbox" id="tag_season22" name="spweekdays[]"><label for="tag_season22"></label>
                日 <input type="checkbox" id="tag_season23" name="spweekdays[]"><label for="tag_season23"></label>
                祝 <input type="checkbox" id="tag_season24" name="spweekdays[]"><label for="tag_season24"></label>
        </div>
    </div>

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-75">
            <button type="button" class="btn-prime addto"></button>
            <button type="button" class="btn-prime add-duplicate"></button>
        </div>
        <div class="cols-1 relative">
            <button type="button" class="btn btn-success add-ck2"><span class="lnr lnr-plus-circle"></span></button>
        </div>
    </div>
    <div id="addnewdiv4"></div>

     <hr /> 
    <!-- Subheading 3-->
    <div id="addnewdiv3"></div>
    <div id="addanother3">
        <div class="form-group">
            <label class="control-label cols-15"> 医療機関キャッチ<br><span>Subheading</span></label>
            <div class="cols-5">          
                <textarea class="form-control sm2" name="feature_title[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
            </div>
            <div class="cols-2">          
                <span id="rchars4">0</span>/46
            </div>
        </div>

        <!-- Text of Subheading 3-->
        <div class="form-group editor">
            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
            <div class="cols-6">   
                <div id="addanother1">
                    <div class="cols-10">        
                        <textarea class="form-control" name="feature_text_subheading_hospital[0]" id="txt_ckeditor" placeholder="メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。"></textarea>
                    </div>
                </div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck3"><span class="lnr lnr-plus-circle"></span></button></div> 
            </div>
        </div>

        <!-- Buttons -->
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-55">
                <div class="upload-image blue">        
                    <input type="file" name="feature_image[]" id="file-9" class="inputfile3"  required>
                    <label for="file-9"><span class="archive-name3"></span><span class="btn-inputfile"> </span></label>
                </div>
                <!-- <div class="upload-btn-wrapper">
                    <button class="bton" id="show_img"></button>
                    <input type="file" name="feature_image[]"  />
                </div> -->
                <!-- <button type="button" class="btn-prime image" id="show_img"></button> -->
            </div>
        </div>
    </div>
        

     

    <hr />
    <!-- Subheading 4-->
    <div id="addnewdiv5">
    <div id="addanother5">
        <div class="form-group">
            <label class="control-label cols-15"> 設備・機器<br><span>Equipment</span></label>
            <div class="cols-5">          
                <textarea class="form-control sm2" name="text_equipment_subheading[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
            </div>
            <div class="cols-2">          
                <span id="rchars4">0</span>/46
            </div>
        </div>

        <!-- Text of Subheading 4-->
        <div class="form-group editor">
            <label class="control-label cols-15"> </label>
            <div class="cols-6">   
                <!-- add new textarea here -->
                
                <div id="addanother1">
                    <div class="cols-10">        
                        <textarea class="form-control" name="equipment_subheading2[0]" id="txt_ckeditor" placeholder="メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。"></textarea>
                    </div>
                </div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck4"><span class="lnr lnr-plus-circle"></span></button></div> 
        </div>

        <!-- Buttons -->
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-55">
                <div class="upload-image blue">        
                    <input type="file" name="insert_equipment_subject" id="file-10" class="inputfile4"  required>
                    <label for="file-10"><span class="archive-name4"></span><span class="btn-inputfile"> </span></label>
                </div>
                <!-- <div class="upload-btn-wrapper">
                    <button class="bton"></button>
                    <input type="file" name="equipment_image[]" name="insert_equipment_subject" />
                </div> -->
            </div>
        </div>
    </div>
    </div>

    <!-- Image Alt -->
    <!-- <div class="form-group">
        <label class="control-label cols-15">画像alt<br><span>Image Alt</span></label>
        <div class="cols-5">
            <div class="upload-image">        
                <input type="file" name="image-alt" id="file-7" class="inputfile" >
                <label for="file-7"><span class="archive-name">ドラッグ&ドロップ、または参照で画像を追加してください</span><span class="btn-inputfile"> 参照...</span></label>
            </div>
        </div>
    </div> -->

    <hr />

    <div id="addnewdiv6"></div>
    <div id="addanother6">
        <!-- Subheading 4-->
        <div class="form-group">
            <label class="control-label cols-15"> スタッフリード<br><span>Staff subheading</span></label>
            <div class="cols-5">          
                <textarea class="form-control sm2" name="med_subj_subheading[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea>
            </div>
        </div>
    
        <!-- Text of Subheading 4-->
        <div class="form-group editor">
            <label class="control-label cols-15"> スタッフコメント<br><span>Staff Comment</span></label>
            <div class="cols-6">   
                <!-- add new textarea here -->
                
                    <div class="cols-10">        
                        <textarea class="form-control" name="staff_comment_hospital[0]" id="txt_ckeditor" placeholder="メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。"></textarea>
                    </div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck5"><span class="lnr lnr-plus-circle"></span></button></div> 
        </div>

        <!-- Buttons -->
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-55">
                <div class="upload-image blue">        
                    <input type="file" name="staff_image[]" id="file-11" class="inputfile5"  required>
                    <label for="file-11"><span class="archive-name5"></span><span class="btn-inputfile"> </span></label>
                </div>
                 <!-- <div class="upload-btn-wrapper">
                    <button class="bton"></button>
                    <input type="file" name="staff_image[]" />
                </div> -->
            </div>
        </div>
    </div>


    <!-- Buttons -->
    <div class="form-group">
        <div class="control-label cols-15">院内処方の有無<br><span>In-hospital prescription</span></div>
        <div class="cols-5 rad-buttons">
            <input type="radio" id="pres1" name="pres" value="監修">
            <label for="pres1">有 </label>
            <input type="radio" id="pres2" name="pres" value="取材協力">
            <label for="pres2">一部有</label>
            <input type="radio" id="cc" name="pres" value="取材協力">
            <label for="cc">無</label>
        </div>	
    </div>

    <!-- Free Medical Expenses -->
    <div class="form-group">
        <div class="control-label cols-15">自由診療費用<br><span>Free medical Expenses</span></div>
        <div class="cols-8 rad-buttons">
            <div class="cols-2 left">
                <label for="med1">項目 </label>
                <input type="text" id="med1" name="med_item[]" placeholder="例)予防接種 インフルエンザ"> 
            </div>
            <div class="cols-2 left">
                <label for="med2">費用</label>
                <input type="text" id="med2" name="med_cost[]" placeholder="例)3,500円"> 
            </div>
            <div class="cols-2 left">
                <label for="med3">診療科</label>
                <select class="form-control" name="free_med_exp[]">
                    <option value="">選択してください</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                </select>
            </div>
        </div>	
    </div>

    <!-- Access -->
    <div class="form-group check">
        <label class="control-label cols-15">アクセス<br><span>Access</span></label>
        <div class="cols-5">
            <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;background:#fff;padding: 7px;border-radius: 8px">
                <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="access_trans[]" ><label for="styled-checkbox-1" style="font-weight:500;margin-top:5px"> □電車     駅     出口より徒歩   分</label>
            </div>    
            <!-- <input type="text" class="form-control" name="access_trans[]"> -->
        </div>
    </div>
    <div class="form-group check">
        <label class="control-label cols-15"></label>
        <div class="cols-5">
            <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;background:#fff;padding: 7px;border-radius: 8px">
                <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" name="access_from[]" ><label for="styled-checkbox-2" style="font-weight:500;margin-top:5px">バス     停より徒歩   分</label>
            </div>   
            <!-- <input type="text" class="form-control" name="access_from[]"> -->
        </div>
    </div>
    <div class="form-group check">
        <label class="control-label cols-15"></label>
        <div class="cols-5">
            <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px; background:#fff;padding: 7px;border-radius: 8px">
                <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" name="access_mins[]" ><label for="styled-checkbox-3" style="font-weight:500;margin-top:5px">ランドマーク    より徒歩   分、車   分</label>
            </div>  
         </div>
         <div class="cols-1 relative"><button type="button" class="btn btn-success addaccess"><span class="lnr lnr-plus-circle"></span></button></div> 
       
    </div>
    <div id="access"></div>



    <!-- Parking -->
    <div class="form-group">
        <div class="control-label cols-15">駐車場<br><span>Parking</span></div>
        <div class="cols-18 rad-buttons">
            料金
            <input type="radio" id="park1a" name="p_radio[]" value="監修">
            <label for="park1a">無料</label>
            <input type="radio" id="park2a" name="p_radio[]" value="取材協力">
            <label for="park2a">有料</label>
            
        </div>	
        <div class="cols-4">
            <input class="form-control" type="text" id="cc" name="parking_text[]" placeholder="例)最初の30分無料、以降30分ごとに100円、1日最大1,600円">  
        </div> 
    </div>
    <div class="form-group">
        <div class="control-label cols-15"></div>
        <div class="cols-05"><label>台数</label></div>    
        <div class="cols-2">
            <input class="form-control" type="text" id="cc" name="parking_units[]" placeholder="例)000台"> 
        </div>
    </div>

    <!-- Hospitalization -->
    <div class="form-group">
        <div class="control-label cols-15">入院可否<br><span>Hospitalization</span></div>
        <div class="cols-12 rad-buttons">
            <input type="radio" id="hosp1" name="hospitalization[]" value="監修">
            <label for="hosp1">可</label>
            <input type="radio" id="hosp2" name="hospitalization[]" value="取材協力">
            <label for="hosp2">否</label>
        </div>
        <div class="cols-5">
            <input class="form-control" type="text" name="hospitalization_text[]" placeholder="※注意書き自由に">
        </div>	
    </div>

    <!-- Number of Beds -->    
    
    <div class="form-group">
        <div class="control-label cols-15">病床種別・病床数<br><span>Number of beds</span></div>
        <div class="cols-05">
            <label>種別</label>
        </div>
        <div class="cols-2">
            <select class="form-control" name="bed_type[]">
                <option>選択してください</option>
                <option value="bed one">Bed One</option>
                    <option value="bed two">Bed Two</option>
            </select>
        </div>
        <div class="cols-05">
            <label>種別</label>
        </div>
        <div class="cols-3">
            <input class="form-control" type="text" id="cc" name="no_of_beds[]" placeholder="例)10床"> 
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success addnumbed"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>
    <div id="numbed"></div>

    <!-- Number of Beds -->    
    
    <div class="form-group check fix">
        <div class="control-label cols-15">面会可能日・時間<br><span>Possible date of visit</span></div>
        <div class="cols-1">
            <select class="form-control" name="visit_from[]">
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
            </select>
        </div>
        <div class="cols-1">
            <select class="form-control" name="visit_to[]">
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
            </select>
        </div>
        <div class="cols-4">
            月 <input type="checkbox" id="visit1" name="visit[]" value="月"><label for="visit1"></label>
            火 <input type="checkbox" id="visit2" name="visit[]" value="火"><label for="visit2"></label>
            水 <input type="checkbox" id="visit3" name="visit[]" value="水"><label for="visit3"></label>
            木 <input type="checkbox" id="visit4" name="visit[]" value="木"><label for="visit4"></label>
            金 <input type="checkbox" id="visit5" name="visit[]" value="金"><label for="visit5"></label>
            土 <input type="checkbox" id="visit6" name="visit[]" value="土"><label for="visit6"></label>
            日 <input type="checkbox" id="visit7" name="visit[]" value="日"><label for="visit7"></label>
            祝 <input type="checkbox" id="visit8" name="visit[]" value="祝"><label for="visit8"></label>
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success addvisits"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>
    <div id="visit"></div>



    <!-- In-hospital service -->
    <div class="form-group">
        <label class="control-label cols-15">院内サービス<br><span>In-hospital service</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" name="hosp_service">
        </div>
    </div>

    <!-- Support Languages -->
    <div class="form-group">
        <label class="control-label cols-15">対応可能な外国語<br><span>Support Languages</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" name="support_lang">
        </div>
    </div>

    <!-- Support Languages -->
    <div class="form-group">
        <label class="control-label cols-15">売店・食堂の有無<br><span>Shop, dining room</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" name="shop_dining_room">
        </div>
    </div>

    <!-- Credit Card Payment -->
    <div class="form-group">
        <div class="control-label cols-15">クレジットカードに<br>よる支払いの可否<br><span>Credit Card Payment</span></div>
        <div class="cols-12 rad-buttons">
            <input type="radio" id="card1" name="card[]" value="監修">
            <label for="card1">可</label>
            <input type="radio" id="card2" name="card[]" value="取材協力">
            <label for="card2">否</label>
        </div>
        <div class="cols-4">
            <input class="form-control" type="text" name="credit_card[]" placeholder="※注意書き自由に">
        </div>	
        <div class="sidediv cols-3">
            <div class="sidebots">
                <a class="prevbutton" type="button" class="btn-prime preview" href="#previewAddHospital">Preview</a>
                <button type="button" class="btn-prime release1" id="myBtn">Release</button>
                <button type="button" class="btn-prime release2" id="myBtn">Release</button>
            </div>
        </div>
    </div>



    <input type="submit" value="Save hospital" class="btn btn-danger">
</div>
</div>
    </div>
</div>

<!-- end of body -->
</div>
  </div>
</div>