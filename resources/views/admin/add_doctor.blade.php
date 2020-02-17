@extends('layouts.app')
@section('content')
@include('modals.modal_add_doctor')

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
<div class="form-container  add">
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

<!-- {!! Form::open(array('url' => '/save_doctor', 'method' => 'post', 'files' => true)) !!} -->
{!! Form::open(['url' => '/save_doctor', 'method' => 'post', 'files' => true]) !!}

    <div class="form-pads">
        <div class="form-group">
            <label class="control-label cols-15">URL自動生成名<br><span>URL generation</span></label>
            <div class="cols-4">
                <input type="text" class="form-control" id="url" placeholder="例)yamada_taro" name="url_generation">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">職位<br><span>Position</span></label>
            <div class="cols-4">          
                <select name="status" class="form-control">
                    <option value="">選択してください</option>
                    <option value="Position One">Position One</option>
                    <option value="Position two">Position two</option>
                    <option value="Position three">Position three</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="sp10 cols-4">          
                <input type="text" class="form-control" id="sub_head1b" placeholder="選択項目にない場合に入力" name="sub_position">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">専門医・認定医<br>(取得資格)<br><span>Certificate</span></label>
            <div class="sp10 cols-6">
                <div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
            </div>
            <div class="sp10 cols-6">
                <div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
            </div>
        </div>
        <!-- <div class="field_wrap1"></div> -->
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="cols-6 addanother">
                <div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success addcert1"><span class="lnr lnr-plus-circle"></span></button></div>
            <div id="certificate"></div>
        </div>
            

        <div class="form-group">
            <label class="control-label cols-15">氏名<br><span>Name</span></label>
            <div class="cols-4">
                <input type="text" class="form-control" id="url" placeholder="例)山田 太郎" name="name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">ローマ字（名・氏<br><span>Alphabet Name </span></label>
            <div class="cols-4">
                <input type="text" class="form-control" name="alpha_name" placeholder="例)Taro Yamada">
            </div>
        </div>

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
            <label class="control-label cols-15">プロフィール ミニ<br><span>Mini Profile image </span></label>
            <div class="cols-45">          
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl" name="mini_profile_img">
                <label class="custom-file-label" for="customFileLang">ドラッグ&ドロップ、または参照で画像を追加してください</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15"> 画像キャプション<br><span>Image Caption </span></label>
            <div class="cols-4">
                <input type="text" class="form-control" placeholder="院長 山田太郎" name="img_caption">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15"> 画像alt<br><span>Image Alt </span></label>
            <div class="cols-4">
                <input type="text" class="form-control" placeholder="院長 山田太郎" name="img_alt">
            </div>
        </div>
        

        <div class="form-group">
            <label class="control-label cols-15">業種<br><span>Industry</span></label>
            <div class="sp10 cols-4">          
                <select class="form-control" name="industry" >
                    <option>選択してください</option>
                    <option value="industry one">industry one</option>
                    <option value="industry two">industry two</option>
                    <option value="industry three">industry three</option>
                    <option value="industry four">industry four</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">所属学会<br><span>Conference</span></label>
            <div class="sp10 cols-6">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="sp10 cols-6">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
        </div>
        <div class="field_wrap2"></div>
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="sp10 cols-6">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success addcert2"><span class="lnr lnr-plus-circle"></span></button></div>
            <div id="addconference"></div>
        </div>
        
    

        <div class="form-group check">
            <div class="control-label cols-15">生年月日<br><span>Birthday</span>
            </div>
            <div class="cols-1">
                <select id="b_year" name="b_year" class="form- ">
                <option value="0">----年</option>
                </select>
            </div>
            <div class="cols-1">
                <select id="" name="b_month" class="form- " >
                    <option value="0">--月</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="cols-1">
                <select id="length" name="b_day" class="form- ">
                <option value="0">--日</option>
                </select>
            </div>
            <div class="form-divide cols-4">
                <div class="formdiv">
                    <img src="images/icon-datepicker.png" alt="">
                </div>
                <div class="formdiv">
                    表示<br><span>Display</span>
                </div>
                <div class="formdiv">
                    <input type="checkbox" id="yes1"  name="asn" value="1"> 
                    <label for="yes1">有<br><span>OK<span></label>
                </div>
                <div class="formdiv">
                    <input type="checkbox" id="no1" name="asn" value="0"> 
                    <label for="no1">無<br><span>NO</span></label>
                </div>
                <div class="formdiv">
                    <input type="checkbox" id="non1" name="asn" value="0"> 
                    <label for="non1">生まれ年のみ可<br><span>Birth year OK</span></label>
                </div>
            </div>
        <div class="form-group check">
            <div class="control-label cols-15">
            出生地<br>Place of birth
            </div>
            <div class="cols-12">
                <input type="text" id="form-control" name="place_birth" class="form- " >
            </div>
            <div class="tcenter cols-1">
                <span>出身地 <br>Birthplace</span>
            </div>
            <div class="cols-12">
                <input type="text" id="form-control" name="birthplace" class="form- " >
            </div>
            <div class="form-divide cols-4">
                <div class="formdiv">
                    表示<br><span>Display</span>
                </div>
                <div class="formdiv">
                    <input type="checkbox" id="yes2"  name="asn" value="1"> 
                    <label for="yes2">出生地可<br><span>Place of birth OK<span></label>
                </div>
                <div class="formdiv">
                    <input type="checkbox" id="no2" name="asn" value="0"> 
                    <label for="no2">出身地可<br><span>Birthplace OK</span></label>
                </div>
                <div class="formdiv">
                    <input type="checkbox" id="non2" name="asn" value="0"> 
                    <label for="non2">無<br><span>NO</span></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            経歴（学歴）<br><span>Career（学歴）</span>
            </div>
            <div class="cols-12">
                <select id="aca_year" name="c_ac_year[]" class="form- ">
                    <option>----年</option>
                </select>
            </div>
            <div class="cols-1">
                <select name="c_ac_month[]" class="form- ">
                        <option value="">--月</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                </select>
            </div>
            <div class="cols-35">
                <input type="text" id="form-control" name="c_ac_desc[]" class="form- " >
            </div>
        </div>
        <div class="field_wrap3"></div>
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-12">
                <select id="aca_year_to" name="c_ac_year_to[]" class="form- " >
                    <option>----年</option>
                </select>
            </div>
            <div class="cols-1">
                <select name="c_ac_month_to[]" class="form- ">
                    <option value="">--月</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="cols-35">
                <input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " >
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add3"><span class="lnr lnr-plus-circle"></span></button></div>
            <div id="c_ac"></div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            経歴（職歴）<br><span>Career（職歴）</span>
            </div>
            <div class="cols-12">
                <select id="work_year" name="c_we_year[]" class="form- ">
                    <option>----年</option>
                </select>
            </div>
            <div class="cols-1">
                <select name="c_we_month[]" class="form- ">
                    <option value="">--月</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="cols-35">
                <input type="text" id="form-control" name="c_we_desc[]" class="form- " >
            </div>
            
        </div>
        <div class="field_wrap4"></div>
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-12">
                <select id="work_year_to" name="c_we_year_to[]" class="form- ">
                    <option>----年</option>
                </select>
            </div>
            <div class="cols-1">
                <select name="c_we_month_to[]" class="form- ">
                    <option value="">--月</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="cols-35">
                <input type="text" id="form-control" name="c_we_desc_to[]" class="form- " >
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add44"><span class="lnr lnr-plus-circle"></span></button></div>
            <div id="c_we"></div>
        </div>
        
        <div class="form-group">
            <div class="control-label cols-15">
            経歴（賞・表彰）<br><span>Career（賞・表彰）</span>
            </div>
            <div class="cols-12">
                <select id="awards_year" name="c_aw_year[]" class="form- ">
                    <option>----年</option>
                </select>
            </div>
            <div class="cols-1">
                <select name="c_aw_month[]" class="form- ">
                    <option value="">--月</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="cols-35">
                <input type="text" id="form-control" name="c_aw_desc[]" class="form- " >
            </div>
            <div class="field_wrap5"></div>
            <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-12">
               <select id="awards_year_to" name="c_aw_year_to[]" class="form- ">
                    <option>----年</option>
                </select>
            </div>   
            <div class="cols-1">
                <select name="c_aw_month_to[]" class="form- ">
                    <option value="">--月</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="cols-35">
                    <input type="text" id="form-control" name="c_aw_desc_to[]" class="form- " >
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add5"><span class="lnr lnr-plus-circle"></span></button></div>
            <div id="c_aw"></div>
        </div>
        </div>
        
        <div class="form-group">
            <div class="control-label cols-15">
            最後の行に現在に至る　<br><span>最後の行に現在に至る</span>
            </div>
            <div class="cols-5">
                <div class="formdiv cols-11">
                    <input type="checkbox" id="yes"  name="n_order" value="1"> 
                    <label for="yes">有<br><span>OK<span></label>
                </div>
                <div class="formdiv cols-11">
                    <input type="checkbox" id="no" name="n_order" value="0"> 
                    <label for="no">無<br><span>NO</span></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            所属病院・勤務先<br><span>Hospital・Office</span>
            </div>
            <div class="cols-65">
                <div class="cols-6">
                    <select class="form-control" name="hospital_office">
                        <option>山田太郎クリニック</option>
                        <option value="Hospital office one">Hospital office one</option>
                        <option value="Hospital office one">Hospital office two</option>
                        <option value="Hospital office one">Hospital office three</option>
                        <option value="Hospital office one">Hospital office four</option>
                    </select>
                </div>
                <div class="cols-2"><button type="button" class="btn-prime hospital"></button></div>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            エリア<br><span>Prefectures</span>
            </div>
            <div class="cols-65">
                <div class="cols-33">
                    <select class="form- " name="prefectures[]">
                        <option>選択してください</option>
                        <option value="prefectures two">department two</option>
                        <option value="prefectures three">industry three</option>
                        <option value="prefectures four">industry four</option>
                    </select>
                </div>
                <div class="cols-33">
                    <select class="form- " name="prefectures[]">
                        <option>選択してください</option>
                        <option value="prefectures two">department two</option>
                        <option value="prefectures three">industry three</option>
                        <option value="prefectures four">industry four</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            所属診療科・所属科<br><span>Department</span>
            </div>
            <div class="cols-65">
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15"></div>
            <div class="cols-65">
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="field_wrap6"></div>
        <div class="form-group">
            <div class="control-label cols-15"></div>
            <div class="cols-65">
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cols-33">
                    <select class="form- " name="department[]">
                        <option>選択してください</option>
                        @foreach($department as $dpt)
                        <option value="{!! $dpt->dpt_name !!}">{!! $dpt->dpt_name !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="cols-1 relative"><button type="button" class="btn btn-success add_dpt_doc"><span class="lnr lnr-plus-circle"></span></button></div>
            <div id="dpt_div"></div>
        </div>
            <!-- <br>
            <input type="text" class="form- " name="department" style="width:200px">
            <input type="text" class="form- " name="department" style="width:200px">
            <input type="text" class="form- " name="department" style="width:200px"> -->

        <div class="form-group">
            <div class="control-label cols-15">
            医師コメント<br><span>Doctor Comment</span>
            </div>
            <div class="cols-5">
                <textarea class="" rows="5" cols="70" name="doc_comment" maxlength="200" onkeyup="countChar(this)" placeholder="医師プロフィールページに掲載されるコメントをお願いします。こ の文章はダミーです。文字の大きさ、量、字間、行間等を確認する ために入れています。この文章はダミーです。文字の大きさ、量、字 間、行間等を確認するために入れています。この文章はダミーで す。文字の大きさ、量、字間、行間等を確認するために入れていま す。この文章はダミーです。"></textarea>
            </div>
            <div class="sidediv cols-35">
                <div class="maxnum"><b id="charNum">200</b> <b> / 200 </b> </div>
                <div class="sidebots">
                    <a class="prevbutton" type="button" class="btn-prime preview" href="#previewAddDoctor">Preview</a>
                    <button type="button" class="btn-prime release1">Release</button>
                    <button type="button" class="btn-prime release2">Release</button>
                </div>
            </div>
        </div>
        <div class="form-grey">
            <h3>ここより下部は、web上で公開されません。当社が定める個人情報保護方針に則って厳重に保管いたします。</h3>
            <div class="form-group">
                <label class="control-label cols-15">メールアドレス<br><span>Mail Address</span></label>
                    <div class="cols-4">
                        <input type="text" class="form-control" id="url" name="mail_address">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15">資格免許証(医師等)<br><span>License </span></label>
                <div class="cols-5">          
                    <div class="custom-file-upload doc">
                    <!--<label for="file">File: </label>--> 
                        <input type="file" id="file" name="myfiles[]" name="profile_image_field" multiple />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15">登録証(医師会等)<br><span>Registration Certificate </span></label>
                <div class="cols-5">          
                    <div class="custom-file-upload doc">
                    <!--<label for="file">File: </label>--> 
                    <input type="file" id="file"  name="profile_image_field"/>
                </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label cols-15">家族構成<br><span>Family Structure</span></label>
                    <div class="cols-4">
                        <input type="text" class="form-control" id="url" name="family_structure">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15">趣味<br><span>Hobby</span></label>
                    <div class="cols-4">
                        <input type="text" class="form-control" id="url" name="hobby">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label cols-15">座右の銘<br><span>Inscription</span></label>
                    <div class="cols-4">
                        <input type="text" class="form-control" id="url" name="inscription">
                    </div>
            </div>

        </div>
    </div>
</div>
<input class="save-btn" type="submit">
<div id="totop" class="float-btn"></div>
<div id="tobottom" class="float-btn"></div>
{!! Form::close() !!}
</div>

<div class="divtable">
    <div class="form-group">
        <label class="control-label cols-15">エディター担当者<br><span>Editor</span></label>
            <div class="cols-4">
            {!! Form::text('Editor', null , ['class' => 'form-control']) !!}
            </div>
            <div class="cols-15">
                <button type="button" class="btn-prime editor"></button>
            </div>
    </div>

    <div class="form-group">
        <label class="control-label cols-15">アポイント履歴<br><span>Appointment History</span></label>
            <div class="cols-4">
            {!! Form::textarea('doc_comment', null , ['class' => 'form-control']) !!}
            </div>
    </div>

    <div class="form-group">
        <label class="control-label cols-15">会話メモ<br><span>Conversation Note</span></label>
            <div class="cols-4">
            {!! Form::textarea('Honorarium', null , ['class' => 'form-control']) !!}
            </div>
    </div>

    <div class="form-group">
        <label class="control-label cols-15">エディターの所見<br><span>Conversation Note</span></label>
            <div class="cols-4">
            {!! Form::textarea('Note', null , ['class' => 'form-control']) !!}
            </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <h2>医師・医療従事者</h2>
             <p>|岐阜|岐阜市|小児科|アレルギー科|新生児内科|</p>
             <p>日本小児科学会認定小児科専門医・日本アレルギー学会 認定専門医 医学博士</p>
             <p>浅野 勉 -Tsutomu Asano-</p>
             <p>2019.06.21</p>
             <img src="images/avatar.jpg" alt="">
             <ul>
                 <li>所属学会 日本小児科学会・日本アレルギー学会・日本小児アレル ギー学会・日本新生児成育医学会</li>
                 <li>市立長浜病院小児科・NICU 部長 岐阜大学医学部附属病院新生児集中治療部 臨床講師 2015年9月「のりたけキッズベビークリニック」開院 現在に至る</li>
                 <li>コメント 医師プロフィールページに掲載されるコメントをお願 いします。この文章はダミーです。文字の大きさ、量、字 間、行間等を確認するために入れています。この文章は ダミーです。文字の大きさ、量、字間、行間等を確認する ために入れています。この文章はダミーです。文字の大 きさ、量、字間、行間等を確認するために入れています。</li>
            </ul>
             <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


    
@endsection