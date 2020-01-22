@extends('layouts.app')
@section('content')

<!-- {!! Form::open(array('url' => '/save_doctor', 'method' => 'post', 'files' => true)) !!} -->
{!! Form::open(['url' => '/save_doctor', 'method' => 'post', 'files' => true]) !!}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="container">
        <div class="row">
            <div class="col-2">
            URL自動生成名<br>URL generation
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="url_generation" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            職位<br>Status
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="status" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            専門医・認定医<br>（取得資格）<br>Certificate
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="certificate[]" style="width:300px">
                <input type="text" class="form- " name="certificate[]" style="width:300px"><br>
                <input type="text" class="form- " name="certificate[]" style="width:300px">
                <input type="text" class="form- " name="certificate[]" style="width:300px"><br>
                <input type="text" class="form- " name="certificate[]" style="width:300px">
                <input type="text" class="form- " name="certificate[]" style="width:300px"><br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            氏名<br>Name
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            ローマ字（名・氏）<br>Alphabet Name 
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="alpha_name" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            プロフィール画像<br>Profile image 
            </div>
            <div class="col-10">
                <div class="input-group">
                    <input type="text" class="form-control" name="profile_image_field">
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
            <input type="text" class="form-control" name="img_caption" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            画像alt<br>Image alt
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="img_alt" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            業種<br>Industry
            </div>
            <div class="col-10">
                <select class="form-control" name="industry" style="width:500px">
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
                <input type="text" class="form- " name="conference[]" style="width:300px">
                <input type="text" class="form- " name="conference[]" style="width:300px"><br>
                <input type="text" class="form- " name="conference[]" style="width:300px">
                <input type="text" class="form- " name="conference[]" style="width:300px"><br>
                <input type="text" class="form- " name="conference[]" style="width:300px">
                <input type="text" class="form- " name="conference[]" style="width:300px"><br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            生年月日<br>Birthday
            </div>
            <div class="col-10">
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
        <div class="row">
            <div class="col-2">
            出生地<br>Place of birth
            </div>
            <div class="col-10">
                <input type="text" class="form- " name="place_birth" style="width:200px">
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
                <input type="text" id="form-control" name="c_ac_desc[]" class="form- " style="width:500px">
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
                    <input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            経歴（職歴）<br>Career（職歴）
            </div>
            <div class="col-10">
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
                <input type="text" id="form-control" name="c_we_desc[]" class="form- " style="width:500px">
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
                    <input type="text" id="form-control" name="c_we_desc_to[]" class="form- " style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            経歴（賞・表彰）<br>Career（賞・表彰）
            </div>
            <div class="col-10">
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
                <input type="text" id="form-control" name="c_aw_desc[]" class="form- " style="width:500px">
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
                    <input type="text" id="form-control" name="c_aw_desc_to[]" class="form- " style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            最後の行に現在に至る　<br>最後の行に現在に至る
            </div>
            <div class="col-10">
                <input type="checkbox" name="n_order" value="1"> OK <input type="checkbox" name="n_order" value="0"> NO 
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            所属病院・勤務先<br>Hospital・Office
            </div>
            <div class="col-10">
                <select class="form-control" name="hospital_office" style="width:500px">
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
        <div class="row">
            <div class="col-2">
            医師コメント<br>Doctor Comment
            </div>
            <div class="col-10">
                <textarea class="form- " name="doc_comment" onkeyup="countChar(this)" style="width:90%;height:100%;"></textarea>
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
</div>

{!! Form::close() !!}
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