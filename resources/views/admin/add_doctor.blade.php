@extends('layouts.app')
@section('content')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    <h4> Add A Hospital</h4>
    {!! Form::open(array('url' => '/', 'method' => 'post')) !!}
        <table class="table">
            <tr>
                <td>URL自動生成名</td>
                <td><input type="text" class="form-control" name="url_generation"></td>
            </tr>
            <tr>
                <td>ステイタス</td>
                <td><input type="text" class="form-control" name="status"></td>
            </tr>
            <tr>
                <td>専門医・認定医 <br>（取得資格）</td>
                <td>
                    <div id="certificate_div">
                        <input type="text" class="form-control" name="certificate[]">
                    </div>
                    <div id="new_certificate"></div>
                    <a href="" class="add_certificate"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                </td>
            </tr>
            <tr>
                <td>氏名</td>
                <td><input type="text" class="form-control" name="name"></td>
            </tr>
            <tr>
                <td>ローマ字（名・氏）</td>
                <td><input type="text" class="form-control" name="alpha_name"></td>
            </tr>
            <tr>
                <td>顔写真</td>
                <td>
                <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">File</span>
                        <input type="file" name="face_image"/> <!-- rename it -->
                    </div>
                </td>
            </tr>
            <tr>
                <td>写真キャプション</td>
                <td><input type="text" class="form-control" name="img_caption"></td>
            </tr>
            <tr>
                <td>写真alt</td>
                <td><input type="text" class="form-control" name="img_alt"></td>
            </tr>
            <tr>
                <td>業種選択</td>
                <td>
                    <div class="form-group">
                        <label for="sel1">Select list</label>
                        <select class="form-control" name="industry">
                            <option>industry one</option>
                            <option>industry two</option>
                            <option>industry three</option>
                            <option>industry four</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>所属学会</td>
                <td>
                    <div id="conferencediv">
                        <input type="text" class="form-control" name="conference">
                    </div>
                    <div id="new_conference"></div>
                    <a href="" class="btn btn-info addconference">+</a>
                </td>
            </tr>
            <tr>
                <td>生年月日</td>
                <td>
                    <!-- <input type="text" id="form-control" name="b_year"> -->
                    <!-- <input type="text" id="form-control" name="b_month"> -->
                    <!-- <input type="text" id="form-control" name="b_day"> -->
                    <select id="b_year" name="b_year"></select>
                    <select id="" name="b_month">
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
                    <select id="length" name="b_day"></select>
                    
                </td>
            </tr>
            <tr>
                <td>出生地</td>
                <td><input type="text" class="form-control" name="place_of_birth"></td>
                <td><input type="text" class="form-control" name="birthplace"></td>
            </tr> 
            <tr>
                <td>経歴（学歴）</td>
                <td>
                    <div id="academic">
                        <select id="aca_year" name="c_ac_year[]"></select>
                        <select name="c_ac_month[]">
                            <option>month</option>
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
                        <input type="text" id="form-control" name="c_ac_desc[]">
                        <br>
                        <select id="aca_year_to" name="c_ac_year_to[]"></select>
                        <select name="c_ac_month_to[]">
                            <option>month</option>
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
                        <input type="text" id="form-control" name="c_ac_desc_to[]">
                    </div>
                    <div id="new_chq"></div>
                    <a href="" class="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                </td>
            </tr>
            <tr>
                <td>経歴（職歴）</td>
                <td>
                    <!-- <input type="text" id="form-control" name="c_year">
                    <input type="text" id="form-control" name="c_month">
                    <input type="text" id="form-control" name="c_desc"> -->

                    <div id="work_exp">
                        <select id="work_year" name="c_we_year[]"></select>
                        <select name="c_we_month[]">
                            <option>month</option>
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
                        <input type="text" id="form-control" name="c_we_desc[]">
                        <br>
                        <select id="work_year_to" name="c_we_year_to[]"></select>
                        <select name="c_we_month_to[]">
                            <option>month</option>
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
                        <input type="text" id="form-control" name="c_we_desc_to[]">
                    </div>
                    <div id="new_work_exp"></div>
                    <a href="" class="add_work_exp"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                </td>
            </tr>
            <tr>
                <td>経歴（賞・表彰）</td>
                <td>
                    <!-- <input type="text" id="form-control" name="c_year">
                    <input type="text" id="form-control" name="c_month">
                    <input type="text" id="form-control" name="c_desc"> -->

                    <div id="awards_div">
                        <select id="awards_year" name="c_aw_year[]"></select>
                        <select name="c_aw_month[]">
                            <option>month</option>
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
                        <input type="text" id="form-control" name="c_aw_desc[]">
                        <br>
                        <select id="awards_year_to" name="c_aw_year_to[]"></select>
                        <select name="c_aw_month_to[]">
                            <option>month</option>
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
                        <input type="text" id="form-control" name="c_aw_desc_to[]">
                    </div>
                    <div id="new_awards"></div>
                    <a href="" class="add_awards"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                </td>
            </tr>
            <tr>
                <td>最後の行に現在に至る</td>
                <td><input type="checkbox" name="n_order" value="1"> OK <input type="checkbox" name="n_order" value="0"> NO </td>
            </tr>
            <tr>
                <td>所属病院・勤務先</td>
                <td>
                    <div class="form-group">
                        <label for="sel1">Select list</label>
                        <select class="form-control" name="hospital_office">
                            <option>office one</option>
                            <option>office two</option>
                            <option>office three</option>
                            <option>office four</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>所属診療科・所属科</td>
                <td><input type="text" class="form-control" name="department"></td>
                <td><input type="text" class="form-control" name="department"></td>
                <td><input type="text" class="form-control" name="department"></td>
            </tr>
            <tr>
                <td>医師コメント</td>
                <td><textarea class="form-control" name="doc_comment"></textarea></td>
                <td><input type="submit" class="btn btn-success" value="保存" name="savedoc"><br><input type="button" class="btn btn-success" value="プレビュー"><br><input type="button" class="btn btn-info" value="公開"></td>
            </tr>
        </form>
        <table>
    </div>
</div>

<table class="table" style="background-color:#aee4e4;">
	<tr>
		<td>エディター担当者<br>Editor</td>
		<td>{!! Form::text('Editor', null , ['class' => 'form-control']) !!}</td>
		<td>{!! Form::button('エディター変更申請', ['class' => 'btn btn-success']) !!}</td>
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
{!! Form::close() !!}

@endsection