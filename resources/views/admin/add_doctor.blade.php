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
            <div class="cols-5">          
                <select name="sub_head1a[]" class="form-control">
                    <option value="">選択してください</option>
                </select>
            </div>
            <label class="control-label cols-15"></label>
            <div class="sp10 cols-5">          
                <input type="text" class="form-control" id="sub_head1b" placeholder="選択項目にない場合に入力" name="sub_head1b[]">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">専門医・認定医<br>(取得資格)<br><span>Certificate</span></label>
            <div class="sp10 cols-7">
                <div class="cols-4"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-4"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
            </div>
            <div class="sp10 cols-7">
                <div class="cols-4"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-4"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
            </div>
        </div>
        <div class="field_wrapcert1"></div>
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="cols-7">
                <div class="cols-4"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-4"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
                <div class="cols-1 relative"><button type="button" class="btn btn-success addcert1"><span class="lnr lnr-plus-circle"></span></button></div>
            </div>
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
            <div class="cols-5">          
                <!-- <input type="file" class="form-control" name="img"> -->
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl" name="profile_image_field">
                <label class="custom-file-label" for="customFileLang">ドラッグ&ドロップ、または参照で画像を追加してください</label>
                </div>

            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">プロフィール ミニ<br><span>Mini Profile image </span></label>
            <div class="cols-5">          
                <!-- <input type="file" class="form-control" name="img"> -->
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl" name="profile_image_field">
                <label class="custom-file-label" for="customFileLang">ドラッグ&ドロップ、または参照で画像を追加してください</label>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label cols-15"> 画像キャプション<br><span>Image Caption </span></label>
            <div class="cols-5">
                <input type="text" class="form-control" placeholder="院長 山田太郎" name="img_caption">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15"> 画像alt<br><span>Image Alt </span></label>
            <div class="cols-5">
                <input type="text" class="form-control" placeholder="院長 山田太郎" name="img_alt">
            </div>
        </div>
        

        <div class="form-group">
            <label class="control-label cols-15">業種<br><span>Industry</span></label>
            <div class="sp10 cols-5">          
                <select class="form-control" name="industry" >
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">所属学会<br><span>Conference</span></label>
            <div class="sp10 cols-7">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="sp10 cols-7">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label cols-15"></label>
            <div class="sp10 cols-7">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
        </div>
        
    

        <div class="form-group">
            <div class="control-label cols-15">生年月日<br><span>Birthday</span>
            </div>
            <div class="cols-12">
                <select id="b_year" name="b_year" class="form- "></select>
            </div>
            <div class="cols-12">
                <select id="" name="b_month" class="form- " >
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
            </div>
            <div class="cols-5">
                <select id="length" name="b_day" class="form- " style="width:100px"></select>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            出生地<br>Place of birth
            </div>
            <div class="cols-15">
                <input type="text" class="form- " name="place_birth">
            </div>
            <div class="cols-15">
                <span>出身地 | Birthplace</span>
            </div>
            <div class="cols-2">
                <input type="text" class="form- " name="">
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            経歴（学歴）<br><span>Career（学歴）</span>
            </div>
            <div class="cols-12">
                <select id="aca_year" name="c_ac_year[]" class="form- " style="width:100px"></select>
            </div>
            <div class="cols-12">
                <select name="c_ac_month[]" class="form- " style="width:100px">
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
            </div>
            <div class="cols-5">
                <input type="text" id="form-control" name="c_ac_desc[]" class="form- " >
            </div>
        </div>
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-12">
                <select id="aca_year_to" name="c_ac_year_to[]" class="form- " style="width:100px"></select>
            </div>
            <div class="cols-12">
                <select name="c_ac_month_to[]" class="form- " style="width:100px">
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
            </div>
            <div class="cols-5">
                <input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " >
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            経歴（職歴）<br><span>Career（職歴）</span>
            </div>
            <div class="cols-12">
                <select id="work_year" name="c_we_year[]" class="form- " style="width:100px"></select>
            </div>
            <div class="cols-12">
                <select name="c_we_month[]" class="form- " style="width:100px">
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
            </div>
            <div class="cols-5">
                <input type="text" id="form-control" name="c_we_desc[]" class="form- " >
            </div>
        </div>
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-12">
                <select id="work_year_to" name="c_we_year_to[]" class="form- " style="width:100px"></select>
            </div>
            <div class="cols-12">
                <select name="c_we_month_to[]" class="form- " style="width:100px">
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
            </div>
            <div class="cols-5">
                <input type="text" id="form-control" name="c_we_desc_to[]" class="form- " >
            </div>
        </div>

        <div class="form-group">
            <div class="control-label cols-15">
            経歴（賞・表彰）<br><span>Career（賞・表彰）</span>
            </div>
            <div class="cols-12">
                <select id="awards_year" name="c_aw_year[]" class="form- " style="width:100px"></select>
            </div>
            <div class="cols-12">
                <select name="c_aw_month[]" class="form- " style="width:100px">
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
            </div>
            <div class="cols-5">
                <input type="text" id="form-control" name="c_aw_desc[]" class="form- " >
            </div>
        <div class="form-group">
            <div class="cols-15"></div>
            <div class="cols-12">
                <select id="awards_year_to" name="c_aw_year_to[]" class="form- " style="width:100px"></select>
            </div>   
            <div class="cols-12">
                <select name="c_aw_month_to[]" class="form- " style="width:100px">
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
            </div>
            <div class="cols-5">
                    <input type="text" id="form-control" name="c_aw_desc_to[]" class="form- " >
            </div>
        </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            最後の行に現在に至る　<br><span>最後の行に現在に至る</span>
            </div>
            <div class="cols-5">
                <div class="cols-11">
                    <input type="checkbox" id="yes"  name="asn" value="1"> 
                    <label for="yes">OK</label>
                </div>
                <div class="cols-11">
                    <input type="checkbox" id="no" name="asn" value="0"> 
                    <label for="no">NO</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            所属病院・勤務先<br><span>Hospital・Office</span>
            </div>
            <div class="cols-5">
                <select class="form-control" name="hospital_office" >
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            所属診療科・所属科<br><span>Department</span>
            </div>
            <div class="cols-5">
                <select class="form- " name="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select><br>
                <select class="form- " name="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <select class="form- " name="department[]" style="width:200px">
                    <option>industry one</option>
                    <option>industry two</option>
                    <option>industry three</option>
                    <option>industry four</option>
                </select>
                <!-- <br>
                <input type="text" class="form- " name="department" style="width:200px">
                <input type="text" class="form- " name="department" style="width:200px">
                <input type="text" class="form- " name="department" style="width:200px"> -->
            </div>
        </div>
        <div class="form-group">
            <div class="control-label cols-15">
            医師コメント<br><span>Doctor Comment</span>
            </div>
            <div class="cols-4">
                <textarea class="" rows="5" cols="60" name="doc_comment" maxlength="200" onkeyup="countChar(this)" placeholder="医師プロフィールページに掲載されるコメントをお願いします。こ の文章はダミーです。文字の大きさ、量、字間、行間等を確認する ために入れています。この文章はダミーです。文字の大きさ、量、字 間、行間等を確認するために入れています。この文章はダミーで す。文字の大きさ、量、字間、行間等を確認するために入れていま す。この文章はダミーです。"></textarea>
            </div>
            <div class="cols-3">
                <div><b id="charNum">200</b> <b> / 200 </b> </div>
            </div>
            <div class="cols-1">
                <button type="button" class="btn btn-info btn-lg" id="myBtn">Preview</button>
            </div>
        </div>
        
    </div>
</div>

{!! Form::close() !!}
</div>

<table class="table" style="background-color:#aee4e4;">
	<tr>
		<td>エディター担当者<br>Editor</td>
		<td>{!! Form::text('Editor', null , ['class' => 'form-control']) !!}</td>
		<td><button type="button" class="btn-prime editor"></button></td>
	</tr>
	<tr>
		<td>アポイント履歴<br>Appointment History</td>
		<td>{!! Form::textarea('doc_comment', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td>会話メモ<br>Conversation Note</td>
		<td>{!! Form::textarea('Honorarium', null , ['class' => 'form-control']) !!}</td>
	</tr>
	<tr>
		<td>エディターの所見<br>Editor Opinion</td>
		<td>{!! Form::textarea('Note', null , ['class' => 'form-control']) !!}</td>
	</tr>
</table>

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

<!-- Link to open the modal -->
<p><a href="#ex1" rel="modal:open">Open Modal</a></p>

    <input class="save-btn" type="submit">
    <div id="totop" class="float-btn"></div>
    <div id="tobottom" class="float-btn"></div>
@endsection