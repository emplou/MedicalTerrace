@extends('layouts.app')
@section('content')
@include('modals.modal_add_hospital')


<hr />
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
    {!! Form::open(['url' => '/save_hospital', 'method' => 'post', 'files' => true]) !!}

    <!-- URL Generator -->
    <div class="form-group">
        <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
        <div class="cols-4">
            <input type="text" class="form-control" placeholder="例)medical_terrace_clinic" name="url_gen">
        </div>
    </div>

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
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="例)medical terrace clinic" name="medical_ins_eng">
        </div>
    </div>

    <!-- Common Name -->
    <div class="form-group">
        <label class="control-label cols-15">一般名<br><span>Common Name</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="" name="common_name">
        </div>
    </div>

    <!-- Postal Code -->
    <div class="form-group">
        <label class="control-label cols-15">郵便番号<br><span>Postal code</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="ハイフンなし半角数字" name="postal_code">
        </div>
    </div>

    <!-- Address -->
    <div class="form-group">
        <label class="control-label cols-15">住所<br><span>Address</span></label>
        <div class="cols-5">
            <input id="autocomplete_search" name="address" type="text" class="form-control" placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div>

    <!-- Address English -->
    <div class="form-group">
        <label class="control-label cols-15">住所英語表記<br><span>Address English</span></label>
        <div class="cols-5">
            <input id="autocomplete_search" name="address_english" type="text" class="form-control" placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div>

    <!-- Branch Address -->
    <div class="form-group">
        <label class="control-label cols-15">住所<br><span>Branch Address</span></label>
        <div class="cols-2">
            <input type="text" class="form-control" placeholder="例)メディテラ診療所" name="postal_code">
        </div>
        <div class="cols-4">
            <input id="autocomplete_search" name="address_branch" type="text" class="form-control" placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div>

    <!-- Branch Address English -->
    <div class="form-group">
        <label class="control-label cols-15">住所英語表記<br><span>Branch Address English</span></label>
        <div class="cols-2">
            <input type="text" class="form-control" placeholder="例)mediterra clinic" name="postal_code">
        </div>
        <div class="cols-4">
            <input id="autocomplete_search" name="address_english_branch" type="text" class="form-control" placeholder="Search" />
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
                <input type="file" name="clinic_image" id="file-7" class="inputfile" >
                <label for="file-7"><span class="archive-name">ドラッグ&ドロップ、または参照で画像を追加してください</span><span class="btn-inputfile"> 参照...</span></label>
            </div>
        </div>
    </div>

    <!-- Image Caption -->
    <div class="form-group">
        <label class="control-label cols-15">画像キャプション<br><span>Image Caption</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="ハイフンなし半角数字" name="img_caption">
        </div>
    </div>

     <!-- Image Alt -->
    <div class="form-group">
        <label class="control-label cols-15">画像alt<br><span>Image Alt</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="ハイフンなし半角数字" name="img_alt">
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
            <input type="text" class="form-control" placeholder="" name="email">
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
            <input type="text" class="form-control" placeholder="" name="url">
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
                <textarea class="form-control sm2" name="hosp_subheading" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
                </textarea>
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
                    <textarea class="form-control ck" name="textheading_lead[]" id="textheading_lead">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
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
            <select class="form-control" name="department">
                <option value="0">選択してください</option>
            </select>
        </div>
    </div>

    <!-- Subheading 2-->
    <div class="form-group">
        <label class="control-label cols-15"> 医療機関キャッチ<br><span>Subheading</span></label>
        <div class="cols-6">          
            <textarea class="form-control sm2" name="med_subj_subheading" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
            </textarea>
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
                    <textarea class="form-control" name="med_subj_text_subheading_hospital[]" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                </div>
            </div>
        </div>
    </div>

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55">
            <div class="upload-btn-wrapper">
                <button class="bton"></button>
                <input type="file" name="subject_image" name="insert_img_subject" />
            </div>
            
        </div>
    </div>

   
    <div class="form-group check fix">
        <div class="control-label cols-15">
        診療科目別<br>外来受付時間<br><span>Examination date</span>
        </div>
        <div class="cols-8">
            <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
            <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
            診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~
            月 <input type="checkbox" id="tag_season1" name="weekdays"><label for="tag_season1"></label>
            火 <input type="checkbox" id="tag_season2" name="weekdays"><label for="tag_season2"></label>
            水 <input type="checkbox" id="tag_season3" name="weekdays"><label for="tag_season3"></label>
            木 <input type="checkbox" id="tag_season4" name="weekdays"><label for="tag_season4"></label>
            金 <input type="checkbox" id="tag_season5" name="weekdays"><label for="tag_season5"></label>
            土 <input type="checkbox" id="tag_season6" name="weekdays"><label for="tag_season6"></label>
            日 <input type="checkbox" id="tag_season7" name="weekdays"><label for="tag_season7"></label>
            祝 <input type="checkbox" id="tag_season8" name="weekdays"><label for="tag_season8"></label>
        </div>
        <div class="cols-8">
            <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
            <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
            診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~ 
            月 <input type="checkbox" id="tag_season9" name="weekdays"><label for="tag_season9"></label>
            火 <input type="checkbox" id="tag_season10" name="weekdays"><label for="tag_season10"></label>
            水 <input type="checkbox" id="tag_season11" name="weekdays"><label for="tag_season11"></label>
            木 <input type="checkbox" id="tag_season12" name="weekdays"><label for="tag_season12"></label>
            金 <input type="checkbox" id="tag_season13" name="weekdays"><label for="tag_season13"></label>
            土 <input type="checkbox" id="tag_season14" name="weekdays"><label for="tag_season14"></label>
            日 <input type="checkbox" id="tag_season15"name="weekdays"><label for="tag_season15"></label>
            祝 <input type="checkbox" id="tag_season16"name="weekdays"><label for="tag_season16"></label>
            </div>
            <div class="cols-15"></div>
            <div class="cols-8">
                
            <div class="cols-6"><input type="text" class="form- " name="special_hours"> </div>
            <div class="cols-3">    
            ※受診内容により日・時間が異なる場合に記載
            </div>
                <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
                診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~
                月 <input type="checkbox" id="tag_season17" name="tag_season[]"><label for="tag_season17"></label>
                火 <input type="checkbox" id="tag_season18" name="tag_season[]"><label for="tag_season18"></label>
                水 <input type="checkbox" id="tag_season19" name="tag_season[]"><label for="tag_season19"></label>
                木 <input type="checkbox" id="tag_season20" name="tag_season[]"><label for="tag_season20"></label>
                金 <input type="checkbox" id="tag_season21" name="tag_season[]"><label for="tag_season21"></label>
                土 <input type="checkbox" id="tag_season22" name="tag_season[]"><label for="tag_season22"></label>
                日 <input type="checkbox" id="tag_season23" name="tag_season[]"><label for="tag_season23"></label>
                祝 <input type="checkbox" id="tag_season24" name="tag_season[]"><label for="tag_season24"></label>
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
                <textarea class="form-control sm2" name="feature_title" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
                </textarea>
            </div>
            <div class="cols-2">          
                <span id="rchars4">0</span>/46
            </div>
        </div>

        <!-- Text of Subheading 3-->
        <div class="form-group editor">
            <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
            <div class="cols-6">   
                <!-- add new textarea here -->
                <div id="addanother1">
                    <div class="cols-10">        
                        <textarea class="form-control" name="feature_text_subheading_hospital[]" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
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
                <div class="upload-btn-wrapper">
                    <button class="bton" id="show_img"></button>
                    <input type="file" name="subject_image" name="insert_img_subject" />
                </div>
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
                <textarea class="form-control sm2" name="text_equipment_subheading" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
                </textarea>
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
                        <textarea class="form-control" name="equipment_subheading2[]" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                    </div>
                </div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck4"><span class="lnr lnr-plus-circle"></span></button></div> 
        </div>

        <!-- Buttons -->
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-55">
                <div class="upload-btn-wrapper">
                    <button class="bton"></button>
                    <input type="file" name="equipment_image" name="insert_equipment_subject" />
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Image Alt -->
    <div class="form-group">
        <label class="control-label cols-15">画像alt<br><span>Image Alt</span></label>
        <div class="cols-5">
            <div class="upload-image">        
                <input type="file" name="image-alt" id="file-7" class="inputfile" >
                <label for="file-7"><span class="archive-name">ドラッグ&ドロップ、または参照で画像を追加してください</span><span class="btn-inputfile"> 参照...</span></label>
            </div>
        </div>
    </div>

    <hr />

    <div id="addnewdiv6"></div>
    <div id="addanother6">
        <!-- Subheading 4-->
        <div class="form-group">
            <label class="control-label cols-15"> スタッフリード<br><span>Staff subheading</span></label>
            <div class="cols-5">          
                <textarea class="form-control sm2" name="med_subj_subheading" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
                </textarea>
            </div>
        </div>
    
        <!-- Text of Subheading 4-->
        <div class="form-group editor">
            <label class="control-label cols-15"> スタッフコメント<br><span>Staff Comment</span></label>
            <div class="cols-6">   
                <!-- add new textarea here -->
                
                    <div class="cols-10">        
                        <textarea class="form-control" name="staff_comment_hospital[]" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                    </div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck5"><span class="lnr lnr-plus-circle"></span></button></div> 
        </div>

        <!-- Buttons -->
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-55">
            <div class="upload-btn-wrapper">
                    <button class="bton"></button>
                    <input type="file" name="staff_image" />
                </div>
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
                <input type="text" id="med1" name="med" placeholder="例)予防接種 インフルエンザ">
            </div>
            <div class="cols-2 left">
                <label for="med2">費用</label>
                <input type="text" id="med2" name="med" placeholder="例)3,500円">
            </div>
            <div class="cols-2 left">
                <label for="med3">診療科</label>
                <select class="form-control" name="medi">
                    <option>選択してください</option>
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
            <input type="radio" id="park1a" name="p_radio" value="監修">
            <label for="park1a">無料</label>
            <input type="radio" id="park2a" name="p_radio" value="取材協力">
            <label for="park2a">有料</label>
            
        </div>	
        <div class="cols-4">
            <input class="form-control" type="text" id="cc" name="pres" placeholder="例)最初の30分無料、以降30分ごとに100円、1日最大1,600円">  
        </div> 
    </div>
    <div class="form-group">
        <div class="control-label cols-15"></div>
        <div class="cols-05"><label>台数</label></div>    
        <div class="cols-2">
            <input class="form-control" type="text" id="cc" name="pres" placeholder="例)000台"> 
        </div>
    </div>

    <!-- Hospitalization -->
    <div class="form-group">
        <div class="control-label cols-15">入院可否<br><span>Hospitalization</span></div>
        <div class="cols-12 rad-buttons">
            <input type="radio" id="hosp1" name="hosp" value="監修">
            <label for="hosp1">可</label>
            <input type="radio" id="hosp2" name="hosp" value="取材協力">
            <label for="hosp2">否</label>
        </div>
        <div class="cols-5">
            <input class="form-control" type="text" placeholder="※注意書き自由に">
        </div>	
    </div>

    <!-- Number of Beds -->    
    
    <div class="form-group">
        <div class="control-label cols-15">病床種別・病床数<br><span>Number of beds</span></div>
        <div class="cols-05">
            <label>種別</label>
        </div>
        <div class="cols-2">
            <select class="form-control">
                <option>選択してください</option>
            </select>
        </div>
        <div class="cols-05">
            <label>種別</label>
        </div>
        <div class="cols-3">
            <input class="form-control" type="text" id="cc" name="pres" placeholder="例)10床"> 
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success addnumbed"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>
    <div id="numbed"></div>

    <!-- Number of Beds -->    
    
    <div class="form-group check fix">
        <div class="control-label cols-15">面会可能日・時間<br><span>Possible date of visit</span></div>
        <div class="cols-1">
            <select class="form-control">
                <option>14:30</option>
            </select>
        </div>
        <div class="cols-1">
            <select class="form-control">
                <option>15:30</option>
            </select>
        </div>
        <div class="cols-4">
            月 <input type="checkbox" id="visit1" name="tag_season[]"><label for="visit1"></label>
            火 <input type="checkbox" id="visit2" name="tag_season[]"><label for="visit2"></label>
            水 <input type="checkbox" id="visit3" name="tag_season[]"><label for="visit3"></label>
            木 <input type="checkbox" id="visit4" name="tag_season[]"><label for="visit4"></label>
            金 <input type="checkbox" id="visit5" name="tag_season[]"><label for="visit5"></label>
            土 <input type="checkbox" id="visit6" name="tag_season[]"><label for="visit6"></label>
            日 <input type="checkbox" id="visit7" name="tag_season[]"><label for="visit7"></label>
            祝 <input type="checkbox" id="visit8" name="tag_season[]"><label for="visit8"></label>
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
            <input type="text" class="form-control" name="support_lang">
        </div>
    </div>

    <!-- Credit Card Payment -->
    <div class="form-group">
        <div class="control-label cols-15">クレジットカードに<br>よる支払いの可否<br><span>Credit Card Payment</span></div>
        <div class="cols-12 rad-buttons">
            <input type="radio" id="card1" name="card" value="監修">
            <label for="card1">可</label>
            <input type="radio" id="card2" name="card" value="取材協力">
            <label for="card2">否</label>
        </div>
        <div class="cols-4">
            <input class="form-control" type="text" placeholder="※注意書き自由に">
        </div>	
        <div class="sidediv cols-3">
            <div class="sidebots">
                <a class="prevbutton" type="button" class="btn-prime preview" href="#previewAddHospital">Preview</a>
                <button type="button" class="btn-prime release1" id="myBtn">Release</button>
                <button type="button" class="btn-prime release2" id="myBtn">Release</button>
            </div>
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
                <label class="control-label cols-15">会話メモ<br><span>Conversation Note</span></label>
                <div class="cols-5">   
                    <textarea class="form-control" rows="10" name="note"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">エディターの所見<br><span>Editor Opinion</span></label>
                <div class="cols-5">   
                    <textarea class="form-control" rows="10" name="note"></textarea>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" name="save" value="" class="save-btn">
    <div id="totop" class="float-btn"></div>
    <div id="tobottom" class="float-btn"></div>
 {!! Form::close() !!}
@endsection

