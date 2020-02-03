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
    <!-- <div class="form-group">
        <label class="control-label cols-15">住所<br><span>Address</span></label>
        <div class="cols-2">
            <input type="text" class="form-control" placeholder="例)メディテラ診療所" name="postal_code">
        </div>
        <div class="cols-4">
            <input id="autocomplete_search" name="address_branch" type="text" class="form-control" placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div> -->

    <!-- Branch Address English -->
    <!-- <div class="form-group">
        <label class="control-label cols-15">住所英語表記<br><span>Address English</span></label>
        <div class="cols-2">
            <input type="text" class="form-control" placeholder="例)mediterra clinic" name="postal_code">
        </div>
        <div class="cols-4">
            <input id="autocomplete_search" name="address_english_branch" type="text" class="form-control" placeholder="Search" />
            <input type="hidden" name="lat">
            <input type="hidden" name="long">
        </div> 
    </div> -->

    <!-- Access -->
    <div class="form-group check">
        <label class="control-label cols-15">アクセス<br><span>Access</span></label>
        <div class="cols-5">   
            <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 10px;">
                <input class="styled-checkbox" id="styled-checkbox-1a" type="checkbox" name="seo" value="Sample"><label for="styled-checkbox-1a" style="font-weight:500;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
            </div>    
        </div>
    </div>
     <div class="form-group check">
        <label class="control-label cols-15"></label>
        <div class="cols-5">   
            <div style="border: 1px solid #CCC; padding: 5px; ">
                <input class="styled-checkbox" id="styled-checkbox-1b" type="checkbox" name="seo" value="Sample"><label for="styled-checkbox-1b" style="font-weight:500;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
            </div>    
        </div>
    </div>
     <div class="form-group check">
        <label class="control-label cols-15"></label>
        <div class="cols-5">   
            <div style="border: 1px solid #CCC; padding: 5px; ">
                <input class="styled-checkbox" id="styled-checkbox-1c" type="checkbox" name="seo" value="Sample"><label for="styled-checkbox-1c" style="font-weight:500;">子どもの夏の感染症の症状・原因・治療と予防法｜メディカルテラス</label>
            </div>    
        </div>
        </div>

    <!-- Parking -->
    <div class="form-group">
        <label class="control-label cols-15">駐車場<br><span>Parking</span></label>
        <div class="cols-18 rad-buttons">
            <label>料金</label>
            <input type="radio" id="sprvsn" name="p_radio" value="監修">
            <label for="sprvsn">無料</label>
            
            <input type="radio" id="cc" name="p_radio" value="取材協力">
            <label for="cc">有料</label>
        </div>	
        <div class="cols-3">          
            <select name="doctor" class="form-control">
                <option value="">選択してください</option>
                @foreach($doctors as $doc)
                    <option value="{!! $doc->id !!}">{!! $doc->name !!}</option>
                @endforeach
            </select>
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
            <input type="text" class="form-control" placeholder="" name="email">
        </div>
         <div class="cols-2 check3">
            <input type="checkbox" id="non4" name="asn" value="0"> 
            <label for="non4">非表示<br><span>Not Show</span></label>
        </div>
    </div>

    <!-- Clinic Appearance image -->
    <div class="form-group">
        <label class="control-label cols-15">医院外観画像<br><span>Clinic Appearance image </span></label>
        <div class="cols-45">          
            <div class="custom-file-upload doc">
            <!--<label for="file">File: </label>--> 
                <input type="file" id="file" name="clinic_image" name="clinic_image_field" multiple />
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
            <div class="field_wrap2"></div>
            <div id="addanother1">
                <div class="cols-10">        
                    <textarea class="form-control" name="text_subheading_hospital" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                </div>
            </div>
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>

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
                <div class="cols-3">
                    <input type="text" class="form- " placeholder="選択項目にない場合に入力" name="med_sbj_list_add[]">
                </div>
                <div class="cols-3">
                    <input type="text" class="form- " name="med_sbj_list_add[]">
                </div>
                <div class="cols-3">
                    <input type="text" class="form- " name="med_sbj_list_add[]">
                </div>

                <div class="cols-1 relative">
                    <button type="button" class="btn btn-success add6"><span class="lnr lnr-plus-circle"></span></button>
                </div>
        </div>
    </div>

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
        <div class="cols-5">          
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
            <div class="field_wrap2"></div>
            <div id="addanother1">
                <div class="cols-10">        
                    <textarea class="form-control" name="med_text_subheading" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                </div>
            </div>
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55"><button type="button" class="btn-prime image" id="show_img"></button></div>
    </div>

    <div class="form-group check">
        <div class="cols-15">
        診療科目別<br>外来受付時間<br>Examination date
        </div>
        <div class="cols-8">
            <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
            <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
            診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~
            月 <input type="checkbox" id="tag_season1" name="tag_season[]"><label for="tag_season1"></label>
            火 <input type="checkbox" id="tag_season2" name="tag_season[]"><label for="tag_season2"></label>
            水 <input type="checkbox" id="tag_season3" name="tag_season[]"><label for="tag_season3"></label>
            木 <input type="checkbox" id="tag_season4" name="tag_season[]"><label for="tag_season4"></label>
            金 <input type="checkbox" id="tag_season5" name="tag_season[]"><label for="tag_season5"></label>
            土 <input type="checkbox" id="tag_season6" name="tag_season[]"><label for="tag_season6"></label>
            日 <input type="checkbox" id="tag_season7" name="tag_season[]"><label for="tag_season7"></label>
            祝 <input type="checkbox" id="tag_season8" name="tag_season[]"><label for="tag_season8"></label>
        </div>
        <div class="cols-8">
            <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
            <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
            診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~ 
            月 <input type="checkbox" id="tag_season9" name="tag_season[]"><label for="tag_season9"></label>
            火 <input type="checkbox" id="tag_season10" name="tag_season[]"><label for="tag_season10"></label>
            水 <input type="checkbox" id="tag_season11" name="tag_season[]"><label for="tag_season11"></label>
            木 <input type="checkbox" id="tag_season12" name="tag_season[]"><label for="tag_season12"></label>
            金 <input type="checkbox" id="tag_season13" name="tag_season[]"><label for="tag_season13"></label>
            土 <input type="checkbox" id="tag_season14" name="tag_season[]"><label for="tag_season14"></label>
            日 <input type="checkbox" id="tag_season15"name="tag_season[]"><label for="tag_season15"></label>
            祝 <input type="checkbox" id="tag_season16"name="tag_season[]"><label for="tag_season16"></label>
            </div>
            <div class="cols-15"></div>
            <div class="cols-8">
                
                <div class="cols-6"><input type="text" class="form- " name="exam_comment"> </div>
            <div class="cols-3">    
            ※受診内容により日・時間が異なる場合に記載
            </div>
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

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55">
            <button type="button" class="btn-prime addto"></button>
            <button type="button" class="btn-prime add-duplicate"></button>
        </div>
    </div>

    <!-- Subheading 3-->
    <div class="form-group">
        <label class="control-label cols-15"> 医療機関キャッチ<br><span>Subheading</span></label>
        <div class="cols-5">          
            <textarea class="form-control sm2" name="med_subj_subheading" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
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
            <div class="field_wrap2"></div>
            <div id="addanother1">
                <div class="cols-10">        
                    <textarea class="form-control" name="med_text_subheading" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                </div>
            </div>
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55"><button type="button" class="btn-prime image" id="show_img"></button></div>
    </div>

    <!-- Subheading 4-->
    <div class="form-group">
        <label class="control-label cols-15"> 設備・機器<br><span>Equipment</span></label>
        <div class="cols-5">          
            <textarea class="form-control sm2" name="med_subj_subheading" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
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
            <div class="field_wrap2"></div>
            <div id="addanother1">
                <div class="cols-10">        
                    <textarea class="form-control" name="med_text_subheading" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                </div>
            </div>
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>

    <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55"><button type="button" class="btn-prime image" id="show_img"></button></div>
    </div>

    <!-- Image Alt -->
    <div class="form-group">
        <label class="control-label cols-15">画像alt<br><span>Image Alt</span></label>
        <div class="cols-5">
            <input type="text" class="form-control" placeholder="ハイフンなし半角数字" name="img_alt">
        </div>
    </div>

    <!-- Subheading 4-->
    <div class="form-group">
        <label class="control-label cols-15"> スタッフリード<br><span>Staff subheading</span></label>
        <div class="cols-4">          
            <textarea class="form-control sm2" name="med_subj_subheading" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は
            </textarea>
        </div>
        
    </div>

    <!-- Text of Subheading 4-->
    <div class="form-group editor">
         <label class="control-label cols-15"> スタッフコメント<br><span>Staff Comment</span></label>
        <div class="cols-6">   
            <!-- add new textarea here -->
            <div class="field_wrap2"></div>
            <div id="addanother1">
                <div class="cols-10">        
                    <textarea class="form-control" name="med_text_subheading" id="txt_ckeditor">メイン写真の直下に入るリードの部分です。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</textarea>
                </div>
            </div>
        </div>
        <div class="cols-1 relative"><button type="button" class="btn btn-success add-ck"><span class="lnr lnr-plus-circle"></span></button></div> 
    </div>

    <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55"><button type="button" class="btn-prime image" id="show_img"></button></div>
    </div>

<!-- =========================================== -->
        <div class="container">

            
            
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