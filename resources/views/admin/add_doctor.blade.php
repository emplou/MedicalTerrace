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
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
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
            <div class="cols-5">          
                <input type="text" class="form-control" id="sub_head1b" placeholder="選択項目にない場合に入力" name="sub_head1b[]">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label cols-15">専門医・認定医<br>(取得資格)<br><span>Certificate</span></label>
            <div class="cols-8">
                <div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
            </div>
            <div class="cols-8">
                <div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
            </div>
            <label class="control-label cols-15"></label>
            <div class="cols-8">
                <div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div>
                <div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div>
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
                <input type="text" class="form-control" name="alpha_name">
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
            <div class="cols-5">          
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
            <div class="cols-8">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
            <label class="control-label cols-15"></label>
            <div class="cols-8">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
            <label class="control-label cols-15"></label>
            <div class="cols-8">
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
                <div class="cols-5"><input type="text" class="form- " name="conference[]"></div>
            </div>
        </div>
        
    

        <div class="form-group">
            <div class="cols-15">
            生年月日<br>Birthday
            </div>
            <div class="cols-5">
                <select id="b_year" name="b_year" class="form- " style="width:100px"></select>
                <select id="" name="b_month" class="form- " style="width:100px">
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
                    <select id="length" name="b_day" class="form- " style="width:100px"></select>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-15">
            出生地<br>Place of birth
            </div>
            <div class="cols-5">
                <input type="text" class="form- " name="place_birth" style="width:200px">
                出身地 | Birthplace
                <input type="text" class="form- " name="" style="width:200px">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-15">
            経歴（学歴）<br>Career（学歴）
            </div>
            <div class="cols-5">
                <select id="aca_year" name="c_ac_year[]" class="form- " style="width:100px"></select>
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
                <input type="text" id="form-control" name="c_ac_desc[]" class="form- " >
                <br>
                        <select id="aca_year_to" name="c_ac_year_to[]" class="form- " style="width:100px"></select>
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
                    <input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " >
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-15">
            経歴（職歴）<br>Career（職歴）
            </div>
            <div class="cols-5">
                <select id="work_year" name="c_we_year[]" class="form- " style="width:100px"></select>
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
                <input type="text" id="form-control" name="c_we_desc[]" class="form- " >
                <br>
                        <select id="work_year_to" name="c_we_year_to[]" class="form- " style="width:100px"></select>
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
                    <input type="text" id="form-control" name="c_we_desc_to[]" class="form- " >
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-15">
            経歴（賞・表彰）<br>Career（賞・表彰）
            </div>
            <div class="cols-5">
                <select id="awards_year" name="c_aw_year[]" class="form- " style="width:100px"></select>
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
                <input type="text" id="form-control" name="c_aw_desc[]" class="form- " >
                <br>
                        <select id="awards_year_to" name="c_aw_year_to[]" class="form- " style="width:100px"></select>
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
                    <input type="text" id="form-control" name="c_aw_desc_to[]" class="form- " >
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-15">
            最後の行に現在に至る　<br>最後の行に現在に至る
            </div>
            <div class="cols-5">
                <input type="checkbox" name="n_order" value="1"> OK <input type="checkbox" name="n_order" value="0"> NO 
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="cols-15">
            所属病院・勤務先<br>Hospital・Office
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
        <br>
        <div class="form-group">
            <div class="cols-15">
            所属診療科・所属科<br>Department
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
        <br>
        <div class="form-group">
            <div class="cols-15">
            医師コメント<br>Doctor Comment
            </div>
            <div class="cols-5">
                <textarea class="form- " name="doc_comment" onkeyup="countChar(this)" style="width:90%;height:100%;"></textarea>
                <div style="float:right;"><b id="charNum">200</b> <b> / 200 </b> </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-12">
                <input type="submit" value="保存 | SAVE">
            </div>
        </div>


    </div>
</div>

{!! Form::close() !!}
</div>
<br>

<table class="table" style="background-color:#aee4e4;">
	<tr>
		<td>エディター担当者<br>Editor</td>
		<td>{!! Form::text('Editor', null , ['class' => 'form-control']) !!}</td>
		<td><button class="btn btn-success" style="background-color:#6ebaba;border-color:#6ebaba;">エディター変更申請<br>Editor Change Request</button></td>
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

@endsection